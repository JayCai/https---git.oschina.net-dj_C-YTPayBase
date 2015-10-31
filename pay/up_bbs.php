<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$sg['sitename']?></title>
<meta name="keywords" content="<?=$sg['keywords']?>" />
<meta name="description" content="<?=$sg['description']?>" />
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="../user/css.css" />
</head>

<body>
<?php
include 'head.php';
$id=$_GET[id];
$row=query("select * from tb_bbs where id='$id'");
?>
<div class="ureg">
  <div class="uregnav"> </div>
  
  
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
			<td width="150">论坛套餐</td>
			<td width="356">
					<?=$row[bbstaocan]?>
			</td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td>论坛类型</td>
			<td>
				<?=$row[bbsleixing]?>			
			</td>
			<td></td>
		  </tr>
		  <tr>
			<td>发布条数</td>
			<td><?=$row[fabutiao]?></td>
			<td></td>
		  </tr>
		  <tr>
			<td>周期</td>
			<td><?=$row[zhouqi]?></td>
			<td></td>
		  </tr>
		  <tr>
			<td>会员价</td>
			<td><?=$row[price]?> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>是否收录</td>
			<td><?=$row[shoulu]?></td>
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
include 'foot2.php';
?>

</body>
</html>

