<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>会员中心_外链网</title>
	  <link rel="stylesheet" type="text/css" href="../css/css.css" />
	  <link rel="stylesheet" type="text/css" href="css.css" />
   </head>

   <body>
	  <?php
		 include 'head.php';
	  ?>
	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		 <div class="ureg">
			<div class="uregnav"> <span style="color:#0066CC; margin-right:10px;"><a href="main.php">会员中心</a></span>  <?=$user?> 您好</div>

			<div class="uregbox">

			   <div class="uleft">
				  <?php include 'nav.php';?>
			   </div>
			   <div class="uright">
				  <table width="783" height="195" >
					 <tr>
						<td width="102" height="30" style="color:#0066CC;">我的信息</td>
						<td width="669"></td>
					 </tr>

					 <tr>
						<td width="102" height="30">用户名</td>
						<td width="669"><input name="user" type="text" value="<?=$myuser[user]?>" style="display:none;" /><?=$myuser[user]?></td>
					 </tr>
					 <tr>
						<td height="30">姓名</td>
						<td><input name="name" type="text" value="<?=$myuser[name]?>" /></td>
					 </tr>
					 <tr>
						<td height="30">QQ</td>
						<td><input name="qq" type="text" value="<?=$myuser[qq]?>" /></td>
					 </tr>
					 <tr>
						<td height="30">电话</td>
						<td><input name="tel" type="text" value="<?=$myuser[tel]?>" /></td>
					 </tr>
					 <tr>
						<td height="30">邮箱</td>
						<td><?=$myuser[email]?></td>
					 </tr>
					 <tr>
						<td height="30">登录密码</td>
						<td ><input name="pwd" type="text" onfocus="this.type='password'"  /> （为空默认不修改）</td>
					 </tr>
					 <tr>
						<td height="30">重复密码</td>
						<td><input name="repwd" type="text" onfocus="this.type='password'"  /> （为空默认不修改）</td>
					 </tr>
					 <tr>
						<td height="30"></td>
						<td><input name="submit" type="submit" class="reganniu" value="修改" /></td>
					 </tr>
				  </table>
			   </div>
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

	  //验证码
	  $user =test_input( $_POST['user'] );
	  $pwd  =test_input( $_POST['pwd'] );
	  $repwd=test_input( $_POST['repwd'] );
	  $name =test_input( $_POST['name'] );
	  $tel  =test_input( $_POST['tel'] );	
	  $qq   =test_input( $_POST['qq'] );
	  $email=test_input( $_POST['email'] );


	  if(empty($user)){exit("<script>alert('用户名不能为空!');window.history.go(-1);</script>");}
	  if(strlen($user)<6){exit("<script>alert('用户名不能少于6位数!');window.history.go(-1);</script>");}



	  if($pwd != $repwd){exit("<script>alert('2次密码不一致!');window.history.go(-1);</script>");}





	  $user=str_replace("script","",$user);
	  $pwd=str_replace("script","",$pwd);
	  $pwd=md5($pwd);//md5加密
	  $name=str_replace("script","",$name);
	  $tel=str_replace("script","",$tel);

	  $qq=str_replace("script","",$qq);

	  if(empty($pwd)){
		 mysql_query("update user set name='$name',qq='$qq',tel='$tel' where user='$user'");	
	  }else{
		 mysql_query("update user set name='$name',qq='$qq',tel='$tel',pwd='$pwd' where user='$user'");	
	  }




	  exit("<script>alert('修改成功!');window.location.href='userxg.php';</script>");



   }
?>
