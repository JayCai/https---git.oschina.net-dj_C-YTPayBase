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
$id=$_GET[id];
$row=query("select * from tb_bbs where id='$id'");
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
			<td width="150">修改</td>
			<td width="356"></td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td width="150">论坛套餐</td>
			<td width="356">
					<input name="bbstaocan" type="text"  value="<?=$row[bbstaocan]?>" />
			</td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td>论坛类型</td>
			<td>
				<select name="bbsleixing">
				  <option value="<?=$row[bbsleixing]?>"><?=$row[bbsleixing]?></option>
				  <option value="大型论坛">大型论坛</option>
				  <option value="中小论坛">中小论坛</option>				 
				</select>
			</td>
			<td></td>
		  </tr>
		  <tr>
			<td>发布条数</td>
			<td><input name="fabutiao" type="text" value="<?=$row[fabutiao]?>" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td>周期</td>
			<td>
			<select name="zhouqi">
			      <option value="<?=$row[zhouqi]?>"><?=$row[zhouqi]?></option>
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
			<td><input name="price" type="text"  value="<?=$row[price]?>" /> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>是否收录</td>
			<td>
			<select name="shoulu">
			      <option value="<?=$row[shoulu]?>"><?=$row[shoulu]?></option>
				  <option value="是">是</option>
				  <option value="否">否</option>
				  <option value="不确定">不确定</option>				 		 
				</select> 
			</td>
			<td></td>
		  </tr>
		  <tr>
			<td>备注</td>
			<td><input name="beizhu" type="text"  size="40" maxlength="20" value="<?=$row[beizhu]?>" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
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

