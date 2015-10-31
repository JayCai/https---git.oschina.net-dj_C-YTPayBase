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
$id=$_GET['id'];
$row=query("select * from gmuser where id='$id'");
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  enctype="multipart/form-data" >
<div class="ureg">
  <div class="uregnav"> <span style="color:#0066CC; margin-right:10px;"><a href="main.php">会员中心</a></span>  <?=$user?> 您好<a href="out.php" style="margin-left:20px;">退出登录</a></div>

  <div class="uregbox">
     <!--left-->
    <div class="admin_left">
		  <?php include 'left.php';?>
	</div>
  <!--left-->
   <!--right-->
	<div class="admin_right">
		 <table width="889" height="195" >
		  <tr>
			<td width="151" height="30" style="color:#0066CC;">添加网站普通管理员</td>
			<td width="726"></td>
		  </tr>
		 
		  <tr>
			<td width="151" height="30">用户名</td>
			<td width="726"><input name="gmuser" type="text" value="<?=$row['user']?>"    /></td>
		  </tr>
		   <tr>
			<td width="151" height="30">密码</td>
			<td width="726"><input name="gmpwd" type="text"  value="<?=$row['pwd']?>" /></td>
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
    


         $gmuser=$_POST['gmuser'];
		 $gmpwd=$_POST['gmpwd'];
		 
		
		 $ok="update gmuser set user='$gmuser',pwd='$gmpwd' where id='$id'";
		 mysql_query($ok);
		
		  exit("<script>alert('修改成功!');window.location.href='ptuser.php';</script>");
		 
		 
		
}
?>
