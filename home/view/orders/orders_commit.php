<?php
	include "../view/index/header.php";
?>

<div class="wrapper" style="display: block;">



<section id="cartContents">

		<div id="cartTitle">
		<h2><img src="../public/images/mycart.png" alt="My cart"></h2>
			<h3>订单 ..</h3>
		</div><!--#cartTitle-->

		<dl class="ReceiptList">
			<dt>名字</dt>
				<dd><?php  echo $_SESSION['order']['recvman']; ?></dd>
			<dt>地址</dt>	
				<dd><?php  echo $_SESSION['order']['recvaddr']; ?></dd>
			<dt>电话号码</dt>
				<dd><?php  echo $_SESSION['order']['recvtel']; ?></dd>
		</dl>

			<p class="clear"><br></p>

	    <div id="cart_caption">
		    <span class="textBox">LUT</span>
	    	&nbsp;-&nbsp;
		    <span class="textBox">品番</span>
	    	&nbsp;-&nbsp;
	    	<span class="textBox">寸法</span>
	    	&nbsp;-&nbsp;
	    	<span class="textBox">商品名</span>
	    </div><!--cart_caption-->


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
					foreach($_SESSION['cart'] as $k=>$v){
			?>
			<tbody>
			<tr>
    				<td class="ReceiptBox2"><?php  echo $v['gname']; ?></td>
    				<td><?php  echo $v['price']; ?></td>
    				<td><?php  echo $v['cnt']; ?></td>
    				<td class="ReceiptContent2"><?php  echo $v['money']; ?></td>
			</tr>
			</tbody>
			<?php
					}
			?>
			
		
			<tbody>
			<tr>
				<td class="ReceiptBox4">合计 RMB</td>
				<td class="ReceiptContent4" colspan="3"><?php  echo $_SESSION['order']['sum']; ?></td>
			</tr>
			</tbody>
		</table>




		<table class="Receipt">
			<tbody>
			<tr>
			<td class="ReceiptBox3">支付方式</td>
			<td class="ReceiptContent2" colspan="3">支付宝 Alipay</td>




			</tr>
			<tr class="hide">
			<td class="ReceiptBox3">意见・希望</td>
			<td class="ReceiptContent5" colspan="3"></td>
			</tr>



			<tr class="hide">
			<td class="ReceiptBox3">收件人信息</td>
			<td class="ReceiptContent5" colspan="3">




<ul class="Receipt_list"><li>和收件人地址相同</li></ul>				</td>
			</tr>
			</tbody>
		</table>


<form name="Form" method="post" action="./orders.php?act=mk_orders">

</form>


				<input type="submit" value="返回" onclick="history.back();" class="formBtn">
				<input type="submit" value="确认订单" onclick="document.Form.submit();" class="formBtn">

</section><!--#cartContents-->

		<div id="pagetop"><a href="http://www.lushanghai.com/wp-content/plugins/wp-olivecart/cart.php#Head"><img src="../public/images/60_up.png" alt="Top" width="30" height="30"></a></div><!--#pagetop-->		


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