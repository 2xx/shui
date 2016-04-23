<?php 

	/*用户管理控制器*/

	auto();

	//自动执行,初始工作
	function auto()
	{	
		//为控制引入数据库操作函数库
		include "../model/db.php";
		date_default_timezone_set('PRC');
        //判断$_GET['act']所代表的函数是否存在,不存在,就什么也不执行
		// empty($_GET['act']) or !function_exists($_GET['act']) ? $_GET['act']() : '';
		isset($_GET['act']) ? $_GET['act']() : '';
	}


	//包含模板文件
	function display($viewName)
	{
		return '../view/'.pathinfo(__FILE__,PATHINFO_FILENAME).'/'.$viewName;
	}

	//用户浏览
	function index()
	{
		//每页显示多少条
		$where = [];
		if(!empty($_POST['username'])){
			$where[] = " username like '%{$_POST['username']}%' ";
		}


		$condition = ' where '.implode($where, ' and ');

		if(empty($where)){
			$condition='';
		}
		


		//每页显示多少条记录
		$perPage = 5;

		//获取当前页码
		$nowPage = empty($_GET['page']) ? 1 : $_GET['page'];

		//为最大页码而查询
		$res = select('s_user',$condition);
		$cnt = mysqli_num_rows($res);

		//对于返回记录为0时,计算最大页为0,之后计算当前页为有错
		$maxPage = $cnt ? ceil($cnt/$perPage) : 1;

		//修正当前页码
		$nowPage = ($nowPage<1) ?  1 : $nowPage;
		$nowPage = ($nowPage>$maxPage) ? $maxPage : $nowPage;
	

		//上一页 和 下一页  不怕越界
		$prevPage = $nowPage-1;
		$nextPage = $nowPage+1;


		$limit = ' limit '.($nowPage-1)*$perPage.','.$perPage;

		$res = select('s_user',$condition,$limit);
		include display('user_list.php');

	}


	//添加用户表单
	function insert()
	{
		include display('user_insert.php');
	}


	//执行添加操作
	function doInsert()
	{
		if($_POST['pwd1']==$_POST['pwd2']){
			$_POST['password'] = md5($_POST['pwd1']);
			unset($_POST['pwd1']);
			unset($_POST['pwd2']);
		}else{
			echo '两次密码不一致,2秒后跳转...';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=insert' />";
		}
		$_POST['regtime'] = time();
		if (add('s_user')){
			echo '插入用户成功...3秒后跳转';
		} else {
			echo '插入用户失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./user.php?act=index' />";

	}


	/**
	 * 功能 删除用户
	 * 参数 $_GET['uid'] 要删除用户的id
	 * 返回 成功提示成功 失败提示失败
	 *      跳转回用户列表
	 */
	function del()
	{
		if (delete('s_user')) {
			echo '删除用户成功...3秒后跳转';
		} else {
			echo '删除用户失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./user.php?act=index' />";
	}


	/**
	 * 功能 显示编辑用户信息页面,提交给doupdate()
	 * 参数 $_GET['uid']用户id
	 * 返回 无
	 * 
	 */
	function update()
	{
		if (empty($_GET['uid'])){
			echo '没有要编辑的用户ID';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=index' />";
			die;
		}
		$row = find('s_user'," where uid={$_GET['uid']}");
		include display('user_update.php');
	}


	/**
	 * 功能 执行修改用户信息操作
	 * 参数 $_GET['uid'] 要修改的用户ID
	 *      $_POST 要修改的信息
	 * 返回 成功提示成功  失败提示失败
	 *      跳转回用户浏览页
	 */
	function doUpdate()
	{
		if (empty($_GET['uid'])){
			echo '没有要编辑的用户ID';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=index' />";
			die;
		}
		

		if (save('s_user'," where uid={$_GET['uid']}")){
			echo '修改用户信息成功...3秒后跳转';
		} else {
			echo '修改用户信息失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./user.php?act=index' />";
	
	}


	/**
	 * 功能 重置指定用户的密码
	 * 参数 $_GET['uid']用户ID
	 * 返回 无
	 */
	function resetPwd()
	{

		$row = find('s_user'," where uid={$_GET['uid']}");
		include display('user_repwd.php');
	}


	/**
	 * 功能 执行重置密码操作
	 * 参数 $_POST['pwd1'] $_POST['pwd2']
	 * 返回 提示信息
	 */
	function doResetPwd()
	{
		if($_POST['pwd1']==$_POST['pwd2']){
			$_POST['password'] = md5($_POST['pwd1']);
			unset($_POST['pwd1']);
			unset($_POST['pwd2']);
		}else{
			echo '两次密码不一致,2秒后跳转...';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=insert' />";
		}

		if (save('s_user'," where uid={$_GET['uid']}")){
			echo '修改用户信息成功...3秒后跳转';
		} else {
			echo '修改用户信息失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./user.php?act=index' />";

	}
	
	

	//测试函数
	function test()
	{
		// echo pathinfo(__FILE__,PATHINFO_FILENAME);
		$arr = [];
		echo implode($arr, ' and ');
	}
 