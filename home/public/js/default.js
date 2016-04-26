/*
default.js
*/

/*-------------------------------------------------------------------------------------------------------------*/
/* WINDOWS - IE6 警告 */

$(function () {
     if ( $.browser.msie && $.browser.version <= 6 ) {
             $('body').prepend('<div class="error"><h2>路上海 LUSHANGHAI</h2><h3>www.LUSHANGHAI.com</h3><p>您所使用的浏览程序为Internet Explorer 6 ..<br />Windows  Internet Explorer 9 以下的程序不能阅览本网站 ..</p></div>');
     }
});

/*-------------------------------------------------------------------------------------------------------------*/
/* WINDOWS - IE7 警告 */

$(function () {
     if ( $.browser.msie && $.browser.version <= 7 ) {
             $('body').prepend('<div class="error"><h2>路上海 LUSHANGHAI</h2><h3>www.LUSHANGHAI.com</h3><p>您所使用的浏览程序为Internet Explorer 7 ..<br />Windows  Internet Explorer 9 以下的程序不能阅览本网站 ..</p></div>');
     }
});

/*-------------------------------------------------------------------------------------------------------------*/
/* WINDOWS - IE8 警告 */

$(function () {
     if ( $.browser.msie && $.browser.version <= 8 ) {
             $('body').prepend('<div class="error"><h2>路上海 LUSHANGHAI</h2><h3>www.LUSHANGHAI.com</h3><p>您所使用的浏览程序为Internet Explorer 8 ..<br />Windows  Internet Explorer 9 以下的程序不能阅览本网站 ..</p></div>');
     }
});

/*-------------------------------------------------------------------------------------------------------------*/
/* コピーライト自動更新 */

function copyright(){
    myDate = new Date();
    myYear = "Copyright "+myDate.getFullYear()+" www.LUSHANGHAI.com";
    document.write(myYear);
}

/*-------------------------------------------------------------------------------------------------------------*/
/* ローディング */

$('head').append(
	'<style type="text/css">.wrapper { display: none; } #fade, #loading { display: block; }</style>'
);

jQuery.event.add(window,"load",function() { 
	var pageH = $(".wrapper").height();

	$("#fade").css("height", pageH).delay(900).fadeOut(800);
	$("#loading").delay(600).fadeOut(300);
	$(".wrapper").css("display", "block");
});

/*-------------------------------------------------------------------------------------------------------------*/
/*ページスクロール */

$(function() {
    var topBtn = $('#pagetop'); 
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

/*-------------------------------------------------------------------------------------------------------------*/
/* タブ：ナビゲーション */

$(document).ready(function() {
     $(".globalNav_content").hide();
     $("ul.globalNav li:first").on("active").show();
     $(".globalNav_content:first").show();

     $("ul.globalNav li").click(function() {
          $("ul.globalNav li").removeClass("active");
          $(this).addClass("active");
          $(".globalNav_content").hide();
          var activeTab = $(this).find("a").attr("href");
          $(activeTab).fadeIn();
          return false;
     });
});

/*-------------------------------------------------------------------------------------------------------------*/
/* タブ：商品の詳細 */

$(document).ready(function() {
     $(".tab_content").hide();
     $("ul.tab li:first").on("active").show();
     $(".tab_content:first").show();

     $("ul.tab li").click(function() {
          $("ul.tab li").removeClass("active");
          $(this).addClass("active");
          $(".tab_content").hide();
          var activeTab = $(this).find("a").attr("href");
          $(activeTab).fadeIn();
          return false;
     });
});

/*-------------------------------------------------------------------------------------------------------------*/
/* タブ：カートに追加 */

$(document).ready(function() {
     $(".cartContent").hide();
     $(".cartOpen:first").on("active").show();
     $(".cartContent:first").show();

     $(".cartOpen").click(function() {
          $(".cartOpen").removeClass("active");
          $(this).addClass("active");
          $(".cartContent").hide();
          var activeTab = $(this).find("a").attr("href");
          $(activeTab).fadeIn();
          return false;
     });
});

/*-------------------------------------------------------------------------------------------------------------*/
/* フォームラベル */

$(function () {
     $("form :input").focus(function() {
          $("label[for='" + this.id + "']").addClass("labelfocus");
     });

     $("form :input").blur(function() {
          $("label[for='" + this.id + "']").removeClass("labelfocus");
     });
});

/*-------------------------------------------------------------------------------------------------------------*/
/* フォームテキスト */

$(function(){
     $(".focus").focus(function(){
          if(this.value == "昵称 .."){
               $(this).val("").css("color","#FFF");
          }
     });
     $(".focus").blur(function(){
          if(this.value == ""){
               $(this).val("昵称 ..").css("color","#FFF");
          }
     });

     $(".focus2").focus(function(){
          if(this.value == "@  .."){
               $(this).val("").css("color","#FFF");
          }
     });
     $(".focus2").blur(function(){
          if(this.value == ""){
               $(this).val("@  ..").css("color","#FFF");
          }
     });

     $(".focus3").focus(function(){
          if(this.value == "number,name"){
               $(this).val("").css("color","#111");
          }
     });
     $(".focus3").blur(function(){
          if(this.value == ""){
               $(this).val("number,name").css("color","#999");
          }
     });
     
});

/*-------------------------------------------------------------------------------------------------------------*/
/* returnキーによる誤送信防止 */

$(document).ready(function() {
	$(".contact").keypress(function(ev) {
		if ((ev.which && ev.which === 13) || (ev.keyCode && ev.keyCode === 13)) {
			return false;
		} else {
			return true;
		}
	});
});

/*-------------------------------------------------------------------------------------------------------------*/

