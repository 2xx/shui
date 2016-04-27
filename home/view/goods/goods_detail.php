<?php
	
	include "../view/index/header.php";

?>

<!--SECTION__________1__________設計理念..-->
<section class="mainContents">
	<h2><?php echo $row['gname']; ?></h2>
		<h3 id="mainTitle"></h3>
			<p><?php echo $row['descr']; ?> </p>
			<div class="TSHIRT">
				<img src="../../public/uploads/goods/<?php echo $row['picname']; ?>" alt="LUSHANGHAI - T-shirt _ 折纸猴">
					<div class="hidden">
						<div class="wrap">
							<p>T恤 – 折纸猴</p>
				</div></div></div><!--TSHIRT-->
</section><!--mainContents-->


<!--SECTION__________2__________ショッピングカートに追加..-->
<section class="shoppingCart">
	<h3 class="cartOpen" id="cartBtn"><a href="./cart.php?act=put&gid=<?php echo $row['gid']; ?>">RMB <?php echo $row['price']; ?> 立即购买</a></h3>
		<div class="cartContent" id="cart1" style="display: block;"><p class="clear"><br></p></div><!--#cart1-->
		<div class="cartContent" id="cart2" style="display: none;">
			<div id="addtoCart_wrap">

				<div class="addtoCart_Box">
				<!--WS-->									
					<p><input name="button" type="submit" value="WS" class="addtoCart_red" onclick="postIn(&#39;LUT-217-WS&#39;)"><br>
					<img src="../../public/uploads/goods/stock.php" alt="WS" width="60" height="11"></p>
				<!--WL-->										
					<p><input name="button" type="submit" value="WL" class="addtoCart_red" onclick="postIn(&#39;LUT-217-WL&#39;)"><br>
					<img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/stock(1).php" alt="WL" width="60" height="11"></p>
				<!--M-->
					<p><input name="button" type="submit" value="M" class="addtoCart_blue" onclick="postIn(&#39;LUT-217-M&#39;)"><br>
					<img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/stock(2).php" alt="M" width="60" height="11"></p>
				<!--XL-->
					<p><input name="button" type="submit" value="XL" class="addtoCart_blue" onclick="postIn(&#39;LUT-217-XL&#39;)"><br>
					<img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/stock(3).php" alt="XL" width="60" height="11"></p>
				</div><!--addtoCart_Box-->	
										
				<div class="addtoCart_Box">
				<!--WM-->
					<p><input name="button" type="submit" value="WM" class="addtoCart_red" onclick="postIn(&#39;LUT-217-WM&#39;)"><br>
					<img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/stock(4).php" alt="WM" width="60" height="11"></p>
				<!--S-->
					<p><input name="button" type="submit" value="S" class="addtoCart_blue" onclick="postIn(&#39;LUT-217-S&#39;)"><br>
					<img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/stock(5).php" alt="S" width="60" height="11"></p>
				<!--L-->										
					<p><input name="button" type="submit" value="L" class="addtoCart_blue" onclick="postIn(&#39;LUT-217-L&#39;)"><br>
					<img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/stock(6).php" alt="L" width="60" height="11"></p>						
				<!--XXL-->
					<p><input name="button" type="submit" value="XXL" class="addtoCart_blue" onclick="postIn(&#39;LUT-217-XXL&#39;)"><br>
					<img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/stock(7).php" alt="XXL" width="60" height="11"></p>
				</div><!--addtoCart_Box-->

					<p class="cartOpen"><a href="http://www.lushanghai.com/217/#cart1">▲</a></p>
				
			</div><!--#addtoCart_wrap-->
		</div><!--#cart2-->
</section><!--shoppingCart-->


<!--SECTION__________3__________買い物について..-->
<section class="mainContents">
	<h2>TSHIRT</h2>
		<h3><?php echo $row['gname']; ?></h3>
	<div class="contentBox">

		<ul class="tab">
			<li><a href="">
			<img src="../public/images/photo.png" alt="T恤设计"></a><br>DESIGN</li>
			<li><a href="">
			<img src="../public/images/size.png" alt="T恤尺寸"></a><br>SIZE</li>
			<li><a href="">
			<img src="../public/images/about.png" alt="关于购买"></a><br>ABOUT</li>
		</ul>


			<!--TAB_____1_____空欄..-->
			<div class="tab_content" id="tab1" style="display: block;"><p class="clear"><br></p></div><!--#tab1-->

				
			<!--TAB_____2_____デザイン..-->
			<div class="tab_content" id="tab2" style="display: none;">
				
				<ul class=" tab_place">
					<li>▼</li>
					<li><img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/transparent.gif" alt="T恤尺寸"></li>	
					<li><img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/transparent.gif" alt="关于购买"></li>
				</ul>
						
					<h2>DESIGN</h2>
					<h3>T恤设计</h3>
						
						<div class="iMageBox">
							<img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/LUT-217.jpg" alt="T-shirt  _ 折纸猴">
								<div class="hidden">
									<div class="wrap">
										<ul><li>T-SHIRT – RMB 99</li></ul>
						</div></div></div><!--iMageBox-->

						<dl class="BOX">
							<dt class="noBackground"><p class="clear"><br></p></dt>
								<dd><span class="highlight">品牌</span>路上海 LUSHANGHAI</dd>
								<dd><span class="highlight">商品</span>T-SHIRT（男女兼用）</dd>
								<dd><span class="highlight">设计</span>LUT-217 折纸猴</dd>
								<dd><span class="highlight">颜色</span>黑色</dd>
								<dd><span class="highlight">成分</span>100%棉 – 7oz</dd>
								<dd><span class="highlight">价格</span>RMB 99元</dd>
						</dl>			
			
