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
		  <div class="panel-heading"><h3><b>用户登录</b></h3></div>
		  <div class="panel-body">
				<form class="form-horizontal" action="./user.php?act=dologin" method="post" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="account" class="col-md-2 control-label">账 号</label>
		    <div class="col-md-3">
		      <input type="text" class="form-control" id="account" name="username" placeholder="">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="upwd" class="col-md-2 control-label">密 码</label>
		    <div class="col-md-3">
		      <input type="password" class="form-control" id="upwd" name="password" placeholder="">
		    </div>
		  </div>
		
		
		  <div class="form-group">
		    <div class="col-md-offset-2 col-md-4">
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