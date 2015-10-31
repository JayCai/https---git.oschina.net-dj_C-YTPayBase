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
$tb=$_GET['tb'];
$show=query("select * from $tb where id='$id'");
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
	<form action="" method="post">
		<table width="867" height="381" border="0" cellpadding="0" cellspacing="0" class="addtable">
		  <tr>
			
			<td width="643">发布反馈报表</td>
			<td width="224"></td>
		  </tr>
		 
		  <tr>
			
			<td><input name="tb" type="text" value="<?=$tb?>" style="display:none;"/>
				<textarea name="taocanzy" style="height:300px; width:600px;" id="content" ><?=$show['baobiao']?></textarea>
			</td>
			<td></td>
		  </tr>
		
		  <tr>
			
			<td><input name="submit" type="submit" value="发布" class="reganniu" /></td>
			<td></td>
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


if($_POST['submit']){
$tb=$_POST['tb'];
$content=$_POST['taocanzy'];
mysql_query("update $tb set baobiao='$content' where id='$id'");

 exit("<script>alert('反馈成功!');window.history.go(-1);</script>");

}


?>