<!--____▼ _________________________________________-->

				<ul class="tab">
					<li>&nbsp;</li>
					<li><a href="http://www.lushanghai.com/217/#tab1" class="yellow">▲</a></li>
					<li>&nbsp;</li>
				</ul>

			</div><!--#tab2-->


			<!--TAB_____3_____サイズ表..-->
			<div class="tab_content" id="tab3" style="display: none;">
				
				<ul class=" tab_place">
					<li><img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/transparent.gif" alt="T恤设计"></li>
					<li>▼</li>
					<li><img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/transparent.gif" alt="关于购买"></li>
				</ul>

					<h2>SIZE</h2>
					<h3>T恤尺寸</h3>
						
						<table class="table_Size">
							<caption>cm</caption> 
								<thead>
									<tr>
										<th>Size</th><th>女</th><th>男</th><th>身长</th><th>袖长</th><th>胸围</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>WS</td><td class="td_women">●</td><td class="td_none">-</td><td>58</td><td>15</td><td>41.5</td>
									</tr>
									<tr class="tr_bg">
										<td>WM</td><td class="td_women">●</td><td class="td_none">-</td><td>60</td><td>16</td><td>44</td>
									</tr>
									<tr>
										<td>WL</td><td class="td_women">●</td><td class="td_none">-</td><td>62</td><td>17</td><td>47</td>
									</tr>
									<tr class="tr_bg">
										<td>S</td><td class="td_women">●</td><td class="td_men">●</td><td>66</td><td>17</td><td>46</td>
									</tr>
									<tr>
										<td>M</td><td class="td_women">●</td><td class="td_men">●</td><td>67</td><td>17</td><td>50</td>
									</tr>
									<tr class="tr_bg">
										<td>L</td><td class="td_none">-</td><td class="td_men">●</td><td>71</td><td>20</td><td>53</td>
									</tr>
									<tr>
										<td>XL</td><td class="td_none">-</td><td class="td_men">●</td><td>74</td><td>21</td><td>56</td>
									</tr>
										<tr class="tr_bg">
										<td>XXL</td><td class="td_none">-</td><td class="td_men">●</td><td>78</td><td>23</td><td>60</td>
									</tr>
								</tbody>
						</table>

				<ul class="tab">
					<li>&nbsp;</li>
					<li><a href="http://www.lushanghai.com/217/#tab1" class="yellow">▲</a></li>
					<li>&nbsp;</li>
				</ul>
							
			</div><!--#tab3-->


			<!--TAB_____4_____買い物について..-->
			<div class="tab_content" id="tab4" style="display: none;">
				
				<ul class=" tab_place">
					<li><img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/transparent.gif" alt="T恤设计"></li>		
					<li><img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/transparent.gif" alt="T恤尺寸"></li>
					<li>▼</li>
				</ul>

					<h2>ABOUT</h2>
					<h3>关于购买</h3>

						<!--TAB_____4-1_____支配方法について..-->		
						<div class="tabBox">
							<h4>付款方式</h4>
							<h5>支付宝，全球领先的独立第三方支付平台，<br>致力于为广大用户提供安全快速的电子支付 ..</h5>
								<p><img src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/alipay.png" alt="支付宝" width="200" height="100"></p>
						</div><!--tabBox-->

						<!--TAB_____4-2_____買い方について..-->
						<div class="tabBox">						
							<h4>购买方式</h4>
							<h5>在购物车内实现购物</h5>
							
							<div class="videoBox">																			
								<video controls="" reload="none" poster="http://www.lushanghai.com/wp-content/themes/lushanghai/images/background/video.jpg" width="320" height="240">
									<source src="http://www.lushanghai.com/wp-content/themes/lushanghai/video/mp4/cart.mp4" type="video/mp4">
								</video>
							</div><!--videoBox-->

						</div><!--tabBox-->
						
						<!--TAB_____4-3_____配送について..-->
						<div class="tabBox">
							<h4>运费</h4>
							<h5>付款后在正常工作日的1日内进行发货</h5>

									<form action="http://www.lushanghai.com/217/#" name="postagecarriage" id="charge">
										<select name="china" id="china" onchange="document.postagecarriage.cn.value=this.value" class="dropdown">
											<option value="">選択</option>
											<option value="RMB 12">上海</option>
											<option value="RMB 22">北京</option>
											<option value="RMB 22">天津</option>
											<option value="RMB 22">河北</option>
											<option value="RMB 22">河南</option>
											<option value="RMB 14">安徽</option>
											<option value="RMB 12">浙江</option>
											<option value="RMB 22">重庆</option>
											<option value="RMB 22">福建</option>
											<option value="RMB 22">甘肃</option>
											<option value="RMB 22">广东</option>
											<option value="RMB 22">广西</option>
											<option value="RMB 22">贵州</option>
											<option value="RMB 22">云南</option>
											<option value="RMB 22">内蒙古</option>
											<option value="RMB 22">江西</option>
											<option value="RMB 22">湖北</option>
											<option value="RMB 22">四川</option>
											<option value="RMB 22">宁夏</option>
											<option value="RMB 22">青海</option>
											<option value="RMB 22">山东</option>
											<option value="RMB 22">陕西</option>
											<option value="RMB 22">山西</option>
											<option value="RMB 24">新疆</option>
											<option value="RMB 24">西藏</option>
											<option value="RMB 30">香港</option>
											<option value="RMB 35">台湾</option>
											<option value="RMB 30">澳门</option>
											<option value="RMB 22">海南</option>
											<option value="RMB 22">湖南</option>
											<option value="RMB 12">江苏</option>
											<option value="RMB 22">黑龙江</option>
											<option value="RMB 22">吉林</option>
											<option value="RMB 22">辽宁</option>
										</select>
											<input type="text" value="" name="cn" readonly="readonly" class="dropdown-readonly">
									</form>
								
								<p><span class="yellow">现在，本网站暂不提供向国外发货的功能，<br>仅限定于国内的配送 ..</span></p>

						</div><!--tabBox-->
						
				<ul class="tab">
					<li>&nbsp;</li>
					<li><a href="http://www.lushanghai.com/217/#tab1" class="yellow">▲</a></li>
					<li>&nbsp;</li>
				</ul>
		
			</div><!--#tab4-->
			
	</div><!--contentBox-->		
