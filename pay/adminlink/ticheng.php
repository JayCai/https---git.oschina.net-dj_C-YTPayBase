<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心_易推网络</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
<script language="javascript" type="text/javascript">

function get(id,a,b){
var chongzhi=document.getElementById(a).value;
var zhekou=document.getElementById(b).value;

document.getElementById(id).href="?chongzhi="+chongzhi+"&zhekou="+zhekou+"&id="+id;

}

</script>

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
	<?php
	$row=query("select * from ticheng where id=1");
	?>
	<form action="" method="post">
		<table width="452" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
		  <tr>
			<td width="108">当前提成</td>
			<td width="344"><input name="ticheng" type="text" style="width:30px;" value="<?=$row['ticheng']?>" />%</td>
		  </tr>		
		  <tr>
		
			<td height="50" ><input name="submitadd" type="submit" class="reganniu"  value="设置提成" /></td>
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
if($_POST['submitadd']){

$ticheng=$_POST['ticheng']; 


$sql="update ticheng set ticheng='$ticheng' where id=1";
mysql_query($sql);
exit("<script>alert('操作成功!');window.location.href='ticheng.php';</script>");

}




?>   
