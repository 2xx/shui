<?php

	/*商品控制器*/

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



	//商品浏览页
	function index()
	{
		include view('goods_list.php');
	}



	