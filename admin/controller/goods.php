<?php 

	/*商品管理控制器*/

	auto();

	//自动执行,初始工作
	function auto()
	{	
		//为控制引入数据库操作函数库
		include "../model/db.php";

		//开启session, 检查是否登录
		include "./check.php";
		date_default_timezone_set('PRC');

        //判断$_GET['act']所代表的函数是否存在,不存在,就什么也不执行
		// empty($_GET['act']) or !function_exists($_GET['act']) ? $_GET['act']() : '';
		isset($_GET['act']) ? $_GET['act']() : '';
	}


	//包含模板文件
	function view($viewName)
	{
		return '../view/'.pathinfo(__FILE__,PATHINFO_FILENAME).'/'.$viewName;
	}


	//商品浏览
	function index()
	{
		//查询条件
		$where = [];

		//分页处理
		$perPage = 5;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;

		//修正当前页
		if($curPage<1){
			$curPage = 1;
		}

			//求最大页
			$link = connect();
			if(!empty($where)){
				$condition = ' where '.implode($where,' and ');
			}else{
				$condition = '';
			}
			$sql = 'select count(*) cnt from s_goods '.$condition;
			$res = mysqli_query($link,$sql);
			$cnt = mysqli_fetch_assoc($res)['cnt'];
			if ($cnt>1){
				$maxPage = ceil($cnt/$perPage);
			} else {
				$maxPage = 1;
			}

		if($curPage>$maxPage){
			$curPage = $maxPage;
		}

		$prevPage = $curPage-1;
		$nextPage = $curPage+1;


		$limit = ' limit '.($curPage-1)*$perPage.','.$perPage;
		$res = select('s_goods',$condition.$limit);
		include view('goods_list.php');

	}


	//添加商品表单
	function insert()
	{	
		$link = connect();
		$sql = "select *,concat(path,tid) npath from s_type  order by npath";
		$res = mysqli_query($link,$sql);
		$typeArr = mysqli_fetch_all($res,MYSQLI_ASSOC);
		include view('goods_insert.php');
	}


	//执行添加操作
	function doInsert()
	{
		include "../public/fileUpload.php";
		include "../public/picZoom.php";

		// print_r($_FILES);
		// die;
		//处理文件上传
		$path = '../../public/uploads/goods/';
		$size = 5024000;
		$type = ['image/jpeg','image/png','image/jpg','image/gif'];
		$res = fileUpload($path,$_FILES['picname'],$size,$type);
		if(!$res['flag']){
			echo $res['msg'].'<br />';
			echo '添加商品失败...3秒后跳转...';
			echo "<meta http-equiv='refresh' content='10;url=./goods.php?act=insert' />";
			die;
		}
		picZoom($path.$res['picname']);
		$_POST['picname'] = $res['picname'];
		$_POST['ctime'] = time();
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
	function edit()
	{
		if (empty($_GET['gid'])){
			echo '没有要编辑的商品ID';
			echo "<meta http-equiv='refresh' content='2;url=./goods.php?act=index' />";
			die;
		}
		
		$link = connect();
		$sql = "select *,concat(path,tid) npath from s_type  order by npath";
		$res = mysqli_query($link,$sql);
		$typeArr = mysqli_fetch_all($res,MYSQLI_ASSOC);
		
		$row = find('s_goods'," where gid={$_GET['gid']}");
		include view('goods_edit.php');
	}


	/**
	 * 功能 执行修改商品信息操作
	 * 参数 $_GET['gid'] 要修改的商品ID
	 *      $_POST 要修改的信息
	 * 返回 成功提示成功  失败提示失败
	 *      跳转回商品浏览页
	 */
	function doEdit()
	{
		include "../public/fileUpload.php";
		include "../public/picZoom.php";

		if (empty($_GET['gid'])){
			echo '没有要编辑的商品ID';
			echo "<meta http-equiv='refresh' content='2;url=./goods.php?act=index' />";
			die;
		}
		
	
		
		//处理文件上传,如果没有图片上传
		if($_FILES['picname']['error']!=4){

			$path = '../../public/uploads/goods/';
			$size = 5024000;
			$type = ['image/jpeg','image/png','image/jpg','image/gif'];
			$res = fileUpload($path,$_FILES['picname'],$size,$type);					

			if(!$res['flag']){
				echo $res['msg'].'<br />';
				echo '添加商品失败...3秒后跳转...';
				echo "<meta http-equiv='refresh' content='10;url=./goods.php?act=index' />";
				die;
			}
			picZoom($path.$res['picname']);
			$_POST['picname'] = $res['picname'];

		}

		if (save('s_goods'," where gid={$_GET['gid']}")){
			echo '修改商品信息成功...3秒后跳转';
		} else {
			echo '修改商品信息失败...3秒后跳转';
		}
		echo "<meta http-equiv='refresh' content='2;url=./goods.php?act=index' />";
	
	}



	//商品上架操作
	function up()
	{
		$link = connect();
		$sql = "update s_goods set status=1 where gid={$_GET['gid']}";
		$res = mysqli_query($link,$sql);
		header('location:./goods.php?act=index');
	}


	//商品下架操作
	function down()
	{
		$link = connect();
		$sql = "update s_goods set status=2 where gid={$_GET['gid']}";
		$res = mysqli_query($link,$sql);
		header('location:./goods.php?act=index');
	}



 