<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>

<?php
$user=$_GET['user'];
if($user){
require_once 'function.php';

$time=date("Y-m-d h:i:s");
$ip=$_SERVER["REMOTE_ADDR"];

	$s=query("select * from tuiguang where ip='$ip'");
	if($s['id']){	 
	  exit("<script>window.location.href='/user/index.php';</script>");
	 }else{
	  mysql_query("insert into tuiguang (tuijie,ip,time) values ('$user','$ip','$time')");
	  exit("<script>window.location.href='/user/index.php';</script>");
	 }
	 
}else{
echo '非法操作';
}
?>

</body>
</html>