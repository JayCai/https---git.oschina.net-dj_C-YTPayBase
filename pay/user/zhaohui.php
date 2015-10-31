<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>密码找回_外链网</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
</head>

<body>
<script type="text/javascript">
	 
	function changing(){
    document.getElementById('checkpic').src="checkcode.php?"+Math.random();
} 
 
	
</script>
 

<?php
include 'head.php';
?>
<form action="sendmail.php" method="post">
<div class="ureg">
  <div class="uregnav"> <span>密码找回</span></div>
  <div class="uregbox">
   <table width="534" height="81"  border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="177" height="30">请输入注册时候的邮箱</td>
    <td width="274"><input name="toemail" type="text" style="height:25px; width:190px;" /></td>
  </tr>
  
  <tr>
    <td height="33"></td>
    <td><input name="submit" type="submit" class="reganniu" value="发送邮件找回" style="width:120px;" /></td>
  </tr>
</table>


  </div>
</div>
</form>
<?php
include 'foot.php';
?>

</body>
</html>


<?php 



if(isset($_POST['submit'])){

     session_start();
		 
     $coded=$_SESSION["code"];
	 $code=$_POST[code];
  if($code!==$coded){
  exit("<script>alert('验证码不正确!');window.location.href='index.php';</script>");
  }

 $user=$_POST['user'];
 $pwd=$_POST['pwd'];
 $pwd=md5($pwd);

$sql="select * from user where user='$user'";
$query=mysql_query($sql);
$row=mysql_fetch_array($query);
$auser=$row['user'];
$apwd=$row['pwd'];

if ($user!=$auser || $pwd!=$apwd) 
{ 
         exit("<script>alert('登陆失败!');window.location.href='index.php';</script>");
      
       
}else{


 session_start();
 $_SESSION["member"] = $user;



 exit("<script>alert('登陆成功!');window.location.href='main.php';</script>");

 }
}
?>
