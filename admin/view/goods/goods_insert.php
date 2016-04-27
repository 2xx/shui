<?php 

    include "../view/index/header.php";

?>

<!--   **************************************************************************************** -->

<div style='display:inline-block;position:absolute;left:250px;top:130px;width:1024px;height:400px;'>

  <table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理&nbsp;&nbsp;>&nbsp;&nbsp;添加商品</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    
    </td>
  </tr>



  <tr>
    <td align="left" valign="top">
    <form method="post" action="./goods.php?act=doinsert" enctype="multipart/form-data">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">

      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品分类</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
          <select name="tid" id="level">
              <?php
                  foreach($typeArr as $k=>$v){
                      $str = str_repeat('&nbsp;', substr_count($v['path'], ',')*6-6).'|---';
                      echo  '<option value='.$v['tid'].' >&nbsp;&nbsp;'.$str.$v['tname'].'</option>';
                  }
              ?>
          </select>
        </td>
      </tr>

      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品名称：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="gname" value="" class="text-word">
        </td>
      </tr>
      
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">定价:</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="price" value="" class="text-word">
        </td>
      </tr>
      
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">数量:</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="store" value="" class="text-word">
        </td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品图片</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="file" name="picname" value="" accept='image/*' class="text-word">
        </td>
      </tr>
      
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品状态</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <select name="status" id="level">
            <option value=0 >&nbsp;&nbsp;新品</option>
            <option value=1 >&nbsp;&nbsp;上架</option>
            <option value=2 >&nbsp;&nbsp;下架</option>
        </select>
        </td>
      </tr>

	  <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">商品描述</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <textarea name="descr" cols=50 rows=10 ></textarea>
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
