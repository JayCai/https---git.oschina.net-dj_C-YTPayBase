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
			<td width="150">添加论坛套餐资源产品</td>
			<td width="356"></td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td width="150">论坛套餐</td>
			<td width="356">
				<input name="bbstaocan" type="text" />
			</td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td>论坛类型</td>
			<td>
				<select name="bbsleixing">
				  <option value="大型论坛">大型论坛</option>
				  <option value="中小论坛">中小论坛</option>				 
				</select>
			</td>
			<td></td>
		  </tr>
		  <tr>
			<td>发布条数</td>
			<td><input name="fabutiao" type="text" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td>周期</td>
			<td><select name="zhouqi">
				  <option value="一次">一次</option>
				  <option value="一周">一周</option>
				  <option value="一个月">一个月</option>
				  <option value="一季度">一季度</option>
				  <option value="一年">一年</option>				 
				</select> 
				</td>
			<td></td>
		  </tr>
		  <tr>
			<td>会员价</td>
			<td><input name="price" type="text"   /> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>是否收录</td>
			<td>
			<select name="shoulu">
				  <option value="是">是</option>
				  <option value="否">否</option>
				  <option value="不确定">不确定</option>				 		 
				</select> 
			</td>
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

$bbstaocan=$_POST['bbstaocan'];
$bbsleixing=$_POST['bbsleixing'];
$fabutiao=$_POST['fabutiao'];
$zhouqi=$_POST['zhouqi'];

$price=$_POST['price'];
$shoulu=$_POST['shoulu'];
$beizhu=$_POST['beizhu'];

$time=date("Y-m-d");


mysql_query("insert into tb_bbs (bbstaocan,bbsleixing,fabutiao,zhouqi,price,shoulu,beizhu,time) values ('$bbstaocan','$bbsleixing','$fabutiao','$zhouqi','$price','$shoulu','$beizhu','$time')");

 exit("<script>alert('添加成功!');window.history.go(-1);</script>");

}


?>
