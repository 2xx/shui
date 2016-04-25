<?php 

    /*编辑商品*/
    include "../view/index/header.php";

?>

<!--   **************************************************************************************** -->

<div style='display:inline-block;position:absolute;left:250px;top:130px;width:1024px;height:400px;'>

  <table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：商品管理&nbsp;&nbsp;>&nbsp;&nbsp;编辑商品</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <form method="post" action="./goods.php?act=doEdit&gid=<?php echo $row['gid']; ?>" enctype="multipart/form-data">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品名称：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="gname" value="<?php echo $row['gname']; ?>" class="text-word">
        </td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">定价:</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="price" value="<?php echo $row['price']; ?>" class="text-word">
        </td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">数量:</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="store" value="<?php echo $row['store']; ?>" class="text-word">
        </td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品图片</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="file" name="picname" value="" accept='image/*' class="text-word">
        <img src="../../public/uploads/goods/sm_<?php echo $row['picname']; ?>" />
        </td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品状态</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <select name="status" id="level">
            <option value=0 <?php echo ($row['status']=='0') ? 'selected' : ''; ?> >&nbsp;&nbsp;新品</option>
            <option value=1 <?php echo ($row['status']=='1') ? 'selected' : ''; ?> >&nbsp;&nbsp;上架</option>
            <option value=2 <?php echo ($row['status']=='2') ? 'selected' : ''; ?> >&nbsp;&nbsp;下架</option>
        </select>
        </td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input name="" type="submit" value="提交" class="text-but">
        <input name="" type="reset" value="重置" class="text-but"></td>
        </tr>
    </table>
    </form>
    </td>
    </tr>
</table>


</div>







<!--   **************************************************************************************** -->


</body>
</html>
