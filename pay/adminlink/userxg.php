<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心_易推网络</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
</head>

<body>
<?php
include 'head.php';
?>
<form action="" method="post">
<div class="ureg">
  <div class="uregnav"> <span style="color:#0066CC; margin-right:10px;"><a href="main.php">管理中心</a></span>  <?=$user?> 您好<a href="out.php" style="margin-left:20px;">退出登录</a></div>

  <div class="uregbox">
     <!--left-->
    <div class="admin_left">
		  <?php include 'left.php';?>
	</div>
  <!--left-->
   <!--right-->
	<div class="admin_right">
		 <table width="783" height="195" >
		  <tr>
			<td width="102" height="30" style="color:#0066CC;">admin信息</td>
			<td width="669"></td>
		  </tr>
		 
		  <tr>
			<td width="102" height="30">用户名</td>
			<td width="669"><input name="aduser" type="text" value="<?=$myuser[user]?>"  /></td>
		  </tr>
		  
		  <tr>
			<td height="30">登录密码</td>
			<td ><input name="pwd" type="text"  onfocus="this.type='password'"/></td>
		  </tr>
		  <tr>
			<td height="30">重复密码</td>
			<td><input name="repwd" type="text" onfocus="this.type='password'"  /></td>
		  </tr>
		   <tr>
			<td height="30"></td>
			<td><input name="submit" type="submit" class="reganniu" value="修改" /></td>
		   </tr>
		</table>
  </div>
  <!--right-->
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

		 $aduser=$_POST['aduser'];
		 $pwd=$_POST['pwd'];
		 $repwd=$_POST['repwd'];
		
		 
	
		 if($pwd!=$repwd){
		 exit("<script>alert('两次密码不一致!');window.history.go(-1);</script>");
		 }
	
			
		 
		 $ok="update admin set pwd='$pwd',user='$aduser' where user='$user'";
		 mysql_query($ok);
		 exit("<script>alert('修改成功!');window.location.href='index.php';</script>");
}
?>