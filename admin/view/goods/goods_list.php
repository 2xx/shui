<?php 
  
    /*商品列表*/
    include "../view/index/header.php";

?>

<!--   **************************************************************************************** -->

<div style='display:inline-block;position:absolute;left:250px;top:130px;width:1024px;'>
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：商品管理</td>
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
        <th align="center" valign="middle" class="borderright">商品名称</th>
        <th align="center" valign="middle" class="borderright">图片</th>
        <th align="center" valign="middle" class="borderright">定价</th>
        <th align="center" valign="middle" class="borderright">库存</th>
        <th align="center" valign="middle" class="borderright">状态</th>
        <th align="center" valign="middle" class="borderright">创建时间</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <?php


          $i=1;
          if ($res) {

            while($row = mysqli_fetch_assoc($res)){

               $status = ['新品','上架','下架'];
               

      ?>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $i++; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['gname']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom">
        <img src="../../public/uploads/goods/sm_<?php echo $row['picname']; ?>" /></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['price']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['store']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $status[$row['status']]; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo date('Y-m-d',$row['ctime']); ?></td>
        <td align="center" valign="middle" class="borderbottom">
        <a href="./goods.php?act=edit&gid=<?php echo $row['gid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">编辑</a>
        <span class="gray">&nbsp;|&nbsp;</span>
        <a href="./goods.php?act=up&gid=<?php echo $row['gid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">上架</a>&nbsp;
        <a href="./goods.php?act=down&gid=<?php echo $row['gid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">下架</a>
        <span class="gray">&nbsp;|&nbsp;</span>
        <a href="./goods.php?act=del&gid=<?php echo $row['gid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
        </td>
      </tr>

      <?php

           }
        }
      ?>
     
  
    
    </table></td>
    </tr>
  <tr>
    <td align="left" valign="top" class="fenye"><?php echo $cnt; ?> 条数据 <?php echo $nowPage; ?>/<?php echo $maxPage; ?> 页&nbsp;&nbsp;
    <a href="./goods.php?act=index&page=1" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;
    <a href="./goods.php?act=index&page=<?php echo $prevPage; ?>" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;
    <a href="./goods.php?act=index&page=<?php echo $nextPage; ?>" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;
    <a href="./goods.php?act=index&page=<?php echo $maxPage; ?>" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>
</div>























<!--   **************************************************************************************** -->


</body>
</html>
