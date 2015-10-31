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
		 $rmbli=listquery("select * from user where rmb>0 ");			
		 foreach($rmbli as $vv){		
			$xrmb+=$vv['rmb'];	//总计	 
		 }
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
			   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				  <table  border="0" cellpadding="20" cellspacing="10" style="margin-left:20px; margin-top:10px;"I
					 <tr>
						<td>标题:</td>
						<td><input name="title" type="text" size="60" /></td>
					 </tr>
					 <tr>
						<td>内容:</td>
						<td style=" padding-left:2px;"><textarea name="content" id="content" style="height:400px; width:700px;"></textarea></td>
					 </tr>
					 <tr>
						<td><input name="submitgo" type="submit" value=" 确定 " class="anniu" /></td>
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

	  <?php

		 if($_POST['submitgo']){

			$time=date("Y-m-d H:i:s");
			$title=$_POST['title'];
			$content=$_POST['content'];

			if(empty($title)){exit("<script>alert('标题不能为空!');window.history.go(-1);</script>");}

			if(empty($content)){exit("<script>alert('内容不能为空!');window.history.go(-1);</script>");}	


			$qry ="insert into gonggao( time, title, content ) values( '$time', '$title', '$content' )" ;
			if( !mysql_query( $qry ) )
			{
			   die('Error: ' . mysql_error());
			}


			exit("<script>alert(' 发布成功');window.location.href='gonggaolishi.php';</script>");	
		 }
	  ?>

   </body>
</html>



