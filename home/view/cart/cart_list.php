<?php
	include "../view/index/header.php";
?>

<div class="wrapper" style="display: block;">


<section id="cartContents">
	
	<div id="cartTitle">
	<h2><img src="../public/images/mycart.png" alt="MY CART"></h2>
		<h3>My Cart</h3>
	</div><!--#cartTitle-->

	    <div id="cart_caption">
		    <span class="textBox">LUT</span>
	    	&nbsp;-&nbsp;
		    <span class="textBox">品番</span>
	    	&nbsp;-&nbsp;
	    	<span class="textBox">寸法</span>
	    	&nbsp;-&nbsp;
	    	<span class="textBox">商品名</span>
	    </div><!--cart_caption-->


		<form name="Form" method="post" action="http://www.lushanghai.com/wp-content/plugins/wp-olivecart/cart.php">
		<input type="hidden" name="mode" value="retry">
		<input type="hidden" name="step" value="2">


		<table class="Receipt">
			<thead>
			<tr>
    				<th class="ReceiptBox">商品</th>
    				<th>单价</th>
    				<th>数量</th>
    				<th class="ReceiptContent">小计</th>
			</tr>
			</thead>




			

			<?php
				
				$_SESSION['order']['sum'] = 0;
				foreach($_SESSION['cart'] as $k=>$v){
					$_SESSION['cart'][$k]['money'] = $v['price']*$v['cnt'];
					$_SESSION['order']['sum'] += $_SESSION['cart'][$k]['money'];

			?>
	
			<tbody>
			<tr>
    				<td class="ReceiptBox2"><?php echo $v['gname']; ?><input type="hidden" name="number[]" value="LUT-216-L">...</td>
    				<td><?php echo $v['gname']; ?></td>
					<td><input name="count[]" type="text" value="1" class="inputitem01" size="2"><br>
    				</td><td class="ReceiptContent2"><?php echo $_SESSION['cart'][$k]['money']; ?></td>
			</tr>
			</tbody>

			<?php

				}

			?>


			<tr>
				<td class="ReceiptBox4">合计 RMB</td>
				<td class="ReceiptContent4" colspan="3"><?php echo $_SESSION['order']['sum']; ?></td>
			</tr>


			</tbody>
		</table>


</form>


		<input type="submit" value="× 削除" onclick="location.href =(&#39;cart.php?mode=empty&amp;step=2&#39;);" class="cartBtn_option">
		<input type="submit" value="再次计算" onclick="document.Form.submit();" class="cartBtn_option">

		
			<p class="clear"><br></p>

		<input type="submit" value="继续购物" onclick="location.href=&#39;/&#39;" class="formBtn">
		&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="购物" onclick="" class="formBtn">

</section><!--#cartContents-->

		<div id="pagetop"><a href="http://www.lushanghai.com/wp-content/plugins/wp-olivecart/cart.php?step=2#Head"><img src="./我的购物车｜路上海T恤设计 LUSHANGHAI_files/60_up.png" alt="Top" width="30" height="30"></a></div><!--#pagetop-->		


<footer id="Foot">

	<h3>路上海T恤设计 LUSHANGHAI</h3>

		<ul id="footerNav">
			<li><a href="http://www.lushanghai.com/">
			<img src="./我的购物车｜路上海T恤设计 LUSHANGHAI_files/nav_tshirt.png" alt="购买T恤" width="30" height="30"></a></li>
			<li><a href="http://www.lushanghai.com/wp-content/plugins/wp-olivecart/cart.php" rel="nofollow">
			<img src="./我的购物车｜路上海T恤设计 LUSHANGHAI_files/nav_myCart.png" alt="我的购物车" width="30" height="30"></a></li>
			<li><a href="http://www.lushanghai.com/contact/">
			<img src="./我的购物车｜路上海T恤设计 LUSHANGHAI_files/nav_phone.png" alt="联系方式" width="30" height="30"></a></li>
			<li><a href="http://www.lushanghai.com/about/">
			<img src="./我的购物车｜路上海T恤设计 LUSHANGHAI_files/nav_about.png" alt="关于我们" width="30" height="30"></a></li>
		</ul>

		<p><small><script type="text/javascript">copyright();</script>Copyright 2016 www.LUSHANGHAI.com</small></p>
		
		<ul class="friendlink">
			<li><a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">沪ICP证08115529号</a></li>
			<li><a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=201304181443505" target="_blank" rel="nofollow">上海工商亮照</a></li>
		</ul>

</footer>


<script type="text/javascript" src="./我的购物车｜路上海T恤设计 LUSHANGHAI_files/wp-embed.min.js"></script>

</div><!--#wrapper-->



</body></html>