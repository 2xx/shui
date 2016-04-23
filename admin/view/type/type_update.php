<?php 

    /*添加新类型*/
    include "../view/index/header.php";

?>

<!--   **************************************************************************************** -->

<div style='display:inline-block;position:absolute;left:250px;top:130px;width:1024px;height:400px;'>

  <table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理&nbsp;&nbsp;>&nbsp;&nbsp;添加分类</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    <br />
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <form method="post" action="./type.php?act=doupdate&tid=<?php echo $row['tid']; ?>">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray"> 父级名称：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="" value="<?php echo $pname; ?>" disabled class="text-word">
        <input type="hidden" name="pid" value="<?php echo $row['pid']; ?>" readonly class="text-word">
        <input type="hidden" name="path" value="<?php echo $row['path']; ?>" readonly class="text-word">
        </td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">子类名称：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="tname" value="<?php echo $row['tname']; ?>" class="text-word">
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
