<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css" />

		<style>
			
		</style>
	</head>
	<body>
		<div class="container" >
		
		<div class="panel panel-default" style="margin-top:50px;">
		  <div class="panel-heading"><h3><b>用户信息修改</b></h3></div>
		  <div class="panel-body">
				<form class="form-horizontal" action="./user.php?act=save" method="post" enctype="multipart/form-data">
				<input type='hidden' name='uid' value="<?php echo $row['uid']; ?>" />
		  <div class="form-group">
		    <label for="account" class="col-md-2 control-label">账号</label>
		    <div class="col-md-3">
		      <input type="text" class="form-control" id="account" name="username" placeholder=""  value="<?php echo $row['username']; ?>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="upwd" class="col-md-2 control-label">密码</label>
		    <div class="col-md-3">
		      <input type="password" class="form-control" id="upwd" name="userpwd1" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="upwd" class="col-md-2 control-label">重复密码</label>
		    <div class="col-md-3">
		      <input type="password" class="form-control" id="upwd" name="userpwd2" placeholder="">
		    </div>
		  </div>

		  
		  <div class="form-group" >
		    <label for="authlev" class="col-md-2 control-label" style="padding-top:30px;">头像</label>
		    <div class="col-md-4" style="padding-top:20px;">
		      <input type="file" class="form-control" id="authlev" name="face"  placeholder="" >
		    </div>
			<div class="col-md-2" style="margin-top:-40px;height:100px;"><img  style="border-radius:5px;overflow:hidden;"  height="100px" src="<?php echo '../../public/uploads/face/'.$row['face']; ?>"  /></div>
		  </div>
		  <div class="form-group">
		    <label for="authlev" class="col-md-2 control-label">性别</label>
		    <div class="col-md-2">
		      <label>
		          <input type="radio" name="sex" <?php echo ($row['sex']=='m')?'checked':''; ?> value="m"> 男
		        </label>
		        <label>
		          <input type="radio" name="sex" <?php echo ($row['sex']=='w')?'checked':''; ?> value="w"> 女
		        </label>
		        <label>
		          <input type="radio" name="sex" <?php echo ($row['sex']=='s')?'checked':''; ?> value="s"> 保密
		        </label>
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label for="usrtel" class="col-md-2 control-label">联系电话</label>
		    <div class="col-md-2">
		      <input type="text" class="form-control" id="usrtel" name="tel" placeholder="" value="<?php echo $row['tel']; ?>" />
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="usraddr" class="col-md-2 control-label">收货地址</label>
		    <div class="col-md-6">
		      <input type="text" class="form-control" id="usraddr" name="addr" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-md-offset-1 col-md-4">
		      <button type="reset" class="btn btn-default col-md-5">重置</button>
		      <button type="submit" class="btn btn-primary col-md-5 col-md-offset-2 ">确认</button>
		    </div>
		  </div>
		</form>
		  </div>
		</div>
		
		
		</div>
	</body>
</html>