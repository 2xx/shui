<?php 

    include "../view/index/header.php";

?>

<!--   **************************************************************************************** -->

<div style='display:inline-block;position:absolute;left:250px;top:130px;width:1024px;'>
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：用户管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="./user.php?act=index">
	         <span>管理员：</span>
	         <input type="text" name="username" value="" class="text-word">
	         <input  type="submit" value="查询" class="text-but">
	         </form>
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
        <th align="center" valign="middle" class="borderright">用户账号</th>
        <th align="center" valign="middle" class="borderright">性别</th>
        <th align="center" valign="middle" class="borderright">等级</th>
        <th align="center" valign="middle" class="borderright">注册日期</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <?php


          $i=1;
          if ($res) {

            while($row = mysqli_fetch_assoc($res)){

               $sex = ['w'=>'女','m'=>'男','s'=>'保密'];
               $auth = ['H'=>'管理员','L'=>'普通用户'];

      ?>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $i++; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $row['username']; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $sex[$row['sex']]; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo $auth[$row['auth']]; ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo date('Y-m-d',$row['regtime']); ?></td>
        <td align="center" valign="middle" class="borderbottom">
        <a href="./user.php?act=update&uid=<?php echo $row['uid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">编辑</a>
        <span class="gray">&nbsp;|&nbsp;</span>
        <a href="./user.php?act=del&uid=<?php echo $row['uid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
        <span class="gray">&nbsp;|&nbsp;</span>
        <a href="./user.php?act=resetPwd&uid=<?php echo $row['uid']; ?>" target="mainFrame" onFocus="this.blur()" class="add">重置密码</a>
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
    <a href="./user.php?act=index&page=1" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;
    <a href="./user.php?act=index&page=<?php echo $prevPage; ?>" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;
    <a href="./user.php?act=index&page=<?php echo $nextPage; ?>" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;
    <a href="./user.php?act=index&page=<?php echo $maxPage; ?>" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>
</div>























<!--   **************************************************************************************** -->


</body>
</html>
