<?php 

	/*后台首页控制器*/
	

	auto();

	//自动执行,初始工作
	function auto()
	{	
		include "../model/db.php";
		isset($_GET['act']) ? $_GET['act']() : '';
	}


	//包含模板文件
	function display($viewName)
	{
		include '../view/'.pathinfo(__FILE__,PATHINFO_FILENAME).'/'.$viewName;
	}

	//后台首页
	function index()
	{
		display('index.php');
	}


	//测试函数
	function test()
	{
		// echo USER;
		// echo XDL;
		echo pathinfo(__FILE__,PATHINFO_FILENAME);
	}
 