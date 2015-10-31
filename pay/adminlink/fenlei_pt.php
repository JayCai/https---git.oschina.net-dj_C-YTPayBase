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
var typename=document.getElementById(a).value;
var paixu=document.getElementById(b).value;

document.getElementById(id).href="?typename="+typename+"&paixu="+paixu+"&id="+id;

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
	<form action="" method="post">
	 <table width="783" height="65" >
		  <tr>
			<td width="62" height="18" style="color:#0066CC;">平台分类</td>			
		  </tr>		 
		  <tr>
			<td width="62" height="30">分类名称</td>
			<td width="170"><input name="typename" type="text"  /></td>
			<td width="535"><input name="submitadd" type="submit" class="reganniu"  value="添加" /></td>
		  </tr>
		  <tr height="30"></tr>
	  </table>
	 </form>
	 <!--上面是插入分类--> 
	  
	
	<table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;">
	  <tr>
		<td width="67" class="tdtop">选择</td>
		<td width="150" class="tdtop">平台名称</td>
		<td width="76" class="tdtop">排序</td>
		<td width="659" class="tdtop">（附注：排序值越大越靠后显示）</td>
		<td width="102" class="tdtop">修改</td>
		<td width="104" class="tdtop">删除</td>
	  </tr>
    </table>
	<!--list start-->
	<form name="del_form" action="" method="post">
	<table width="1161" height="30" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	
	<?php 
	$numq=mysql_query("select * from type_pt");
    $num = mysql_num_rows($numq); //统计

		$totle=ceil($num/10); //取得分页总数						
		$page=$_GET[page];	
		$num=($page-1)*10;					
		
		if($page==0){
		$num=0;
		$shang=1;
		$next=2;
		$now=1;
		  
		}else{								
			if($page==1){
			$shang=1;$next=2;$now=1;
			}else{
			$next=$page+1;
			$now=$page;
			$shang=$page-1;	
			}
		} 
		if($totle==1){$next=1;}
		if($next>$totle){$next=$totle;}
		
	$row=listquery("select * from type_pt order by paixu asc limit ".$num.",10");
	foreach ($row as $v){
	?>
   
	  <tr><input name="goodid[]" type="text"  value="<?=$v['id']?>" style="display:none;" />
		<td width="67" class="td"><input name="del_id[]" type="checkbox" id="del_id[]" value="<?=$v['id']?>" /></td>
		<td width="149" class="td"><input name="typename[]" id="typename<?=$v[id]?>" type="text" style="width:140px; text-align:center;" value="<?=$v[typename]?>" /></td>
		<td width="76" class="td"><input name="paixu[]" id="paixu<?=$v[id]?>"type="text" style="width:50px; height:14px; text-align:center;" value="<?=$v[paixu]?>" /></td>
		<td width="659" class="td">&nbsp;</td>
		<td width="102" class="td"><a href="" id="<?=$v[id]?>" onmouseover="get('<?=$v[id]?>','typename<?=$v[id]?>','paixu<?=$v[id]?>');">修改</a></td>
		<td width="104" class="td"><a href="?delid=<?=$v[id]?>">删除</a></td>
	  </tr>
   
	<?php
	}
	?>
 </table>
    <table width="1163" height="28" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;">
	  <tr>
		<td width="555" style="text-align:center;"></td>
		<td width="87"><a href="?page=<?=$shang?>">上一页</a></td>
		<td width="84"><a href="?page=<?=$next?>">下一页</a></td>
		<td width="437"></td>
	  </tr>
	</table>
	<table width="433" height="28" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;">
	  <tr>
		<td width="73" style="text-align:center;"><input id="select_all" name="select_all" type="checkbox" value="1" onClick="SelectAll(this.form)"/>全选</td>
		<td width="129"><input name="submitup" type="submit" value="批量修改" class="reganniu" /></td>
		<td width="100" style="margin-left:10px;"><input name="submitdel" type="submit" value="批量删除" class="reganniu" /></td>
		<td width="131"></td>
	  </tr>
	</table>
	 <!--list end-->
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
$typename=$_POST['typename'];
	if(empty($typename)){
	 exit("<script>alert('栏目名称不能为空!');window.history.go(-1);</script>");
	}else{
	 
	 mysql_query("insert into type_pt (typename) values ('$typename')");
	 exit("<script>alert('添加成功!');window.location.href='fenlei_pt.php';</script>");
	}

}
?>
<!--添加分类-->




<?php
$typename=$_GET['typename'];
$paixu=$_GET['paixu'];
$id=$_GET['id'];

if($typename || $paixu){
mysql_query("update type_pt set typename='$typename',paixu='$paixu' where id='$id'");
exit("<script>alert('修改成功!');window.location.href='fenlei_pt.php';</script>");
}
?>

<!--单独修改-->




<?php

$delid=$_GET['delid'];
if($delid){
mysql_query("delete from type_pt where id='$delid'");
 exit("<script>alert('删除成功!');window.location.href='fenlei_pt.php';</script>");
}
?>

<!--单独删除-->





  <?php
if($_POST['submitup']){

$typename=$_POST['typename']; //数组
$paixu=$_POST['paixu']; //数组
$del_id=$_POST['del_id']; //数组 虚假选择 欺骗用户的 实际是全部遍历一遍

$goodid=$_POST['goodid']; //数组 影藏的ID 用它来遍历所有input文本框对应数组内容

     if($del_id!=""){ 
             $del_num=count($goodid); 
             for($i=0;$i<$del_num;$i++){ 
                 mysql_query("update type_pt set typename='$typename[$i]',paixu='$paixu[$i]' where id='$goodid[$i]'"); 				
             }  
            exit("<script>alert('修改成功!');window.location.href='fenlei_pt.php';</script>");
      }else{ 
            exit("<script>alert('请选择!');window.location.href='fenlei_pt.php';</script>");
      }

  }
?>  

<!--批量修改-->




  <?php
if($_POST['submitdel']){

$del_id=$_POST['del_id'];
     if($del_id!=""){ 
             $del_num=count($del_id); 
             for($i=0;$i<$del_num;$i++){ 
                 mysql_query("Delete from type_pt where id='$del_id[$i]'"); 				
             }  
            exit("<script>alert('删除成功!');window.location.href='fenlei_pt.php';</script>");
      }else{ 
            exit("<script>alert('请选择!');window.location.href='fenlei_pt.php';</script>");
      }

  }
?>  

<!--批量删除-->

