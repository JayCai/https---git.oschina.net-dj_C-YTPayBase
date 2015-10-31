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
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<table width="911" height="305" border="0" cellpadding="0" cellspacing="0" class="addtable">
		  <tr>
			<td width="150">添加代写文章资源产品</td>
			<td width="356"></td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td width="150">字数</td>
			<td width="356">
				<input name="zishu" type="text" />
			</td>
			<td width="405"></td>
		  </tr>
		 
		  <tr>
			<td>周期</td>
			<td><input name="zhouqi" type="text" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td>会员价</td>
			<td><input name="price" type="text"  /> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>市场价</td>
			<td><input name="scprice" type="text"   /> 元</td>
			<td></td>
		  </tr>
		   <tr>
			<td>备注</td>
			<td><input name="beizhu" type="text"  size="40" maxlength="20" value="最长20个汉子" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td><input name="submit" type="submit" value="添加" class="reganniu" /></td>
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

$zishu=$_POST['zishu'];


$zhouqi=$_POST['zhouqi'];

$price=$_POST['price'];
$scprice=$_POST['scprice'];
$beizhu=$_POST['beizhu'];

$time=date("Y-m-d");


mysql_query("insert into tb_dxwenzhang (zishu,zhouqi,price,scprice,beizhu,time) values ('$zishu','$zhouqi','$price','$scprice','$beizhu','$time')");

 exit("<script>alert('添加成功!');window.history.go(-1);</script>");

}


?>
