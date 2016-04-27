<?php

	/*用户控制器*/

	auto();


	//自动处理函数
	function auto()
	{	
		session_start();
		date_default_timezone_set('PRC');
		include "../model/db.php";
		isset($_GET['act']) ? $_GET['act']() : '';
	}


	//获取模板地址
	function view($viewName)
	{
		return '../view/'.pathinfo(__FILE__,PATHINFO_FILENAME).'/'.$viewName;
	}



	//注册页
	function reg()
	{
		include view('user_reg.php');
	}


	//注册添加用户操作
	function doreg()
	{
		if($_POST['userpwd1']!=$_POST['userpwd2']){
			echo '两次密码不一致...';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=reg' />";
			die;
		}

		if(empty($_POST['userpwd1']) || empty($_POST['userpwd2'])){
			echo '密码不能为空...';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=reg' />";
			die;
		}

		$_POST['password'] = md5($_POST['userpwd1']);
		unset($_POST['userpwd1']);
		unset($_POST['userpwd2']);

		if (add('s_user')){
			echo '恭喜注册成功...';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=login' />";
			die;
		} else {
			echo '注册不成功...请重新填写注册信息...';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=reg' />";
			die;
		}


	}



	//用户登录页面
	function login()
	{
		include view('user_login.php');
	}


	//用户登录验证
	function dologin()
	{
		$row = find('s_user'," where username='{$_POST['username']}'");

		//如果查到相应的用户名
		if($row){
			$_POST['password'] = md5($_POST['password']);
			if ($row['password']==$_POST['password']){
				$_SESSION['userInfo'] = $row;
				$_SESSION['flag'] = true;
				echo '登录成功...2秒后跳转...';
				echo "<meta http-equiv='refresh' content='2;url=./index.php?act=index' />";
				die;
			}
		}  

		echo '用户名或密码不对...请重新填写登录信息...';
		echo "<meta http-equiv='refresh' content='2;url=./user.php?act=login' />";
		die;
		
	}



	//用户退出
	function logout()
	{
		unset($_SESSION['flag']);
		header('location:./index.php?act=index');
	}
	

	//用户中心页面
	function ucenter()
	{	
		$row = find('s_user'," where uid={$_SESSION['userInfo']['uid']}");
		include view('user_center.php');
	}


	//用户信息修改
	function doupdate()
	{
		if($_FILES['face']['error']==0){
			
		}
		if(empty($_GET['uid'])){
			echo '没有提交用户ID';
			echo "<meta http-equiv='refresh' content='2;url=./index.php?act=index' />";
			die;
		}

		
		//如果两个密码为空,即为不修改密码
		if(empty($_POST['userpwd1']) && empty($_POST['userpwd2'])){
				unset($_POST['userpwd1']);
				unset($_POST['userpwd2']);
				header('location:./index.php?act=index');
				die;
		}

		//如果两次密码不一致
		if($_POST['userpwd1']!=$_POST['userpwd2']){
			echo '两次密码不一致';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=ucenter' />";
			die;
		}

		$rows = save('s_user'," where uid={$_GET['uid']}");
		if($rows){
			echo '修改订单信息成功!';
		} else {
			echo '修改订单不成功';
		}

	}