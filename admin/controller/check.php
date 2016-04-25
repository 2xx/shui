<?php 

	/*后台登录*/

	//开启session
	session_start();
	// echo $_GET['act'];
	//如果没有登录,就跳转到登录界面
	if( empty($_SESSION['flag']) && !($_GET['act']=='login' || $_GET['act']=='dologin') ){
		header('location:./user.php?act=login');
		die;
	}

 ?>