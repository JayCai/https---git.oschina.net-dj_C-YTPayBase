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
	<form action="souser.php" method="get">
	 <table width="783" height="65" >
		  <tr>
			<td width="97" height="18" style="color:#0066CC;">搜索用户</td>			
		  </tr>		 
		  <tr>
			<td width="97" height="30">请输入用户名</td>
			<td width="177"><input name="username" type="text"  /></td>
			<td width="493"><input name="submitso" type="submit" class="reganniu"  value="搜索" /></td>
		  </tr>
		  <tr height="30"></tr>
	  </table>
	 </form>
	 <!--上面是搜索用户--> 
	   <?php
	
	   $username=$_GET['username'];      
	   if(empty($username)){
	   exit("<script>alert('不能为空!');window.location.href='user.php';</script>");
	   }
	   $row=query("select * from user where user='$username'");
	
	?> 	 
	<form action="" method="get">
	<table width="783" height="195" >
	  <tr>
		<td width="167" height="30" style="color:#0066CC;">用户<?=$row[user]?>的信息</td>
		<td width="604"></td>
	  </tr>
	 
	  <tr>
		<td width="167" height="30">用户名</td>
		<td width="604"><?=$row[user]?><input name="username" type="text" value="<?=$row[user]?>" style="display:none;" /></td>
	  </tr>
	   <tr>
		<td height="30">密码</td>
		<td><input name="pwd" type="text" value="<?=$row[pwd]?>" style="width:250px;" /><input name="submitpwd" type="submit" value="修改" class="reganniu"/></td>
	  </tr>
	  <tr>
		<td height="30">QQ</td>
		<td><?=$row[qq]?></td>
	  </tr>
	  <tr>
		<td height="30">电话</td>
		<td><?=$row[tel]?></td>
	  </tr>
	  <tr>
		<td height="30">邮箱</td>
		<td><?=$row[email]?></td>
	  </tr>
	  <tr>
		<td height="30">下线人数</td>
		<td></td>
	  </tr>
	  <tr>
		<td height="30">账户余额</td>
		<td style="color:red;"><?=$row[rmb]?> 元 <input name="rmb" type="text"  /><input name="submitchong" type="submit" value="充值" class="reganniu"/></td>
	  </tr>
	  <tr>
		<td height="30">账户级别</td>
		<td><?=$row[level]?> 
		<select name="level">
			 <option value="<?=$row['level']?>"><?=$row['level']?></option>
				<?php
				$h="select * from level";
				$hh=mysql_query($h);
				while($rowh=mysql_fetch_array($hh)){
				?>
				<option value="<?=$rowh['level']?>"><?=$rowh['level']?></option>
				<?php
				 } 
				 ?>
		   </select>  
		
		<input name="submitset" type="submit" value="设置级别" class="reganniu"/></td>
	  </tr>
	 
	</table>
	</form>
	</div>
  <!--right-->
  </div>
</div>

<?php
include 'foot.php';
?>

</body>
</html>

	   
    <?php
	if($_GET['submitset']){
		
			$level=$_GET['level'];	
			
			mysql_query("update user set level='$level' where user='$username'");
			 exit("<script>alert('设置成功!');window.location.href='souser.php?username=$username';</script>");
	}		
	?>
	
	<!--设置级别-->
	   <?php
	if($_GET['submitchong']){
		
			$rmb=$_GET['rmb'];	
		
			$oldrmb=$row[rmb]; //会员原来的金额
			$rmb=$oldrmb+$rmb; //加上POST 充值的金额 
			
		
			
			mysql_query("update user set rmb='$rmb' where user='$username'");
			 exit("<script>alert('充值成功!');window.location.href='souser.php?username=$username';</script>");
	}		
	?>
	
	<!--账户充值-->
	
	  <?php
	if($_GET['submitpwd']){
		
			$plai=$_GET['pwd'];	
			$pwd=md5($plai);
		
			
			
			mysql_query("update user set pwd='$pwd' where user='$username'");
			 exit("<script>alert('修改成功!');window.location.href='souser.php?username=$username';</script>");
	}		
	?>
	
	<!--密码修改-->
 