</section><!--mainContents-->


	<!--関連商品..-->
	<aside id="tagContents">
		<h3>向你推荐 ..</h3>
			<ul id="tag">
        		<li><a href="http://www.lushanghai.com/216-2/"><img src="../public/images/88.png" alt="216"></a></li>
        		<li><a href="http://www.lushanghai.com/214/"><img src="../public/images/89.png" alt="214"></a></li>
        		<li><a href="http://www.lushanghai.com/213/"><img src="../public/images/160.png" alt="213"></a></li>
        		<li><a href="http://www.lushanghai.com/212/"><img src="../public/images/163.png" alt="212"></a></li>
        		<li><a href="http://www.lushanghai.com/211/"><img src="../public/images/186.png" alt="211"></a></li>
        		<li><a href="http://www.lushanghai.com/210/"><img src="../public/images/196.png" alt="210"></a></li>
        		<li><a href="http://www.lushanghai.com/209/"><img src="../public/images/201.png" alt="209"></a></li>
        		<li><a href="http://www.lushanghai.com/191/"><img src="../public/images/191.png" alt="191"></a></li>
			</ul>
	</aside><!--#tagContents-->

<!--____▲ _________________________________________-->			


		<div id="pagetop"><a href="http://www.lushanghai.com/217/#Head"><img src="../public/images/60_up.png" alt="Top" width="30" height="30"></a></div><!--#pagetop-->		


<footer id="Foot">

	<h3>路上海T恤设计 LUSHANGHAI</h3>

		<ul id="footerNav">
			<li><a href="http://www.lushanghai.com/">
			<img src="../public/images/nav_tshirt.png" alt="购买T恤" width="30" height="30"></a></li>
			<li><a href="" rel="nofollow"><img src="../public/images/nav_myCart.png" alt="我的购物车" width="30" height="30"></a></li>
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


<script type="text/javascript" src="./217 折纸猴 ｜ 路上海T恤设计 LUSHANGHAI_files/wp-embed.min.js"></script>

</div><!--#wrapper-->



</body></html>