<?php 

	/*分类管理控制器*/

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

	//分类浏览
	function index()
	{
		//每页显示多少条
		$perPage = 5;
		$nowPage = empty($_GET['page']) ? 1 : $_GET['page'];
		$limit = ' limit '.($nowPage-1)*$perPage.','.$perPage;
		$link = connect();
		$sql = "select *,concat(path,id,',') npath from s_type order by npath";
		$res = mysqli_query($link,$sql);
		display('type_list.php');
	}


	//添加分类表单
	function insert()
	{
		$pid = isset($_GET['pid']) ? $_GET['pid'] : '0';
		$path = isset($_GET['path']) ? $_GET['path'] : '0,';
		$tname = isset($_GET['tname']) ? $_GET['tname'] : '根分类';
		display('type_insert.php');
	}


	//执行添加操作
	function doInsert()
	{

		if (add('s_type')){
			echo '插入分类成功...3秒后跳转';
		} else {
			echo '插入分类失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./type.php?act=insert' />";

	}


	/**
	 * 功能 删除分类
	 * 参数 $_GET['tid'] 要删除分类的id
	 * 返回 成功提示成功 失败提示失败
	 *      跳转回分类列表
	 */
	function del()
	{
		$res = select('s_type'," where pid={$_GET['tid']}");
		if(!$res){
			echo '这种分类下面有子分类,不能删除...3秒后跳转';
			echo "<meta http-equiv='refresh' content='2;url=./type.php?act=index' />";
			die;
		}
		if (delete('s_type'," where tid={$_GET['tid']}")) {
			echo '删除分类成功...3秒后跳转';
		} else {
			echo '删除分类失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./type.php?act=index' />";
	}


	/**
	 * 功能 显示编辑分类信息页面,提交给doupdate()
	 * 参数 $_GET['tid']分类id
	 * 返回 无
	 * 
	 */
	function update()
	{
		if (empty($_GET['tid'])){
			echo '没有要编辑的分类ID';
			echo "<meta http-equiv='refresh' content='2;url=./type.php?act=index' />";
			die;
		}
		$row = find('s_type'," where tid={$_GET['tid']}");
		display('type_update.php');
	}


	/**
	 * 功能 执行修改分类信息操作
	 * 参数 $_GET['tid'] 要修改的分类ID
	 *      $_POST 要修改的信息
	 * 返回 成功提示成功  失败提示失败
	 *      跳转回分类浏览页
	 */
	function doUpdate()
	{
		if (empty($_GET['tid'])){
			echo '没有要编辑的分类ID';
			echo "<meta http-equiv='refresh' content='2;url=./type.php?act=index' />";
			die;
		}
		
		if (save('s_type'," where tid={$_GET['tid']}")){
			echo '修改分类信息成功...3秒后跳转';
		} else {
			echo '修改分类信息失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./type.php?act=index' />";
	
	}


 