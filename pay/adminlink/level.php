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
	<table width="776" height="53" border="0" cellpadding="1" cellspacing="1" style="border: #CCCCCC 1px solid; text-align:center;">
	  <tr height="30">
		<td width="112">会员级别</td>
		<td width="109">充值金额</td>
		<td width="104">消费折扣</td>
		<td width="104">修改</td>
		<td width="114">删除</td>
	  </tr>	
	  <?php
	  $row=listquery("select * from level order by id asc");
	  foreach ($row as $v){
	  ?>
	    <tr height="30">
		<td width="112"><?=$v[level]?></td>
		<td width="109"><?=$v[price]?> 元 <input name="" id="chongzhi<?=$v[id]?>" type="text" style="width:40px;" /></td>
		<td width="104"><?=$v[zhekou]?> 折 <input name="" id="zhekou<?=$v[id]?>" type="text" style="width:40px;" /></td>
		<td width="114"><a href="" id="<?=$v[id]?>" onmouseover="get('<?=$v[id]?>','chongzhi<?=$v[id]?>','zhekou<?=$v[id]?>');">修改</a></td>
		<td width="114"><a href="?delid=<?=$v[id]?>">删除</a></td>
	  </tr>	
	  <?php
	  }
	  ?> 
	</table>
	
	<form action="" method="post">
		<table width="776" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
		  <tr>
			<td width="122">会员级别</td>
			<td width="330"><input name="level" type="text" /></td>
		  </tr>
		  <tr>
			<td>充值金额</td>
			<td><input name="price" type="text" /><font color="red"> 元</font></td>
		  </tr>
		  <tr>
			<td>消费折扣</td>
			<td><input name="zhekou" type="text" /><font color="red">(打几折)</font></td>
		  </tr>
		  <tr>
			<td></td>
			<td><input name="submitadd" type="submit" class="reganniu"  value="增加" /></td>
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
  

       
		 $level=$_POST['level']; //级别
		 $price=$_POST['price']; //充值金额
		 $zhekou=$_POST['zhekou']; //租赁数量
		 if(empty($level)){
		 exit("<script>alert('不能为空!');window.location.href='level.php';</script>");
		  exit;
		 }
		 
		 
		  
	      mysql_query("INSERT INTO level (level,price,zhekou) VALUES ('$level','$price','$zhekou')");  
		   
			exit("<script>alert('设置成功!');window.location.href='level.php';</script>");
		 

		
    
 
}
//添加级别

if($_GET[delid]){
    $delid=$_GET[delid];
   
	$sql="delete from level where id='$delid'";
	mysql_query($sql);
	exit("<script>alert('删除成功!');window.location.href='level.php';</script>");
}
//获取删除级别

if($_GET[id]){
    $id=$_GET[id];
    $chongzhi=$_GET[chongzhi];
    $zhekou=$_GET[zhekou];
	$sql="update level set price='$chongzhi',zhekou='$zhekou' where id='$id'";
	mysql_query($sql);
	exit("<script>alert('修改成功!');window.location.href='level.php';</script>");
}
//单独修改



?>   
