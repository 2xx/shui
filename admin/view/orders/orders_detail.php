<?php 
  
    /*商品详情*/
    include "../view/index/header.php";

?>

<!--   **************************************************************************************** -->

<div style='display:inline-block;position:absolute;left:250px;top:130px;width:1024px;'>
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：订单详情</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	        &nbsp;<br />&nbsp;
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">订单号</th>
        <th align="center" valign="middle" class="borderright"><?php echo $oInfo['order_num']; ?></th>
      </tr>
      <tr>
        <th align="center" valign="middle" class="borderright">收货人</th>
        <th align="center" valign="middle" class="borderright"><?php echo $oInfo['recvman']; ?></th>
      </tr>
      <tr>
        <th align="center" valign="middle" class="borderright">总额</th>
        <th align="center" valign="middle" class="borderright"><?php echo $oInfo['sum']; ?></th>
      </tr>
      <tr>  
        <th align="center" valign="middle" class="borderright">数量</th>
        <th align="center" valign="middle" class="borderright"><?php echo $oInfo['cnt']; ?></th>
      </tr>
      <tr>
        <th align="center" valign="middle" class="borderright">状态</th>
        <th align="center" valign="middle" class="borderright">
        <select name="status" id="">
            <option <?php echo ($oInfo['status']==0)? 'selected' : ''; ?> value=0>未发货</option>  
            <option <?php echo ($oInfo['status']==1)? 'selected' : ''; ?> value=1>未收货</option>  
            <option <?php echo ($oInfo['status']==2)? 'selected' : ''; ?> value=2>完成</option>  
            <option <?php echo ($oInfo['status']==3)? 'selected' : ''; ?> value=3>作废</option>  
        </select></th>
      </tr>  
      <tr>
        <th align="center" valign="middle" class="borderright">时间</th>
        <th align="center" valign="middle" class="borderright"><?php echo date('m-d H:i:s',$oInfo['ctime']); ?></th>
      </tr>
      <tr>
        <th align="center" valign="middle" colspan=2><input type="submit" value='保存'></th>
      </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <?php       

            foreach($dArr as $k=>$v){

      ?>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $v['gInfo']['gname']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><img src="../../public/uploads/goods/sm_<?php echo $v['gInfo']['picname']; ?>" /></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $v['price']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $v['cnt']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $v['money']; ?></td>
        
        
      </tr>

      <?php
                   
            }
        
      ?>
     
  
    
    </table></td>
    </tr>
 
</table>
</div>



<!--   **************************************************************************************** -->


</body>
</html>
