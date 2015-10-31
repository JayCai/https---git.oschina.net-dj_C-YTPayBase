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
?>
<div class="ureg">
  <div class="uregnav"> <span style="color:#0066CC; margin-right:10px;"><a href="main.php">会员中心</a></span>  <?=$user?> 您好</div>
  
  
  <div class="uregbox">
 
	<!--核心代码-->
	<?php 
	include 'order_nav.php';	
	?>			
  
	<table width="1182" border="0" cellspacing="0" cellpadding="0" class="order2">
	  <tr style="background-color: #006666; color:white;">
	
		<td width="138">用户名</td>
		<td width="122">订单号</td>
		<td width="115">产品价格</td>	
		<td width="67">订单状态</td>
		<td width="109">订单时间</td>
		<td width="109">查看详情</td>
	  </tr>
	  
	  <?php	   
	  $numq=mysql_query("select * from order_zonghe $sql");
      include 'page.php';
	  $row=listquery("select * from order_zonghe $sql order by id desc  limit ".$num.",10");
	  foreach ($row as $v){
	  ?>
	  <tr>
	
		<td width="138"><?=$v['user']?></td>
		<td width="122"><?=$v['orderID']?></td>
		<td width="115"><?=$v['price']?></td>		
		<td width="67"><?=$v['type']?></td>
		<td width="109"><?=$v['time']?></td>
		<td width="109"><a href="show_zonghe.php?id=<?=$v[id]?>&caozuoid=zonghe">查看详情</a></td>
	  </tr>	
	  <?php
	  }
	  ?> 
	</table>
	
      <table width="1156" border="0" cellspacing="0" cellpadding="0" height="30" class="usertable" style="margin-top:10px;border:0px;">
	  <tr>
		<td width="64"><a href="?page=0&type=<?=$type?>&caozuoid=<?=$caozuoid?>">首页</a></td>
		<td width="72"><a href="?page=<?=$shang?>&type=<?=$type?>&caozuoid=<?=$caozuoid?>">上一页</a></td>
		<td width="76"><a href="?page=<?=$next?>&type=<?=$type?>&caozuoid=<?=$caozuoid?>">下一页</a></td>
		<td width="82"><a href="?page=<?=$totle?>&type=<?=$type?>&caozuoid=<?=$caozuoid?>">末页</a></td>	
		<td width="133"> 跳到：
       <select onchange="window.location='?type=<?=$type?>&caozuoid=<?=$caozuoid?>&page='+this.value">
	         <?php 
			  if($page){
			  echo '<option value='.$page.'>'.$page.'</option>';
			  }			  
			  ?>
			<?php
			for($i=1;$i<=$totle;$i++){ 
			 echo "<option value='$i'>$i</option>\n"; 
			} 
			?>
		</select>
		页</td>	
		<td width="727"></td>
	  </tr>
	  </table>
	 
	<!--核心代码-->

  </div>
</div>

<?php
include 'foot.php';
?>

</body>
</html>

