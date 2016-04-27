<?php

	/*购物车控制器*/

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



	//购物车首页
	function index()
	{
		include view('cart_list.php');
	}


	//放入购物车
	function put()
	{
		$row = find('s_goods'," where gid={$_GET['gid']}");
		if (empty($_SESSION['cart'][$_GET['gid']])){
			$_SESSION['cart'][$_GET['gid']] = $row;
			$_SESSION['cart'][$_GET['gid']]['cnt'] = 1;
		} else {
			$_SESSION['cart'][$_GET['gid']]['cnt'] += 1;
		}
		
		header('location:./cart.php?act=index');
		
	}


	//数量加1
	function cartAdd()
	{
		//获取商品库存
		$row = find('s_goods'," where gid={$_GET['gid']}");

		//根据库存,控制购物车中商品数量的上限
		if($_SESSION['cart'][$_GET['gid']]['cnt']<$row['store']){
			$_SESSION['cart'][$_GET['gid']]['cnt'] += 1;
		}
		
		header('location:./cart.php?act=index');
	}


	//数量减1
	function cartCut()
	{

		//控制购物车中商品数量的下限
		if($_SESSION['cart'][$_GET['gid']]['cnt']>1){
			$_SESSION['cart'][$_GET['gid']]['cnt'] -= 1;
		}
		
		header('location:./cart.php?act=index');
	}


	//从购物车中移除某个商品
	function del()
	{
		unset($_SESSION['cart'][$_GET['gid']]);
		header('location:./cart.php?act=index');
	}
	