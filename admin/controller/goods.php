<?php 

	/*商品管理控制器*/

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

	//商品浏览
	function index()
	{
		//每页显示多少条
		$perPage = 5;
		$nowPage = empty($_GET['page']) ? 1 : $_GET['page'];
		$limit = ' limit '.($nowPage-1)*$perPage.','.$perPage;
		$res = select('s_goods');
		display('goods_list.php');
	}


	//添加商品表单
	function insert()
	{
		display('goods_insert.php');
	}


	//执行添加操作
	function doInsert()
	{

		if (add('s_goods')){
			echo '插入商品成功...3秒后跳转';
		} else {
			echo '插入商品失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./goods.php?act=index' />";

	}


	/**
	 * 功能 删除商品
	 * 参数 $_GET['gid'] 要删除商品的id
	 * 返回 成功提示成功 失败提示失败
	 *      跳转回商品列表
	 */
	function del()
	{
		if (delete('s_goods'," where gid={$_GET['gid']}")) {
			echo '删除商品成功...3秒后跳转';
		} else {
			echo '删除商品失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./goods.php?act=index' />";
	}


	/**
	 * 功能 显示编辑商品信息页面,提交给doupdate()
	 * 参数 $_GET['gid']商品id
	 * 返回 无
	 * 
	 */
	function update()
	{
		if (empty($_GET['gid'])){
			echo '没有要编辑的商品ID';
			echo "<meta http-equiv='refresh' content='2;url=./goods.php?act=index' />";
			die;
		}
		$row = find('s_goods'," where gid={$_GET['gid']}");
		display('goods_update.php');
	}


	/**
	 * 功能 执行修改商品信息操作
	 * 参数 $_GET['gid'] 要修改的商品ID
	 *      $_POST 要修改的信息
	 * 返回 成功提示成功  失败提示失败
	 *      跳转回商品浏览页
	 */
	function doUpdate()
	{
		if (empty($_GET['gid'])){
			echo '没有要编辑的商品ID';
			echo "<meta http-equiv='refresh' content='2;url=./goods.php?act=index' />";
			die;
		}
		
		if (save('s_goods'," where gid={$_GET['gid']}")){
			echo '修改商品信息成功...3秒后跳转';
		} else {
			echo '修改商品信息失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./goods.php?act=index' />";
	
	}





 