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
	<center><h2>用户订单查询</h2></center>
	<table id='tb' align=center border=1 cellpadding="0" cellspacing="0">
		<tr>
			<th>订单号</th>
			<th>总金额</th>
			<th>总数量</th>
			<th>下单时间</th>
			<th>订单状态</th>
			<th>操作</th>
		</tr>

		<?php
			$status=['未发货','已发货','完成','作废'];
			foreach($oArr as $k=>$v){
		?>
		
		<tr>
			<td><?php echo $v['order_num'];?></td>
			<td><?php echo $v['sum'];?></td>
			<td><?php echo $v['cnt'];?></td>
			<td><?php echo date('Y-m-d H:i:s',$v['ctime']); ?></td>
			<td><?php echo $status[$v['status']]; ?></td>
			<td>
			<?php
				echo "<a href='./orders.php?act=detail&oid={$v['oid']}'>订单详情</a> ";
				if($v['status']==1){
					echo " <a href='./orders.php?act=setStatus&status=2&oid={$v['oid']}'>收货</a>";
				}
			?>
			</td>
		</tr>
		
		<?php
			}
		?>

	</table>
	<br />
	<center><a href='./index.php?act=index'>返回首页</a></center>
</body>
</html>