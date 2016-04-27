<?php

	/*首页控制器*/

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



	//首页
	function index()
	{	
		$res = select('s_goods'," limit 6");
		if(!$res){
			die('没有商品信息');
		}
		$gArr = mysqli_fetch_all($res,MYSQLI_ASSOC);
		include view('index.php');
	}



	