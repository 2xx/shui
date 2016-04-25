<?php 
  
    /*商品列表*/
    include "../view/index/header.php";

?>

<!--   **************************************************************************************** -->

<div style='display:inline-block;position:absolute;left:250px;top:130px;width:1024px;'>
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：订单管理</td>
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
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">收货人</th>
        <th align="center" valign="middle" class="borderright">总额</th>
        <th align="center" valign="middle" class="borderright">数量</th>
        <th align="center" valign="middle" class="borderright">状态</th>
        <th align="center" valign="middle" class="borderright">时间</th>
        <th align="center" valign="middle">订单操作</th>
      </tr>
      <?php


          $i=1;
          if ($res) {

            while($row = mysqli_fetch_assoc($res)){

               $status = ['未发货','未收货','完成','作废'];
               

      ?>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['oid']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['recvman']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['sum']; ?>" /></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['store']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['cnt']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $status[$row['status']]; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo date('Y-m-d',$row['ctime']); ?></td>
        <td align="center" valign="middle" class="borderbottom">
            <a href="./orders.php?act=edit&oid=<?php echo $row['gid']; ?>"  onFocus="this.blur()" class="add">订单详情</a>
            <?php
                  if($row['status']==0){
                    echo "<span class='gray'>&nbsp;|&nbsp;</span>";
                    echo "<a href='./orders.php?act=send&oid={$row['oid']}'  onFocus='this.blur()' class='add'>发货</a>";
            ?>
        </td>
      </tr>

      <?php
                   }
            }
        }
      ?>
     
  
    
    </table></td>
    </tr>
  <tr>
    <td align="left" valign="top" class="fenye"><?php echo $cnt; ?> 条数据 <?php echo $nowPage; ?>/<?php echo $maxPage; ?> 页&nbsp;&nbsp;
    <a href="./orders.php?act=index&page=1" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;
    <a href="./orders.php?act=index&page=<?php echo $prevPage; ?>" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;
    <a href="./orders.php?act=index&page=<?php echo $nextPage; ?>" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;
    <a href="./orders.php?act=index&page=<?php echo $maxPage; ?>" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>
</div>



<!--   **************************************************************************************** -->


</body>
</html>
