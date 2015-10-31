<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心_外链网</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
</head>

<body>
<?php
include 'head.php';
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
	<!--核心代码-->
	<?php 
	include 'order_nav2.php';	
	$id=$_GET['id'];	
	$v=query("select * from order_bbszhiding where id='$id'");
	$leixing=$_GET['leixing'];
	switch($leixing){ 
	case '置顶': 
	$price=$v['zdprice']; 
	break; 
	case '加精': 
	$price=$v['jjprice']; 
	break; 
	default: 
	$price=""; 
	} 
	?>			
    <table width="1183" height="330" border="0" cellpadding="0" cellspacing="0" class="order3" >
	  <tr>
		<td width="204">用户名</td>
		<td width="968"><?=$v['user']?></td>
	  </tr>
	  <tr>
		<td>订单编号</td>
		<td><?=$v['orderID']?></td>
	  </tr>
	  <tr>
		<td>所选产品</td>
		<td style="padding:0px; border-bottom:0px;">	
		<table width="500" border="0" cellspacing="0" cellpadding="0">
		  <tr>		   
			<td width="105">名称</td>
			<td width="105">分类</td>
			<td width="105">置顶价格</td>
			<td width="105">加精价格</td>
			<td width="105">查看详细</td>
		  </tr>	
		 </table>	
		<?php 
		$bianhao=$v['cpID'];
		$bh=explode(",",$bianhao);
		foreach ($bh as $e){
		if($e){	
		$x=query("select * from tb_bbszhiding where id='$e'");
		?>
		<table width="500" border="0" cellspacing="0" cellpadding="0">
		   <tr>
			<td width="105"><?=$x['bbs']?></td>
			<td width="105"><?=$x['bk']?></td>
			<td width="105"><?=$x['zdprice']?></td>
			<td width="105"><?=$x['jjprice']?></td>
			<td width="105"><a href="up_bbszhiding.php?id=<?=$e?>" target="_blank">查看详细</a></td>
		  </tr>
		</table>

		<?php
		}
		}
		?>
		</td>
	  </tr>
	  <tr>
		<td>订单金额</td>
		<td><?=$price?> 元</td>
	  </tr>	 
	  <tr>
		<td>链接</td>
		<td><?=$v['content']?></td>
	  </tr>	  
	  <tr>
		<td>留言</td>
		<td><?=$v['liuyan']?></td>
	  </tr>	 
	  <tr>
		<td>订单类型</td>
		<td><?=$v['leixing']?></td>
	  </tr>
	  <tr>
		<td>订单状态</td>
		<td><?=$v['type']?></td>
	  </tr>
	  <tr>
		<td>订单时间</td>
		<td><?=$v['time']?></td>
	  </tr>
	    <tr>
		<td>反馈报表</td>
		<td>
		<?php 
		$bb=$v['baobiao'];
		if(empty($bb)){
		echo '<font color=red>暂无报表</font>';
		}else{
		echo $v['baobiao'];
		}
		?>
		</td>
	  </tr>
	</table>

	<!--核心代码-->
	</div>
  <!--right-->
  </div>
</div>

<?php
include 'foot.php';
?>

</body>
</html>

