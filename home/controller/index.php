<?php

	/*首页控制器*/

	auto();


	//自动处理函数
	function auto()
	{
		include "../model/db.php";
		isset($_GET['act']) ? $_GET['act']() : '';
	}


	//获取模板地址
	function view($viewName)
	{
		return '../view/'.pathinfo(__FILE__,PATHINFO_FILENAME).'/'.$viewName;
	}



	//首页
	function index()
	{
		include view('index.php');
	}



	