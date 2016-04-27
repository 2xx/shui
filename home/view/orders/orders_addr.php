<?php

	include "../view/index/header.php";

?>

<div class="wrapper" style="display: block;">


<section id="cartContents">

	<div id="cartTitle">
	<h2><img src="../public/images/mycart.png" alt="MY CART"></h2>
		<h3>填写客户信息..</h3>
	</div><!--#cartTitle-->


			<p class="clear"><br></p>


<div id="comment1">
<p><br></p></div>


	<form name="Form" method="post" action="./orders.php?act=commit">

		<dl class="orderForm">
			<dt><label for="namae">收货人</label></dt>
				<dd>
				<input type="text" name="recvman" value="<?php echo $_SESSION['userInfo']['username']; ?>" id="namae">
				</dd>


			<dt><label for="yuhbin">联系电话</label></dt>
				<dd>
				<input type="text" name="recvtel" size="10" value="<?php echo $_SESSION['userInfo']['tel']; ?>" id="yuhbin">	
				</dd>

			

			<dt><label for="ie" class="">收货地址</label></dt>
				<dd>
				<textarea name="recvaddr" rows="2" cols="44" id="ie"><?php echo $_SESSION['userInfo']['addr']; ?></textarea>
				</dd>

		</dl><!--orderForm-->
	


		<input type="submit" value="返回" onclick="history.back();" class="formBtn">
		&nbsp;&nbsp;&nbsp;&nbsp;
	
		<input type="submit" value="继续" onclick="document.Form.submit();" class="formBtn"> 

		</form>

</section><!--#cartContents-->

		<div id="pagetop"><a href="http://www.lushanghai.com/wp-content/plugins/wp-olivecart/cart.php?step=4&amp;member=no#Head"><img src="../public/images/60_up.png" alt="Top" width="30" height="30"></a></div><!--#pagetop-->		


<footer id="Foot">

	<h3>路上海T恤设计 LUSHANGHAI</h3>

		<ul id="footerNav">
			<li><a href="http://www.lushanghai.com/">
			<img src="../public/images/nav_tshirt.png" alt="购买T恤" width="30" height="30"></a></li>
			<li><a href="http://www.lushanghai.com/wp-content/plugins/wp-olivecart/cart.php" rel="nofollow">
			<img src="../public/images/nav_myCart.png" alt="我的购物车" width="30" height="30"></a></li>
			<li><a href="http://www.lushanghai.com/contact/">
			<img src="../public/images/nav_phone.png" alt="联系方式" width="30" height="30"></a></li>
			<li><a href="">
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