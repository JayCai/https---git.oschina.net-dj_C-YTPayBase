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
  $rmbli=listquery("select * from user where rmb>0 ");			
  foreach($rmbli as $vv){		
  $xrmb+=$vv['rmb'];	//总计	 
 }
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

	  	<table width="953" height="38" border="0" cellpadding="0" cellspacing="0" class="order3">
				  <tr>
					<td width="96">用户名</td>
					<td width="96">余额</td>				
				  </tr>
				  
				 <?php
		
				   $sqle="select * from user where rmb>0 ";
				   $numq=mysql_query($sqle);
				   require_once 'page.php';
				   $list=listquery("select * from user where rmb>0 order by id desc  limit ".$num.",20");			
				  foreach($list as $v){				 
				  ?>
				   <tr>
					<td width="96"><a href="souser.php?username=<?=$v['user']?>"><?=$v['user']?></a></td>
					<td width="96"><?=$v['rmb']?> 元</td>
				
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
			 	   <a style="float:right; border:0px; margin-right:20px; color:red;">网站所有会员余额总计:<?=$xrmb?>元</a>
				   </td>
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


 