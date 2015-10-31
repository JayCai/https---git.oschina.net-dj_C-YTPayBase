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
	<!--核心代码-->
	
	<script>
	function getdan (id){
		
	 var myselect=document.getElementById('lb'+id); 
	 var index=myselect.selectedIndex ; 
  	 var a=myselect.options[index].value; 
	 
     ly=document.getElementById('liyou'+id).value; //理由
	 
	 document.getElementById('cz'+id).href='?id='+id+'&type='+a+'&liyou='+ly; //组合URL
	 
	   
			//判断不可操作
	}	
	
	</script>
	<?php 
	include 'order_nav.php';	
	?>			
  <form name="del_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table width="1182" border="0" cellspacing="0" cellpadding="0" class="order2">
	  <tr style="background-color: #006666; color:white;">
		<td width="86" height="17">选择</td>
		<td width="138">订单编号</td>		
		<td width="80">用户名</td>	
		<td width="115">产品价格</td>	
		<td width="67">订单状态</td>		
		<td width="122">备注说明</td>
		<td width="122">操作</td>
		<td width="109">订单时间</td>		
		<td width="109">查看详情</td>
		<td width="80">发布报表</td>
	  </tr>
	  
	  <?php	   
	  $numq=mysql_query("select * from order_newstc $sql");
      include 'page.php';
	  $row=listquery("select * from order_newstc $sql order by id desc  limit ".$num.",10");
	  foreach ($row as $v){
	  ?>
	  <tr>
		<td width="86"><input  name="del_id[]" type="checkbox" id="del_id[]" value="<?=$v['id']?>" /><input  name="id" type="text" id="<?=$v['id']?>" value="<?=$v['id']?>" style="display:none;" /></td>
		<td width="138"><?=$v['orderID']?></td>
		<td width="80"><?=$v['user']?></td>		
		<td width="115"><?=$v['price']?></td>		
		<td width="67"><span id="type<?=$v['id']?>"><?=$v['type']?></span></td>
		<td width="122"><input name="liyou" type="text" id="liyou<?=$v['id']?>" value="<?=$v['liyou']?>"/></td>
		<td width="122">		
		<select name="" id="lb<?=$v[id]?>">		   
		   <option value="收单">收单</option>
		   <option value="退单">退单</option>
		   <option value="交易成功">交易成功</option>
		</select>
		<a href="" id="cz<?=$v['id']?>" onmouseover="getdan('<?=$v['id']?>');">操作</a>		
		</td>
		<td width="109"><?=mb_substr($v['time'],0,10,'utf8')?></td>
		<td width="109"><a href="show_newstc.php?id=<?=$v[id]?>&caozuoid=newstc">查看详情</a></td>
		<td width="80"><a href="fabiao.php?id=<?=$v['id']?>&tb=order_newstc" target="_blank">发布报表</a></td>
	  </tr>	
	  <?php
	  }
	  ?> 
	</table>
	
      <table width="1156" border="0" cellspacing="0" cellpadding="0" height="30" class="usertable" style="margin-top:10px;border:0px;">
	  <tr>
		<td width="64"><a href="?page=0&type=<?=$type?>&caozuoid=<?=$caozuoid?>&tiaojian=<?=$tiaojian?>&xuanze=<?=$xuanze?>">首页</a></td>
		<td width="72"><a href="?page=<?=$shang?>&type=<?=$type?>&caozuoid=<?=$caozuoid?>&tiaojian=<?=$tiaojian?>&xuanze=<?=$xuanze?>">上一页</a></td>
		<td width="76"><a href="?page=<?=$next?>&type=<?=$type?>&caozuoid=<?=$caozuoid?>&tiaojian=<?=$tiaojian?>&xuanze=<?=$xuanze?>">下一页</a></td>
		<td width="82"><a href="?page=<?=$totle?>&type=<?=$type?>&caozuoid=<?=$caozuoid?>&tiaojian=<?=$tiaojian?>&xuanze=<?=$xuanze?>">末页</a></td>	
		<td width="133"> 跳到：
       <select onchange="window.location='?tiaojian=<?=$tiaojian?>&xuanze=<?=$xuanze?>&type=<?=$type?>&caozuoid=<?=$caozuoid?>&page='+this.value">
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
	  <table width="1156" border="0" cellspacing="0" cellpadding="0" height="30" class="usertable" style="margin-top:10px; border:0px;">
	  <tr>
		<td width="80"> <input id="select_all" name="select_all" type="checkbox" value="1" onClick="SelectAll(this.form)"/> 全选</td>
	
		<td width="154"> <input name="submitdel" type="submit" value="批量删除" class="reganniu" /></td>	
		<td width="724"></td>
	  </tr>
	  </table>
	 </form>
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


<?php
$ID=$_GET['id'];
$type=$_GET['type'];
$liyou=$_GET['liyou'];

if($ID){

    $f=query("select * from order_newstc where id='$ID'");
	$zt=$f['type'];
	if($zt=='退单'){
	exit("<script>alert('不可操作!');window.location.href='order_newstc.php?caozuoid=newstc';</script>");
	}
	if($zt=='交易成功'){
	exit("<script>alert('不可操作!');window.location.href='order_newstc.php?caozuoid=newstc';</script>");
	}
	
    mysql_query("update order_newstc set type='$type',liyou='$liyou' where id='$ID'");
		//退单操作
	$time=date("Y-m-d H:i:s");
	$order_id=$f['orderID'];//订单编号
	$order_user=$f['user'];//订单用户名	
	$order_cpname='新闻套餐';//订单产品名称
	$order_price=$f['price'];//订单产品价格
		
	if($type=='退单'){
	mysql_query("insert into tuidan (orderID,user,cpname,price,time) values ('$order_id','$order_user','$order_cpname','$order_price','$time')");
	$xuser=query("select * from user where user='$order_user'");
	$oldrmb=$xuser['rmb'];//取得退单人的RMB
	$newrmb=$oldrmb+$order_price;//加上退单金额
	mysql_query("update user set rmb='$newrmb' where user='$order_user'");
	}
	
	if($type=='交易成功'){
	
	$oid=$f['orderID'];//订单编号	
	$qu=query("select * from ticheng_b where orderID='$oid'");
	$tc=$qu['ticheng'];//取得提成
	$tuijie=$qu['tuijie'];//取得推荐人
	
	$tui=query("select * from user where user='$tuijie'");
	$oldrmb=$tui['rmb'];//取得推荐人的RMB
	$newrmb=$oldrmb+$tc;//加上提成
	mysql_query("update user set rmb='$newrmb' where user='$tuijie'");
	mysql_query("update ticheng_b set type='1' where orderID='$oid'");
	}
    exit("<script>alert('操作成功!');window.location.href='order_newstc.php?caozuoid=newstc';</script>");
}
?>  




<?php
if($_POST['submitdel']){

$del_id=$_POST['del_id'];
     if($del_id!=""){ 
             $del_num=count($del_id); 
             for($i=0;$i<$del_num;$i++){ 
                 mysql_query("Delete from order_newstc where id='$del_id[$i]'"); 				
             }  
             exit("<script>alert('删除成功!');window.location.href='order_newstc.php?caozuoid=newstc';</script>");
      }else{ 
             exit("<script>alert('请选择!');window.location.href='order_newstc.php?caozuoid=newstc';</script>");
      }

  }
?>  
<!--批量删除-->
