<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link href="../public/css/css.css" type="text/css" rel="stylesheet" />
<link href="../public/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="images/main/favicon.ico" />
<script type="text/javascript" src="../public/js/sdmenu.js"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<script language="javascript">
function switchSysBar(){
 if (parent.document.getElementById('attachucp').cols=="194,12,*"){
 document.getElementById('leftbar').style.display="";
 parent.document.getElementById('attachucp').cols="0,12,*";
 }
 else{
 parent.document.getElementById('attachucp').cols="194,12,*";
 document.getElementById('leftbar').style.display="none"
 }
}
function load(){
 if (parent.document.getElementById('attachucp').cols=="0,12,*"){
 document.getElementById('leftbar').style.display="";
 }
}
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url(../public/images/main/leftbg.jpg) left top repeat-y #f2f0f5;}



body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#main{ font-size:12px;}
#main span.time{ font-size:14px; color:#528dc5; width:100%; padding-bottom:10px; float:left}
#main div.top{ width:100%; background:url(../public/images/main/main_r2_c2.jpg) no-repeat 0 10px; padding:0 0 0 15px; line-height:35px; float:left}
#main div.sec{ width:100%; background:url(../public/images/main/main_r2_c2.jpg) no-repeat 0 15px; padding:0 0 0 15px; line-height:35px; float:left}
.left{ float:left}
#main div a{ float:left}
#main span.num{  font-size:30px; color:#538ec6; font-family:"Georgia","Tahoma","Arial";}
.left{ float:left}
div.main-tit{ font-size:14px; font-weight:bold; color:#4e4e4e; background:url(../public/images/main/main_r4_c2.jpg) no-repeat 0 33px; width:100%; padding:30px 0 0 20px; float:left}
div.main-con{ width:100%; float:left; padding:10px 0 0 20px; line-height:36px;}
div.main-corpy{ font-size:14px; font-weight:bold; color:#4e4e4e; background:url(../public/images/main/main_r6_c2.jpg) no-repeat 0 33px; width:100%; padding:30px 0 0 20px; float:left}
div.main-order{ line-height:30px; padding:10px 0 0 0;}






body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(../public/images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(../public/images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(../public/images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}

</style>
</head>
<body onselectstart="return false" oncontextmenu=return(false) style="overflow-x:hidden;">
<!--禁止网页另存为-->
<noscript><iframe scr="*.htm"></iframe></noscript>
<!--禁止网页另存为-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="header">
  <tr>
    <td rowspan="2" align="left" valign="top" id="logo"><img src="../public/images/main/logo.jpg" width="74" height="64"></td>
    <td align="left" valign="bottom">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="bottom" id="header-name">侯马经济开发区</td>
        <td align="right" valign="top" id="header-right">
        	<a href="index.html" target="topFrame" onFocus="this.blur()" class="admin-out">注销</a>
            <a href="index.html" target="top" onFocus="this.blur()" class="admin-home">管理首页</a>
        	<a href="index.html" target="_blank" onFocus="this.blur()" class="admin-index">网站首页</a>       	
            <span>
<!-- 日历 -->
<SCRIPT type=text/javascript src="../public/js/clock.js"></SCRIPT>
<SCRIPT type=text/javascript>showcal();</SCRIPT>
            </span>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="bottom">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" id="header-admin">后台管理系统</td>
        <td align="left" valign="bottom" id="header-menu">
        </td>
      </tr>
    </table></td>
  </tr>
</table>




<div id="left-top">
	<div><img src="../public/images/main/member.gif" width="44" height="44" /></div>
    <span>用户：admin<br>角色：超级管理员</span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>用户管理</span>
        <a href="./user.php?act=index" target="mainFrame" onFocus="this.blur()">浏览用户</a>
        <a href="./user.php?act=insert" target="mainFrame" onFocus="this.blur()">添加用户</a>
      </div>
      <div>
        <span>分类管理</span>
        <a href="./type.php?act=index" target="mainFrame" onFocus="this.blur()">浏览分类</a>
        <a href="./type.php?act=insert" target="mainFrame" onFocus="this.blur()">添加分类</a>
      </div>
      <div>
        <span>商品管理</span>
        <a href="./goods.php?act=index" target="mainFrame" onFocus="this.blur()">浏览商品</a>
        <a href="./goods.php?act=insert" target="mainFrame" onFocus="this.blur()">添加商品</a>
      </div>
      <div>
        <span>订单管理</span>
        <a href="./orders.php?act=index" target="mainFrame" onFocus="this.blur()">浏览订单</a>
      </div>
    </div>

<!--   **************************************************************************************** -->
<!--
<div style='display:inline-block;position:absolute;left:250px;top:150px;width:900px;'>
	<table width="99%" border="0" cellspacing="0" cellpadding="0" id="main">
  <tr>
    <td colspan="2" align="left" valign="top">
    <span class="time"><strong>上午好！admin</strong><u>[超级管理员]</u></span>
    <div class="top"><span class="left">您上次的登灵时间：2012-05-03  12:00   登录IP：127.0.0.1 &nbsp;&nbsp;&nbsp;&nbsp;如非您本人操作，请及时</span><a href="index.html" target="mainFrame" onFocus="this.blur()">更改密码</a></div>
    <div class="sec">这是您第<span class="num">80</span>次,登录！</div>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" width="50%">
    <div class="main-tit">网站信息</div>
    <div class="main-con">
    会员注册：开启<br/>
会员投稿：开启<br/>
管理员个数：<font color="#538ec6"><strong>6</strong></font> 人<br/>
登陆者IP：192.168.1.156<br/>
程序编码：UTF-8<br/>
    </div>
    </td>
    <td align="left" valign="top" width="49%">
    <div class="main-tit">服务器信息</div>
    <div class="main-con">
服务器软件：Apache/2.2.6 (Win32) PHP/5.2.5<br/>
PHP版本：5.2.5<br/>
MYSQL版本：5.0.45-community-nt<br/>
魔术引用：开启 (建议开启)<br/>
使用域名：192.168.1.124 <br/>
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">
    <div class="main-corpy">系统提示</div>
    <div class="main-order">1=>如您在使用过程有发现出错请及时与我们取得联系；为保证您得到我们的后续服务，强烈建议您购买我们的正版系统或向我们定制系统！<br/>
2=>强烈建议您将IE7以上版本或其他的浏览器</div>
    </td>
  </tr>
</table>
</div>

-->
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
	         <form method="post" action="">
	         <span>管理员：</span>
	         <input type="text" name="" value="" class="text-word">
	         <input name="" type="button" value="查询" class="text-but">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">新增管理员</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">管理帐号</th>
        <th align="center" valign="middle" class="borderright">权限</th>
        <th align="center" valign="middle" class="borderright">锁定</th>
        <th align="center" valign="middle" class="borderright">最后登录</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">1</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">2</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">3</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">4</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">5</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">6</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">7</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">8</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">9</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <tr class="bggray" onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom">10</td>
        <td align="center" valign="middle" class="borderright borderbottom">admin</td>
        <td align="center" valign="middle" class="borderright borderbottom">创始人</td>
        <td align="center" valign="middle" class="borderright borderbottom">已锁定</td>
        <td align="center" valign="middle" class="borderright borderbottom">2013-04-26 11:00:59</td>
        <td align="center" valign="middle" class="borderbottom"><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">编辑</a><span class="gray">&nbsp;|&nbsp;</span><a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td align="left" valign="top" class="fenye">11 条数据 1/1 页&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>
</div>























<!--   **************************************************************************************** -->


</body>
</html>
