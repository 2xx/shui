<?php

	include "../view/index/header.php";
	echo "<meta http-equiv='refresh' content='3;url=./index.php?act=index' />";
?>

<div class="wrapper" style="display: block;">

<section id="cartContents">

	<div id="orderBox">
		<h2>您的订单已发送 ..</h2>
			<h3>订单号[<?php echo $order_num; ?>]</h3>
				<p>自动回信已发送到您填写的邮箱中，如果没有收到请联系我们 ..</p>
	</div><!--#orderBox-->

<form action="./index.php?act=index" target="self" method="post">

<input type="submit" value="返回,继续浏览网站" class="submitbtn_cart_st8">
</form>
</section><!--#cartContents-->

		<div id="pagetop"><a href="http://www.lushanghai.com/wp-content/plugins/wp-olivecart/cart.php#Head"><img src="./我的购物车｜路上海T恤设计 LUSHANGHAI下单子4_files/60_up.png" alt="Top" width="30" height="30"></a></div><!--#pagetop-->		


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