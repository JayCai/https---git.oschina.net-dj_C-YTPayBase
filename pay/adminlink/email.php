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
$email=query("select * from email where id=1");
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
			<td width="102" height="30" style="color:#0066CC;">邮件配置</td>
			<td width="669"></td>
		  </tr>
		 
		  <tr>
			<td width="102" height="30">发件箱地址</td>
			<td width="669"><input name="adress" type="text" value="<?=$email[adress]?>"  /></td>
		  </tr>
		  
		  <tr>
			<td height="30">发件箱用户名</td>
			<td ><input name="user" type="text"  value="<?=$email[user]?>" /></td>
		  </tr>
		  <tr>
			<td height="30">发件箱密码</td>
			<td><input name="pwd" type="password"  value="<?=$email[pwd]?>"  /></td>
		  </tr>
		   <tr>
			<td height="30">收件箱地址</td>
		    <td><textarea name="shou" style="height:80px; width:500px;" ><?=$email[shou]?></textarea> 
		    <p>收件箱之间用竖线隔开 比如： 邮箱1|邮箱2|邮箱3 以此类推 <font color="red">特别注意开头结尾都不能有竖线</font></p>
		    </td>
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

		 $adress=$_POST['adress'];
		 $user=$_POST['user'];
		 $pwd=$_POST['pwd'];
		 $shou=$_POST['shou'];	
		 

		 
		 $ok="update email set adress='$adress',user='$user',pwd='$pwd',shou='$shou' where id=1";
		 mysql_query($ok);
		 exit("<script>alert('修改成功!');window.location.href='email.php';</script>");
}
?>