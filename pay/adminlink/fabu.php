<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心_易推网络</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
<script language="javascript" type="text/javascript">
function preg_match(regStr, str)
{
     var objRegExp = new RegExp(regStr);
     return objRegExp.test(str);
}
function SelectAll(form)
{
for(var j = 0;j < form.elements.length;j++)
     {
         var e = form.elements[j];
         if(preg_match(/del_id/, e.name))
         {
             e.checked = form.select_all.checked;
         }
         else
         {
             continue;
         }
     }
}

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
	
	  
	
	<table width="1161" height="30" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;">
	  <tr style="background-color: #006666; color:white;">
		
		<td width="150" class="td">平台名称</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td">查看</td>
		
		<td width="104" class="td">发布</td>
	  </tr>
    </table>
	<!--list start-->
	
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">新闻资源</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_news.php">查看</a></td>
		<td width="104" class="td"><a href="add_news.php">发布</a></td>
	  </tr>
    </table>
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">微博资源</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_weibo.php">查看</a></td>
		<td width="104" class="td"><a href="add_weibo.php">发布</a></td>
	  </tr>
    </table>
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">微信资源</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_weixin.php">查看</a></td>
		<td width="104" class="td"><a href="add_weixin.php">发布</a></td>
	  </tr>
    </table>
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">论坛套餐</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_bbs.php">查看</a></td>
		<td width="104" class="td"><a href="add_bbs.php">发布</a></td>
	  </tr>
    </table>
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">论坛置顶加精</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_bbszhiding.php">查看</a></td>
		<td width="104" class="td"><a href="add_bbszhiding.php">发布</a></td>
	  </tr>
    </table>
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">论坛水军顶贴</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_bbsdingtie.php">查看</a></td>
		<td width="104" class="td"><a href="add_bbsdingtie.php">发布</a></td>
	  </tr>
    </table>
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">综合套餐</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_zonghe.php">查看</a></td>
		<td width="104" class="td"><a href="add_zonghe.php">发布</a></td>
	  </tr>
    </table>
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">新闻套餐</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_newstc.php">查看</a></td>
		<td width="104" class="td"><a href="add_newstc.php">发布</a></td>
	  </tr>
    </table>
	   <table width="1161" height="28" border="0" cellpadding="0" cellspacing="0" style="border-right:#CCCCCC 1px solid; text-align:center;" class="wode">
	  <tr>
		
		<td width="150" class="td">代写文章</td>
		
		<td width="559" class="td">&nbsp; </td>
		<td width="100" class="td"><a href="list_dxwenzhang.php">查看</a></td>
		<td width="104" class="td"><a href="add_dxwenzhang.php">发布</a></td>
	  </tr>
    </table>
	
  

	 <!--list end-->
	

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

