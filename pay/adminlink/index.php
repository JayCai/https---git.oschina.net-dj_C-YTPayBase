<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>管理登录_外链网</title>
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

	  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		 <div class="ureg">
			<div class="uregnav"> <span>管理登录</span></div>
			<div class="uregbox">
			   <table class="uregtable" style="height:200px;">
				  <tr>
					 <td width="97" height="38">用户名：</td>
					 <td width="340"><input name="user" type="text" style="height:25px; width:190px;" /></td>
				  </tr>
				  <tr>
					 <td>登录密码：</td>
					 <td><input name="pwd" type="password" style="height:25px; width:190px;"  /></td>
				  </tr>
				  <tr>
					 <td>验证码</td>
					 <td><input name="code" type="text" style="height:25px; width:190px;" /><img id="checkpic" onclick="changing();" src='checkcode.php' style="cursor:pointer;  float:right; margin-right:80px;  height:30px;" /></td>
				  </tr>
				  <tr>
					 <td></td>
					 <td><input name="submit" type="submit" class="reganniu" value="登录" /></td>
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

	  function test_input($data) {
		 $data = trim($data);
		 $data = stripslashes($data);
		 $data = htmlspecialchars($data);
		 $data = mysql_real_escape_string($data); 
		 return $data;
	  }

	  $user  =test_input( $_POST['user'] );
	  $pwd   =test_input( $_POST['pwd'] );


	  $sql="select * from admin where user='$user'";
	  $query=mysql_query($sql);
	  $row=mysql_fetch_array($query);
	  $auser=$row['user'];
	  $apwd=$row['pwd'];

	  if ($user!=$auser || $pwd!=$apwd) 
	  { 
		 exit("<script>alert('登陆失败!');window.location.href='index.php';</script>");
	  }else{
		 setcookie("user",$user, time()+3600*24);
		 exit("<script>/*alert('登陆成功!');*/window.location.href='order.php';</script>");
	  }
   }
?>
