<?php 

	/*用户管理控制器*/

	auto();

	//自动执行,初始工作
	function auto()
	{	
		//为控制引入数据库操作函数库
		include "../model/db.php";

        //判断$_GET['act']所代表的函数是否存在,不存在,就什么也不执行
		// empty($_GET['act']) or !function_exists($_GET['act']) ? $_GET['act']() : '';
		isset($_GET['act']) ? $_GET['act']() : '';
	}


	//包含模板文件
	function display($viewName)
	{
		include '../view/'.pathinfo(__FILE__,PATHINFO_FILENAME).'/'.$viewName;
	}

	//用户浏览
	function index()
	{
		//每页显示多少条
		$perPage = 5;
		$nowPage = empty($_GET['page']) ? 1 : $_GET['page'];
		$limit = ' limit '.($nowPage-1)*$perPage.','.$perPage;
		$res = select('s_user');
		display('user_list.php');
	}


	//添加用户表单
	function insert()
	{
		display('user_insert.php');
	}


	//执行添加操作
	function doInsert()
	{

		if (add('s_user')){
			echo '插入用户成功...3秒后跳转';
		} else {
			echo '插入用户失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./user.php?act=insert' />";

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
		display('user_update.php');
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
		$uid = $_GET['uid'];
		display('user_repwd.php');
	}


	/**
	 * 功能 执行重置用户密码操作
	 * 参数 $_GET['uid']用户的ID
	 * 返回 提示信息,跳转回用户浏览页
	 * 
	 */
	function doResetPwd()
	{
		if (save('s_user'," where uid={$_GET['uid']}")){
			echo '重置用户密码成功...3秒后跳转';
		} else {
			echo '重置用户密码失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./user.php?act=index' />";
	}

	//测试函数
	function test()
	{
		echo pathinfo(__FILE__,PATHINFO_FILENAME);
	}
 