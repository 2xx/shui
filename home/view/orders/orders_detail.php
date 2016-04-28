<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户订单查询</title>
	<style>
	
		#tb{
			width:700px;
			text-align:center;
		}
		#tb td,#tb tr{
			border:1px solid black;
			height:30px;
		}
	</style>
</head>
<body>
	<center><h2>订单详情</h2></center>
	<table id='tb' align=center border=1 cellpadding="0" cellspacing="0">
		<tr>
			<th>商品名称</th>
			<th>定价</th>
			<th>总数量</th>
			<th>图片</th>
		</tr>

		<?php
			
			foreach($oArr as $k=>$v){
		?>
		
		<tr>
			<td><?php echo $v['gInfo']['gname'];?></td>
			<td><?php echo $v['price'];?></td>
			<td><?php echo $v['cnt'];?></td>
			<td><img src="../../public/uploads/goods/sm_<?php echo $v['gInfo']['picname']; ?>" /></td>
		</tr>
		
		<?php
			}
		?>

	</table>
	<br />
	<center><a href='./index.php?act=index'>返回首页</a></center>
</body>
</html>