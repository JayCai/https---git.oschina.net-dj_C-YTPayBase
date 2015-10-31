<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
   ob_start();
   setcookie("member","", time()+3600,'/');
   exit("<script>alert('退出成功!');window.location.href='./index.php';</script>");
?>
