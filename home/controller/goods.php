<?php

	/*商品控制器*/

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



	//商品浏览页
	function index()
	{
		//查询条件
		$where = [];

		if (isset($_GET['tid'])){
			$where[] = "tid in (select tid from s_type where concat(path,tid,',') like '%{$_GET['tid']}%')";
		}
		if (empty($where)){
			$condition = '';
		} else {
			$condition = ' where '.implode($where,' and ');
		}

		//分页处理
		$perPage = 6;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;

		if ($curPage < 1){
			$curPage = 1;
		}

		$link = connect();
		$sql = 'select count(*) cnt from s_goods '.$condition;
		// echo $sql;die;
		$res = mysqli_query($link,$sql);
		$cnt = mysqli_fetch_assoc($res)['cnt'];
		
		$maxPage = ceil($cnt/$perPage);
		
		if(!$maxPage){
			$maxPage = 1;
		}

		if ($curPage > $maxPage){
			$curPage = $maxPage;
		}


		$prevPage = $curPage-1;
		$nextPage = $curPage+1;

		$limit = ' limit '.($curPage-1)*$perPage.','.$perPage;
		$res = select('s_goods',$condition.$limit);
		if ($res){
			$gArr = mysqli_fetch_all($res,MYSQLI_ASSOC);
		} else {
			$gArr = [];
		}
		include view('goods_list.php');
	}


	//商品详情页
	function detail()
	{
		$row = find('s_goods'," where gid={$_GET['gid']}");
		if(!$row){
			echo '没有找到指定商品...';
			echo "<meta http-equiv='refresh' content='2;url=./index.php?act=index' />";
			die;
		}
		include view('goods_detail.php');
	}

	