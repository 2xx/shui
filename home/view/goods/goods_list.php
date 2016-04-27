<?php 
	include "../view/index/header.php";
?>



<section id="loopContents">

	
	<?php
		foreach($gArr as $k=>$v){
	?>

	<div class="loop">
		<div>
		<h3><img src="../../public/uploads/goods/<?php echo $v['picname']; ?>" alt="LUSHANGHAI - LUT-217 折纸猴"></h3>
			<div class="thumbnail">
				<ul class="caption">
					<li><?php echo $v['gname']; ?></li>
					<li>RMB <?php echo $v['price']; ?></li>
				</ul>
			</div><!--thumbnail-->
		 <a href="./goods.php?act=detail&gid=<?php echo $v['gid']; ?>" class="more-link">T恤专卖 [<?php echo $v['gname']; ?>]</a>
		</div>
	</div><!--loop-->

	<?php
		}
	?>




<nav class="tablenav">

<?php
	for($i=1;$i<=$maxPage;$i++){
?>

	<a class="page-numbers <?php echo ($curPage==$i)? 'current' : ''; ?>" href="./goods.php?act=index&page=<?php echo $i; ?>"><?php echo $i; ?></a>

<?php
	}
?>

</nav>


		<div id="pagetop"><a href="http://www.lushanghai.com/#Head"><img src="../public/images/60_up.png" alt="Top" width="30" height="30"></a></div><!--#pagetop-->		


<footer id="Foot">

	<h3>路上海T恤设计 LUSHANGHAI</h3>

		<ul id="footerNav">
			<li><a href="http://www.lushanghai.com/">
			<img src="../public/images/nav_tshirt.png" alt="购买T恤" width="30" height="30"></a></li>
			<li><a href="http://www.lushanghai.com/wp-content/plugins/wp-olivecart/cart.php" rel="nofollow">
			<img src="../public/images/nav_myCart.png" alt="我的购物车" width="30" height="30"></a></li>
			<li><a href="http://www.lushanghai.com/contact/">
			<img src="../public/images/nav_phone.png" alt="联系方式" width="30" height="30"></a></li>
			<li><a href="http://www.lushanghai.com/about/">
			<img src="../public/images/nav_about.png" alt="关于我们" width="30" height="30"></a></li>
		</ul>

		<p><small><script type="text/javascript">copyright();</script>Copyright 2016 www.LUSHANGHAI.com</small></p>
		
		<ul class="friendlink">
			<li><a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">沪ICP证08115529号</a></li>
			<li><a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=201304181443505" target="_blank" rel="nofollow">上海工商亮照</a></li>
		</ul>

</footer>


<script type="text/javascript" src="../public/js/wp-embed.min.js"></script>

</div><!--#wrapper-->



</body></html>