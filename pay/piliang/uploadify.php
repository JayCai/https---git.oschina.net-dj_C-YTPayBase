<?php
include '../config.php';
$time=date("Y-m-d h:i:s");
$user=$_GET['user'];
$orderID=$_GET['orderID'];
/*
Uploadify 后台处理 Demo
Author:wind
Date:2013-1-4
uploadify 后台处理！
*/

//设置上传目录
$path = "../user_file/";	

if (!empty($_FILES)) {
	
	//得到上传的临时文件流
	$tempFile = $_FILES['Filedata']['tmp_name'];
	
	//允许的文件后缀
	$fileTypes = array('doc','txt'); 
	
	//得到文件原名
	$fileName = iconv("UTF-8","GB2312",$_FILES["Filedata"]["name"]);
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	$fileNameshow=$fileName;
	//接受动态传值
	$files=$_POST['typeCode'];
	
	//最后保存服务器地址
	if(!is_dir($path))
	   mkdir($path);
	   $api=explode(".",$fileName);	  
	   $fileName=microtime().".".$api[1]; //重命名
	   $fileName=substr($fileName,2);//截取
	   $fileName=str_replace(" ","",$fileName);//替换空格
	   
	   $fileadress=$path.$fileName;//图片存放地址
	if (move_uploaded_file($tempFile, $path.$fileName)){
	   $fileNameshow = iconv("GB2312","UTF-8",$fileNameshow);
		echo $fileNameshow."上传成功！";
		mysql_query("insert into user_file (user,orderID,fileadress,time) values ('$user','$orderID','$fileadress','$time')");
		
	}else{
		echo $fileName."上传失败！";
	}
}
?>