<?php 
	
	/*生成验证码*/
	  session_start();
	  
	//0.预定义参数
	  $codeLength = 4;
	  $width = $codeLength*20;
	  $height = 20;
	  $fontfile = './arialbd.ttf';
	  $_SESSION['code'] = '';

	//1.创建画布
	  $img = imagecreatetruecolor($width, $height);

	//2.随机色填充画布背景
	  $bgColor = imagecolorallocate($img, rand(131,255), rand(131,255), rand(131,255));
	  imagefill($img, 0, 0, $bgColor);

	//3.绘制干扰点
	  for ($i=0; $i < 100; $i++) { 
	  	$pColor = imagecolorallocate($img,rand(0,130),rand(0,130),rand(0,130));
	    imagesetpixel($img, rand(0,$width), rand(0,$height), $pColor);
	  }
	  
	//3.绘制字符
	  $str = '3456789abcdefghijkmnpqrstuvwxyABCDEFGHIJKLMNPQRSTUVWXY';
	  $cnt = strlen($str)-1;
	  for ($i=0; $i < $codeLength; $i++) { 
	  	$text = $str[mt_rand(0,$cnt)];
	  	$_SESSION['code'] .= $text;
	  	$color = imagecolorallocate($img, rand(0,130), rand(0,130), rand(0,130));
	  	imagettftext($img, $size=16, $angle=0, 10+$i*16, 16, $color, $fontfile, $text);
	  }


	//4.图像输出
	   header('content-type:image/jpeg');
	   imagejpeg($img);
	
	//5.释放资源
	   imagedestroy($img);  

 ?>