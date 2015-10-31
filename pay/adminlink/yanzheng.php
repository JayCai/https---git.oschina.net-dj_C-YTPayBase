<?php 
$user=$_COOKIE['user'];
if ($user) 
{ 
 
} 
else 
{       echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        exit("<script>alert('请登录!');window.location.href='index.php';</script>");
        exit; 
} 
?>
