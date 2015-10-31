<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心_易推网络</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
<script language="javascript" type="text/javascript">

function get(id,a,b,c){
var title=document.getElementById(a).value;
var paixu=document.getElementById(b).value;
var url=document.getElementById(c).value;

document.getElementById(id).href="?id="+id+"&title="+title+"&paixu="+paixu+"&url="+url;

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
	 <table width="783" height="111" style="margin-bottom:20px;">
		  <tr>
			<td width="96" height="18" style="color:#0066CC;">添加友情链接</td>			
		  </tr>		 
		  <tr>
			<td width="96" height="30">链接名称</td>
			<td width="675"><input name="title" type="text"  /></td>			
		  </tr>
		   <tr>
			<td width="96" height="30">网站url</td>
			<td width="675"><input name="url" type="text"  /></td>			
		  </tr>
		    <tr>
			<td width="96" height="30"></td>		
			<td width="675"><input name="submitadd" type="submit" class="reganniu"  value="添加" /></td>
		  </tr>		 
	  </table>
	 </form>
	 <!--上面是插入分类--> 
	  
	
	<table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;">
	  <tr>
		<td width="67" class="tdtop">选择</td>
		<td width="150" class="tdtop">链接名称</td>
		<td width="76" class="tdtop">排序</td>
		<td width="659" class="tdtop">网站URL</td>
		<td width="102" class="tdtop">修改</td>
		<td width="104" class="tdtop">删除</td>
	  </tr>
    </table>
	<!--list start-->	
	<form name="del_form" action="" method="post">
	<table width="1161" height="30" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">

	<?php 
	$numq=mysql_query("select * from link");
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
		
	$row=listquery("select * from link order by paixu asc limit ".$num.",10");
	foreach ($row as $v){
	?>
   
	  <tr>
		<td width="67" class="td"><input name="del_id[]" type="checkbox" id="del_id[]" value="<?=$v['id']?>" /><input name="goodid[]" type="text"  value="<?=$v['id']?>" style="display:none;" /></td>
		<td width="149" class="td"><input name="title[]" id="title<?=$v[id]?>" type="text" style="width:140px; text-align:center;" value="<?=$v[title]?>" /></td>
		<td width="76" class="td"><input name="paixu[]" id="paixu<?=$v[id]?>"type="text" style="width:50px; height:14px; text-align:center;" value="<?=$v[paixu]?>" /></td>
		<td width="659" class="td"><input name="url[]" id="url<?=$v[id]?>" type="text" style="width:240px; text-align:center;" value="<?=$v[url]?>" /></td>
		<td width="102" class="td"><a href="" id="<?=$v[id]?>" onmouseover="get('<?=$v[id]?>','title<?=$v[id]?>','paixu<?=$v[id]?>','url<?=$v[id]?>');">修改</a></td>
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
$title=$_POST['title'];
$url=$_POST['url'];
$url=str_replace("http://","",$url);
$url="http://".$url;

	if(empty($title)){
	 exit("<script>alert('网站名称不能为空!');window.history.go(-1);</script>");
	}
	
	if(empty($url)){
	 exit("<script>alert('网站URL地址不能为空!');window.history.go(-1);</script>");
	}

	 mysql_query("insert into link (title,url) values ('$title','$url')");
	 exit("<script>alert('添加成功!');window.location.href='link.php';</script>");
	

}
?>
<!--添加链接-->




<?php
$title=$_GET['title'];
$paixu=$_GET['paixu'];
$url=$_GET['url'];
$id=$_GET['id'];

if($title || $url){
mysql_query("update link set title='$title',paixu='$paixu',url='$url' where id='$id'");
exit("<script>alert('修改成功!');window.location.href='link.php';</script>");
}
?>

<!--单独修改-->




<?php

$delid=$_GET['delid'];
if($delid){
mysql_query("delete from link where id='$delid'");
 exit("<script>alert('删除成功!');window.location.href='link.php';</script>");
}
?>

<!--单独删除-->





  <?php
if($_POST['submitup']){

$title=$_POST['title']; //数组
$paixu=$_POST['paixu']; //数组
$url=$_POST['url']; //数组


$goodid=$_POST['goodid']; //数组 影藏的ID 用它来遍历所有input文本框对应数组内容

     if($goodid!=""){ 
             $del_num=count($goodid); 
             for($i=0;$i<$del_num;$i++){ 
                 mysql_query("update link set title='$title[$i]',paixu='$paixu[$i]',url='$url[$i]' where id='$goodid[$i]'"); 				
             }  
            exit("<script>alert('修改成功!');window.location.href='link.php';</script>");
      }else{ 
            exit("<script>alert('请选择!');window.location.href='link.php';</script>");
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
                 mysql_query("Delete from link where id='$del_id[$i]'"); 				
             }  
            exit("<script>alert('删除成功!');window.location.href='link.php';</script>");
      }else{ 
            exit("<script>alert('请选择!');window.location.href='link.php';</script>");
      }

  }
?>  

<!--批量删除-->

