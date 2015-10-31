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
		 $test ='dfsd' ;
		 $row=query("select * from seo order by id desc");
	  ?>

	  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"  enctype="multipart/form-data" >
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
				  <table width="889" height="195" >
					 <tr>
						<td width="151" height="30" style="color:#0066CC;">站点配置信息</td>
						<td width="726"></td>
					 </tr>

					 <tr>
						<td width="151" height="30">网站首页</td>
						<td width="726"><input name="url" type="text" value="<?=$row[link]?>" size="80"  /></td>
					 </tr>
					 <tr>
						<td width="151" height="30">网站标题</td>
						<td width="726"><input name="sitename" type="text" value="<?=$row[sitename]?>" size="80"  /></td>
					 </tr>
					 <tr>
						<td height="30">网站关键词</td>
						<td><input name="keywords" type="text" value="<?=$row[keywords]?>" size="80" /></td>
					 </tr>
					 <tr>
						<td height="30">网站描述</td>
						<td> <textarea name="description" style="width:300px; height:60px;"><?=$row[description]?></textarea></td>
					 </tr>
					 <tr>
						<td height="30">网站logo</td>
						<td><input type="file" name="pictures" /><img src="../<?=$row[logo]?>" height="60" width="80"/></td>
					 </tr>
					 <tr>
						<td height="30">网站版权底部信息</td>
						<td><textarea name="content" style="height:80px; width:600px;" ><?=$row[content]?></textarea></td>
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

	  error_reporting( E_ALL ) ;
	  ini_set( "display_error", TRUE ) ;
	  ini_set('display_startup_errors',TRUE);    //php启动错误信息
	  ini_set('error_log', dirname(__FILE__) . '/error_log.txt'); //将出错信息输出到一个文本文件

	  //下面是添加图书LOGO  判断如果上传 UPDATE
	  $dest_folder   =  "../upload/".date("Ymd")."/";  
	  if(!file_exists($dest_folder)){  
		 if( !mkdir($dest_folder) )
		 {
			echo '<script> alert( "mkdir() fail!" ) ; </script>' ;
		 }
		 else
		 {
			chmod( $dest_folder, 0777 ) ;
		 }
	  }  

	  $tmp_name = $_FILES["pictures"]["tmp_name"];  
	  $name     = $_FILES["pictures"]["name"]; //图片名称
	  $api      = explode('.',$name);
	  $a        = ".".$api[1];

	  $array= array('.jpg','.png','.gif','.jpeg','.bmp');		 
	  $img  = strstr($name, '.');//查找并截取

	  if(in_array($img,$array)){
		 $logo = $dest_folder.date("YmdHis").$a;  	//封面照片 

		 if( !move_uploaded_file($tmp_name, $logo) )
		 {
			echo '<script> alert( "move_uploaded_file() fail!" ) ; </script>' ;
		 }

		 $set_value =substr( $logo, 3 ) ;
		 $usql="update seo set logo='$set_value' where id='1'";
		 mysql_query($usql);
	  }
	  else
	  {
		 echo '<script> alert("not support this picture style!") ; </script>' ;
	  }

	  //处理第一幅图片
	  $link=$_POST['url'];
	  $sitename=$_POST['sitename'];
	  $keywords=$_POST['keywords'];
	  $description=$_POST['description'];
	  $content=$_POST['content'];

	  $ok="update seo set sitename='$sitename',keywords='$keywords',description='$description',content='$content',link='$link' where id='1'";
	  mysql_query($ok);
	  exit("<script>alert('修改成功!');window.location.href='seo.php';</script>");
   }
?>
