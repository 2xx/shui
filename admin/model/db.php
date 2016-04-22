<?php 
	/*数据库操作函数库*/

	include "../public/db_config.php";



	/**
	 * 功能 连接数据库
	 * 参数 服务器地址,用户名,密码,数据库名  全部为常量使用
	 * 返回 成功返回连接对象,失败打印错误信息
	 */
	function connect()
	{
		$link = @mysqli_connect(HOST,USER,PASSWORD,DBNAME);

		if(mysqli_connect_errno()){
			printf('数据库连接失败: %s\n',mysqli_connect_error());
			die;
		}

		mysqli_set_charset($link,'utf8');

		return $link;
	}


	/**
	 * 功能 增加一条记录
	 * 参数 $_POST传参
	 *      $tblName 表名
	 * 返回 成功返回最近一个插入记录号,失败程序终止,输出错误信息
	 */
	function add($tblName)
	{	
		$link = connect();
		$field = '';
		$value = '';
		foreach($_POST as $k => $v){
			$field .= $k.',';
			$value .= "'{$v}',";
		}
		$field = rtrim($field,',');
		$value = rtrim($value,',');
		$sql = 'insert into '.$tblName.' ('.$field.') values('.$value.')';
		$res = mysqli_query($link,$sql);
		if ($res){
			return mysqli_affected_rows($link);
		}
		$msg = mysqli_error($link);
		die($msg);

	}



	/**
	 * 功能 删除数据库记录
	 * 参数 $tblName表名  $where条件
	 * 返回 成功返回受影响行数   失败打印错误信息
	 */
    function delete($tblName,$where=' where id=0')
    {
    	$link = connect();
    	$sql = 'delete from '.$tblName.' '.$where;
    	$res = mysqli_query($link,$sql);
    	if($res){
    		return mysqli_affected_rows($link);
    	}
    	$msg = mysqli_error($link);
    	die($msg);
    }



    /**
     * 功能 修改记录信息
     * 参数 $_POST提交的表单数组
     *      $tblName 表单
     *      $where 要修改记录的 条件
     * 返回 成功返回受影响行数  失败打印错误信息
     */
    function save($tblName,$where=' where id=0')
    {

    	$link = connect();
    	$str = '';
    	foreach($_POST as $k=>$v){
    		$str .= "{$k}='{$v}',";
    	}
    	$str = rtrim($str,',');
    	$sql = 'update '.$tblName.' set '.$str.' '.$where;
    	$res = mysqli_query($link,$sql); 
    	if ($res){
    		return mysqli_affected_rows();
    	} 

    	$msg = mysqli_error($link);
    	die($msg);

    }



    /**
     * 功能 查询数据
     * 参数 $tblName 表名
     *      $where 条件  默认为空字符串
     *      $limit 条件  默认为空字符串
     * 返回 成功返回结果集资源,空记录返回0,语句错打印错误信息     
     */
    function select($tblName,$where='',$limit='')
    {

    	$link = connect();
    	$sql = 'select * from '.$tblName.' '.$where.' '.$limit;
    	$res = mysqli_query($link,$sql);

    	//语句成功
    	if($res){
    		if(mysqli_num_rows($res)>0){
    		   return $res;
    		}

    		//结果集为0
    		return 0;
    	}

    	//语句错
    	$msg = mysqli_error($link);
    	die($msg);

    }




    /**
     * 功能 查找指定id的记录
     * 参数 $tblName表名
     *      $where条件
     * 返回 成功返回相应数组 没有结果返回0  
     *      如果语句错,直接打印错误信息,并终止程序
     */
    function find($tblName,$where=' where id=0')
    {
    	$link = connect();
    	$sql = 'select * from '.$tblName.' '.$where;
    	$res = mysqli_query($link,$sql);

    	//语句成功
    	if($res){
    		if(mysql_num_rows($res)>0){
    			//返回数组
    			return mysqli_fetch_assoc($res);
    		}

    		//结果集为0
    		return 0;
    	}

    	//语句错
    	$msg = mysqli_error($link);
    	die($msg);

    }