/*
 * Shopping Cart System Olive-Cart.
 */
function mypageIn(Mypageurl,sid){
		var frm = new postSubmit();
		frm.add('sid',sid);
		frm.submit(Mypageurl, '_self');
}

function postIn(Number){
	if(document.getElementById("maincart")){
		var frm = new postSubmit();
		frm.add('number',Number);
		frm.add('count','1');
		frm.submit('', '_self');
	}
	else if(document.getElementById("maincart_ajax")){
		var size = Number+'-size';
		var count = 1;
			if(document.getElementById(size)){
				var Size = document.getElementById(size).value;
				number+= Size;
			}
		var color = Number+'-color';
			if(document.getElementById(color)){
				var Color = document.getElementById(color).value;
				number+=Color;
			}
		if(document.getElementById(Number)) {
			 count = document.getElementById(Number).value;
		}

		var Post_data="step=1&number="+Number+"&count="+count;
		CartIn(Post_data);
	}
	else{
		var Get_data  = Url+"wp-content/plugins/wp-olivecart/cart.php?step=2&count=1&number="+Number;
		location.href = Get_data;
	}
}
function postSubmit() {
    this.frmObject = document.createElement("form");
    this.frmObject.method = "get";
    
    this.add = function(elementname, elementvalue) {
       var input = document.createElement("input");
	     input.type = "hidden";
	     input.name = elementname;
	     input.value = elementvalue;
       this.frmObject.appendChild(input);
       this.frmObject.method = "post";
    };
    
    this.submit = function(url, targetFrame) {
      try {
        if (targetFrame) {
          this.frmObject.target = targetFrame;
        }
      } catch (e) { }
      
      try {
      //  if (url) {
         this.frmObject.action = url;
          document.body.appendChild(this.frmObject);
          this.frmObject.submit();
          return true;
       // } else { return false; }
      } catch (e) {
         return false;
      }
    };
}

function CartIn(Post_data){
  httpObj = createXMLHttpRequest(displayData);
  if (httpObj){
    httpObj.open("POST",CartUrl,true);
    httpObj.setRequestHeader("content-type","application/x-www-form-urlencoded;charset=UTF-8");
    httpObj.send(Post_data);
  }
}

window.onload = function (){
	if(document.getElementById("maincart_ajax")){
		var postdata='step=1';
		CartUrl=Url+'wp-content/plugins/wp-olivecart/cart.php';
		httpObj = createXMLHttpRequest(displayData);
		if (httpObj){
			httpObj.open("POST",CartUrl,true);
			httpObj.setRequestHeader("content-type","application/x-www-form-urlencoded;charset=UTF-8");
			httpObj.send(postdata);
		}
 // if (httpObj2){
  //  httpObj2.open("POST",MypageUrl,true);
  //  httpObj2.setRequestHeader("content-type","application/x-www-form-urlencoded;charset=UTF-8");
  //  httpObj2.send(postdata2);
 // }
	}
}

function displayData()
{
	var ajax_img='<img src="'+Url+'wp-content/plugins/wp-olivecart/gif/ajax-loader.gif" />';
	if(document.getElementById("maincart_ajax").innerHTML='<table id="minicart"><tr><th class="thitem">商品名</th><th class="thcount">個数</th></tr><tr><td colspan="2" class="total">'+ajax_img+'</td></tr></table>');
  if ((httpObj.readyState == 4) && (httpObj.status == 200)){
    document.getElementById("maincart_ajax").innerHTML= httpObj.responseText;
  }

//  if ((httpObj2.readyState == 4) && (httpObj2.status == 200)){
 //   document.getElementById("userlogin").innerHTML= httpObj2.responseText;
 // }
}


function createXMLHttpRequest(object)
{
  var XMLhttpObject = null;
  try{
    XMLhttpObject = new XMLHttpRequest();
  }catch(e){
    try{
      XMLhttpObject = new ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
      try{
        XMLhttpObject = new ActiveXObject("Microsoft.XMLHTTP");
      }catch(e){
        return null;
      }
    }
  }
  if (XMLhttpObject){
     XMLhttpObject.onreadystatechange = object;
     return XMLhttpObject;
  }
}


