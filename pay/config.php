<?php
   /*
   error_reporting( E_ALL ) ;
   ini_set( "display_error", TRUE ) ;
   ini_set('display_startup_errors',TRUE);    //php启动错误信息
   ini_set('error_log', dirname(__FILE__) . 'error_log.txt'); //将出错信息输出到一个文本文件
   */
   
   error_reporting(0);

   $host="localhost";
   $userroot="root";
   $psw="facai123456";
   $db="seowl";
   $conn=mysql_connect( $host, $userroot, $psw );
   if (!$conn)
   {
	  die('Could not connect: ' . mysql_error());
   }

   mysql_select_db($db,$conn);
   mysql_query('set names utf8');
?>

