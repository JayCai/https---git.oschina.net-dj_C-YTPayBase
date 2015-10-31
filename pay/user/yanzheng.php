<?php 
   error_reporting(0);
   $user=$_COOKIE['member'];
   if( !$user ) 
   {
	  echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	  exit("<script>alert('请登录!');window.location.href='index.php';</script>");
	  exit; 
   } 
?>
