<?php 

	/*订单管理控制器*/

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
	function view($viewName)
	{
		return '../view/'.pathinfo(__FILE__,PATHINFO_FILENAME).'/'.$viewName;
	}


	//订单浏览
	function index()
	{
		//每页显示多少条
		$perPage = 0;
		$nowPage = empty($_GET['page']) ? 1 : $_GET['page'];
		$prevPage = 0;
		$nextPage = 0;
		$maxPage = 0;
		$cnt='';
		$limit = ' limit '.($nowPage-1)*$perPage.','.$perPage;
		$res = select('s_orders');
		include view('orders_list.php');
	}



	//订单详情
	function detail()
	{
		$ores = find('s_orders'," where oid={$_GET['oid']}");
		$dres = select('s_detail'," where oid={$_GET['oid']}");
		include view('orders_detail');
	}

	

	/**
	 * 功能 显示编辑订单信息页面,提交给doupdate()
	 * 参数 $_GET['oid']订单id
	 * 返回 无
	 * 
	 */
	function update()
	{
		if (empty($_GET['oid'])){
			echo '没有要编辑的订单ID';
			echo "<meta http-equiv='refresh' content='2;url=./orders.php?act=index' />";
			die;
		}
		$row = find('s_orders'," where oid={$_GET['oid']}");
		include view('orders_update.php');
	}



	/**
	 * 功能 执行修改订单信息操作
	 * 参数 $_GET['oid'] 要修改的订单ID
	 *      $_POST 要修改的信息
	 * 返回 成功提示成功  失败提示失败
	 *      跳转回订单浏览页
	 */
	function doUpdate()
	{
		if (empty($_GET['oid'])){
			echo '没有要编辑的订单ID';
			echo "<meta http-equiv='refresh' content='2;url=./orders.php?act=index' />";
			die;
		}

		//如果是修改状态,那么声明$_POST['status']
		if(!empty($_GET['status'])){
			$_POST['status'] = $_GET['status'];
		}
		
		if (save('s_orders'," where oid={$_GET['oid']}")){
			echo '修改订单信息成功...3秒后跳转';
		} else {
			echo '修改订单信息失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./orders.php?act=index' />";
	
	}


