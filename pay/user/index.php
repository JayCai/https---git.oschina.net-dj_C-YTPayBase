<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>用户登录_易推网络</title>
	  <link rel="stylesheet" type="text/css" href="../css/css.css" />
	  <link rel="stylesheet" type="text/css" href="css.css" />
   </head>

   <body>
	  <script type="text/javascript">
		 function changing(){
			   document.getElementById('checkpic').src="./checkcode.php?"+Math.random();
		 } 
	  </script>

	  <?php
		 ob_start(); 
		 include 'head.php';
	  ?>

	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		 <div class="ureg" style="background-color: #FFFFFF;">
			<div class="uregnav"> <span>用户登录</span></div>
			<div class="uregbox">
			   <table class="uregtable" style="height:200px; margin:auto;">
				  <tr>
					 <td width="97" height="38">用户名：</td>
					 <td width="340"><input name="user" type="text" style="height:25px; width:190px;" /></td>
				  </tr>
				  <tr>
					 <td>登录密码：</td>
					 <td><input name="pwd" type="password" style="height:25px; width:190px;"  /><a href="./zhaohui.php" style="color:red;"> 忘记密码 点这里找回</a></td>
				  </tr>
				  <tr>
					 <td>验证码</td>
					 <td><input name="code" type="text" style="height:25px; width:190px;" /><img id="checkpic" onclick="changing();" src='./checkcode.php' style="cursor:pointer;  float:right; margin-right:80px;  height:30px;" /></td>
				  </tr>
				  <tr>
					 <td></td>
					 <td><input name="baocun" type="checkbox" value="1" checked="checked"/>记住用户名密码</td>
				  </tr>
				  <tr>
					 <td></td>
					 <td><input name="submit" type="submit" class="reganniu" value="登录" /> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./reg.php">没有账户? 请注册</a></td>
				  </tr>
			   </table>

			</div>
		 </div>
	  </form>
	  <?php
		 include 'foot.php';
	  ?>
	  <?php 

		 if(isset($_POST['submit'])){

			session_start();

			$coded=$_SESSION["code"];
			$code=$_POST[code];
			if($code!==$coded){
			   exit("<script>alert('验证码不正确!');window.location.href='./index.php';</script>");
			}

			function test_input($data) {
			   $data = trim($data);
			   $data = stripslashes($data);
			   $data = htmlspecialchars($data);
			   $data = mysql_real_escape_string($data); 
			   return $data;
			}

			$baocun=$_POST['baocun'];
			$user  =test_input( $_POST['user'] );
			$pwd   =test_input( $_POST['pwd'] );


			$pwd=md5($pwd);

			$sql="select * from user where user='$user'";
			$query=mysql_query($sql);
			$row=mysql_fetch_array($query);
			$auser=$row['user'];
			$apwd=$row['pwd'];

			if ($user!=$auser || $pwd!=$apwd) 
			{ 
			   //echo '<script> alert( "'.$user.':'.$auser.':'.$pwd.':'.$apwd.'");</script>' ;
			   exit("<script>alert(' 密码不正确，登陆失败!');window.location.href='./index.php';</script>");

			}else{

			   if($baocun){
				  setcookie("member",$auser, time()+3600*24*365,'/');
			   }else{
				  setcookie("member",$auser,time()+3600,'/');
			   }
			   exit("<script>/*alert('登陆成功!');*/window.location.href='./main.php';</script>");

			}
		 }
	  ?>

   </body>
</html>

