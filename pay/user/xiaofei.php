<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员中心_外链网</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
<script type="text/javascript"> 
    function jsCopy(){ 
        var e=document.getElementById("source");//对象是contents 
        e.select(); //选择对象 
        document.execCommand("Copy"); //执行浏览器复制命令
		alert('已复制');
    } 
</script> 
</head>

<body>
<?php
include 'head.php';
?>
<div class="ureg">
  <div class="uregnav"> <span style="color:#0066CC; margin-right:10px;"><a href="main.php">会员中心</a></span>  <?=$user?> 您好</div>

  <div class="uregbox">
			  <div class="uleft">
				<?php include 'nav.php';?>
			  </div>
			  <div class="uright">
				<table width="953" height="38" border="0" cellpadding="0" cellspacing="0" class="order3">
				  <tr>
					
					<td width="154">订单编号</td>
					<td width="277">产品名称</td>
					<td width="117">产品价格</td>					
					<td width="201">时间</td>
				  </tr>
				  
				 <?php		
				   
				   $numq=mysql_query("select * from xiaofei where user='$user'");
				   require_once 'page.php';
				   $list=listquery("select * from xiaofei where user='$user' order by id desc  limit ".$num.",20");			
				  foreach($list as $v){
				  $xrmb+=$v['price'];
				  ?>
				   <tr>					
					<td width="154"><?=$v['orderID']?></td>
					<td width="277"><?=$v['cpname']?></td>
					<td width="117"><?=$v['price']?></td>					
					<td width="201"><?=$v['time']?></td>
				  </tr>
	              <?php			
				  }
				  ?>
				</table>
			<table width="953" height="38" border="0" cellpadding="0" cellspacing="0" class="order3">
				  <tr>
				  <td>
			       <a href="?page=0">首页</a>
				   <a href="?page=<?=$shang?>">上一页</a>
				  
				   <a href="?page=<?=$next?>">下一页</a>
				   <a href="?page=<?=$totle?>">末页</a>
				   <a href="javascript:;">跳到
				  <select onchange="window.location='?page='+this.value">
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
				   页
				   </a>
			 	   <a href="" style="float:right; border:0px; margin-right:20px;">消费总计:<?=$xrmb?>元</a>
				   </td>
			    </tr>
			  </table>
	          </div>
  </div>
</div>

<?php
include 'foot.php';
?>

</body>
</html>

