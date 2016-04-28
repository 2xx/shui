<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
</head>
<body>
	<center><h3>用户登录</h3></center>
	<form action="./user.php?act=dologin" method='post'>
		<table align='center' border=1 cellspacing="0" cellpadding="0">

			<tr><th>用户名</th><td><input type="text" name='username' value=''></td></tr>
			<tr><th>密 码</th><td><input type="password" name='password' value=''></td></tr>
			<tr><th>验证码</th><td><input type="text" name='code' value=''><img src="../public/code.php" onclick='this.src="../public/code.php?a="+Math.random()'  /></td></tr>
			<tr><th colspan=2><input type="reset" value='重置'>&nbsp;<input type="submit" value='提交'></th></tr>
			
		</table>
	</form>
</body>
</html>