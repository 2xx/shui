<?php

	/*订单控制器*/

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



	//确认订单
	function addr()
	{	
		//如果没有登录,就去登录
		if(empty($_SESSION['flag'])){
			echo '请您先登录......';
			echo "<meta http-equiv='refresh' content='2;url=./user.php?act=login' />";
			die;
		}

		//如果购物车为空,就去挑选商品
		if(empty($_SESSION['cart'])){
			echo '购物车为空....请先选购商品...';
			echo "<meta  http-equiv='refresh' content='2;url=./goods.php?act=index'  />";
			die;
		}
		include view('orders_addr.php');
	}


	//用户订单确认页
	function commit()
	{	
		$_SESSION['order']['recvman'] = $_POST['recvman'];
		$_SESSION['order']['recvtel'] = $_POST['recvtel'];
		$_SESSION['order']['recvaddr'] = $_POST['recvaddr'];
		$_SESSION['order']['uid'] = $_SESSION['userInfo']['uid'];


		//因为有可能更新信息,所以这里再拿一次
		$_SESSION['userInfo'] = find('s_user'," where uid={$_SESSION['userInfo']['uid']}");
		include view('orders_commit.php');
	}


	//生成订单信息
	function mk_orders()
	{
		$_POST = $_SESSION['order'];
		$_POST['ctime'] = time();
		$_POST['order_num'] = date('YmdHis').mt_rand(1000,9999);
		$_SESSION['order']['order_num'] = $_POST['order_num'];
		$res = add('s_orders');
		//如果订单插入成功
		if($res){
			foreach($_SESSION['cart'] as $k=>$v){
				$_POST = [];
				$_POST['oid'] = $res;
				$_POST['gid'] = $k;
				$_POST['cnt'] = $v['cnt'];
				$_POST['price'] = $v['price'];
				if(!add('s_detail')){
					echo '插入明细时出错...';
					echo "<meta http-equiv='refresh' content='2;url=./index.php?act=index' />";
				}
			}

			header('location:./orders.php?act=orders_end');
			die;

		} else {
			echo '下单失败....';
			echo '<br /><a href=\'./cart.php?act=index\' >重新下单</a>';
		}

	}



	//最后告知
	function orders_end()
	{	
		$order_num = $_SESSION['order']['order_num'];
		unset($_SESSION['cart']);
		unset($_SESSION['order']);
		include view('orders_end.php');
	}