<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>用户注册_易推网络</title>
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
	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		 <div class="ureg" style="background-color: #FFFFFF;">
			<div class="uregnav"> <span>用户注册</span></div>
			<div class="uregbox">
			   <table width="523" height="342" class="uregtable" style="margin:auto;">
				  <tr>
					 <td width="97" height="38">用户名：</td>
					 <td width="340"><input name="user" type="text" style="height:25px; width:190px;" /><font color="red"> *必填 不能少于6位数</font></td>
				  </tr>
				  <tr>
					 <td>登录密码：</td>
					 <td><input name="pwd" type="text" style="height:25px; width:190px;" onfocus="this.type='password'"  /><font color="red"> *必填 不能少于6位数</font></td>
				  </tr>
				  <tr>
					 <td>重复密码：</td>
					 <td><input name="repwd" type="text" style="height:25px; width:190px;" onfocus="this.type='password'" /><font color="red"> *必填 不能少于6位数</font></td>
				  </tr>
				  <tr>
					 <td>联系人：</td>
					 <td><input name="name" type="text" style="height:25px; width:190px;" /></td>
				  </tr>
				  <tr>
					 <td>QQ：</td>
					 <td><input name="qq" type="text" style="height:25px; width:190px;" /></td>
				  </tr>
				  <tr>
					 <td>手机：</td>
					 <td><input name="tel" type="text" style="height:25px; width:190px;" /></td>
				  </tr>
				  <tr>
					 <td>邮箱：</td>
					 <td><input name="email" type="text" style="height:25px; width:190px;" /><font color="red"> *必填</font></td>
				  </tr>
				  <tr>
					 <td>验证码</td>
					 <td><input name="code" type="text" style="height:25px; width:190px;" /><img id="checkpic" onclick="changing();" src='checkcode.php' style="cursor:pointer;  float:right; margin-right:80px;  height:30px;" /></td>
				  </tr>
				  <tr>
					 <td></td>
					 <td><input name="submit" type="submit" class="reganniu" value="注册" /></td>
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

	  function test_input($data) {
		 $data = trim($data);
		 $data = stripslashes($data);
		 $data = htmlspecialchars($data);
		 $data = mysql_real_escape_string($data); 
		 return $data;
	  }

	  session_start();

	  //验证码
	  $coded=$_SESSION["code"];
	  $code =$_POST[code];

	  //防止SQL注入
	  $user   =test_input( $_POST['user'] );
	  $pwd    =test_input( $_POST['pwd'] );
	  $repwd  =test_input( $_POST['repwd'] );
	  $name   =test_input( $_POST['name'] );
	  $tel    =test_input( $_POST['tel'] );	
	  $qq     =test_input( $_POST['qq'] );
	  $email  =test_input( $_POST['email'] );


	  if(empty($user)){exit("<script>alert('用户名不能为空!');window.history.go(-1);</script>");}
	  if(strlen($user)<6){exit("<script>alert('用户名不能少于6位数!');window.history.go(-1);</script>");}

	  if(empty($pwd)){exit("<script>alert('密码不能为空!');window.history.go(-1);</script>");}
	  if(strlen($pwd)<6){exit("<script>alert('密码不能少于6位数!');window.history.go(-1);</script>");}

	  if($pwd != $repwd){exit("<script>alert('2次密码不一致!');window.history.go(-1);</script>");}



	  preg_match("/^[0-9a-z]+@(([0-9a-z]+)[.])+[a-z]{2,3}$/",$email,$re); 
	  if(!$re[0]){
		 exit("<script>alert('邮箱格式不正确!');window.history.go(-1);</script>");
	  }



	  if($code!=$coded){exit("<script>alert('验证码不正确!');window.history.go(-1);</script>");}



	  $sql="select * from user where user='$user'";
	  $query=mysql_query($sql);
	  $row=mysql_fetch_array($query);
	  $auser=$row['user'];

	  if($auser==$user){exit("<script>alert('账号已经存在!');window.history.go(-1);</script>");}


	  $n="select * from user where email='$email'";
	  $nn=mysql_query($n);
	  $nrow=mysql_fetch_array($nn);
	  $xemail=$nrow['email'];

	  if($xemail){exit("<script>alert('邮箱已被注册!');window.history.go(-1);</script>");}


	  $user=str_replace("script","",$user);
	  $pwd=str_replace("script","",$pwd);
	  $pwd=md5($pwd);//md5加密
	  $name=str_replace("script","",$name);
	  $tel=str_replace("script","",$tel);

	  $qq=str_replace("script","",$qq);



	  $time=date("Y-m-d"); //注册时间
	  $ip=$_SERVER["REMOTE_ADDR"];//IP

	  $x="select * from tuiguang where ip='$ip'";
	  $xx=mysql_query($x);
	  $brow=mysql_fetch_array($xx);

	  $tuijie=$brow['tuijie'];//取得推广链接推荐人

	  mysql_query("INSERT INTO user (user,pwd,name,qq,tel,email,level,tuijie,regtime) VALUES ('$user','$pwd','$name','$qq','$tel','$email','普通用户','$tuijie','$time')");	

	  exit("<script>alert('注册成功!');window.location.href='index.php';</script>");
   }
?>
