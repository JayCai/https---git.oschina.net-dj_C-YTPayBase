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
$id=$_GET[id];
$row=query("select * from tb_weixin where id='$id'");
?>
<div class="ureg">
  <div class="uregnav"> <span style="color:#0066CC; margin-right:10px;"><a href="main.php">会员中心</a></span>  <?=$user?> 您好<a href="out.php" style="margin-left:20px;">退出登录</a></div>
  
  
  <div class="uregbox">
  <!--left-->
    <div class="admin_left">
		  <?php include 'left.php';?>
	</div>
  <!--left-->
  <!--right-->
	<div class="admin_right">
	
		<table width="911" height="305" border="0" cellpadding="0" cellspacing="0" class="addtable">
		 
		  <tr>
			<td width="150">分类</td>
			<td width="356">
					<?=$row[fenlei]?>
			</td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td>微信名称</td>
			<td>
				<?=$row[weixinname]?>	
			</td>
			<td></td>
		  </tr>
		  <tr>
			<td>微信号</td>
			<td><?=$row[weixinhao]?></td>
			<td></td>
		  </tr>
		  <tr>
			<td>粉丝数</td>
			<td><?=$row[fensi]?></td>
			<td></td>
		  </tr>
		  <tr>
			<td>单图文报价</td>
			<td><?=$row[dantuwen]?> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>多图文报价</td>
			<td><?=$row[duotuwen]?>元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>备注</td>
			<td><?=$row[beizhu]?></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td></td>
		  </tr>
		</table>
		
	</div>
  <!--right-->
  </div>
</div>

<?php
include 'foot.php';
?>

</body>
</html>

