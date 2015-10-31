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
	  <form name="del_form" action="" method="post">
	  
	  <table width="1194" border="0" cellpadding="0" cellspacing="0" class="listtable" style="background-color: #006666; color:#FFFFFF;">
	  <tr>
		<td width="90">新闻资源列表</td>
	  </tr>
	  </table>
	  
     <table width="1193" border="0" cellpadding="0" cellspacing="0" class="listtable">
	  <tr>
		<td width="90">选择</td>
		<td width="108">媒体</td>
		<td width="108">媒体名称</td>
		<td width="111">分类</td>
		<td width="165">链接</td>
		<td width="78">会员价</td>
		<td width="193">可否带链接</td>
		<td width="150">是否收录</td>
		<td width="196">备注</td>
		<td width="52">修改</td>
		<td width="50">删除</td>
	  </tr>
	<?php 
	$numq=mysql_query("select * from tb_news");
    $num = mysql_num_rows($numq); //统计
	
	$pageso=$_GET[pageso];
	if(!$pageso){
	$pageso=10;
	}

		$totle=ceil($num/$pageso); //取得分页总数						
		$page=$_GET[page];	
		$num=($page-1)*$pageso;					
		
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
		
	$row=listquery("select * from tb_news order by id desc limit ".$num.",".$pageso."");
	foreach ($row as $v){
	?>
	  <tr>
		<td width="90"><input name="del_id[]" type="checkbox" id="del_id[]" value="<?=$v['id']?>" /></td>
		<td width="108"><?=$v[meiti]?></td>
		<td width="108"><?=$v[mtname]?></td>
		<td width="111"><?=$v[fenlei]?></td>
		<td width="165"><?=$v[link]?></td>
		<td width="78"><?=$v[price]?></td>
		<td width="193"><?=$v[kedai]?></td>
		<td width="150"><?=$v[shoulu]?></td>
		<td width="196"><?=mb_substr($v[beizhu],0,12,'utf8')?></td>
		<td width="52"><a href="up_news.php?id=<?=$v[id]?>">修改</a></td>
		<td width="50"><a href="?delid=<?=$v[id]?>">删除</a></td>
	  </tr>   
	  
	<?php
	}
	?>
	  
	</table>

	<table width="1163" height="28" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;">
		  <tr>
			<td width="321" style="text-align:center;"></td>
			<td width="64"><a href="?page=1&pageso=<?=$pageso?>">首页</a></td>
			<td width="73"><a href="?page=<?=$shang?>&pageso=<?=$pageso?>">上一页</a></td>
			<td width="59"><a href="?page=<?=$next?>&pageso=<?=$pageso?>">下一页</a></td>
			<td width="59"><a href="?page=<?=$totle?>&pageso=<?=$pageso?>">末页</a></td>
			<td width="136"> 跳到：
		   <select onchange="window.location='?pageso=<?=$pageso?>&page='+this.value">
				<?php
				for($i=1;$i<=$totle;$i++){ 
				 echo "<option value='$i'>$i</option>\n"; 
				} 
				?>
			</select>
			页
		   </td>	
		   <td width="451">每页显示
	        <input name="" type="text" id="xian" style="width:40px;" /> 条 <a href="" style="color:blue;" id="urlxian" onmouseover="xianshi();">点击显示</a></td>
		  </tr>
		</table>
		<table width="433" height="28" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;">
		  <tr>
			<td width="73" style="text-align:center;"><input id="select_all" name="select_all" type="checkbox" value="1" onClick="SelectAll(this.form)"/>全选</td>
			<td width="100"><input name="submitdel" type="submit" value="批量删除" class="reganniu" /></td>
			<td width="160"></td>
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

$delid=$_GET['delid'];
if($delid){
mysql_query("delete from tb_news where id='$delid'");
 exit("<script>alert('删除成功!');window.location.href='list_news.php';</script>");
}
?>

<!--单独删除-->








  <?php
if($_POST['submitdel']){

$del_id=$_POST['del_id'];
     if($del_id!=""){ 
             $del_num=count($del_id); 
             for($i=0;$i<$del_num;$i++){ 
                 mysql_query("Delete from tb_news where id='$del_id[$i]'"); 				
             }  
            exit("<script>alert('删除成功!');window.location.href='list_news.php';</script>");
      }else{ 
            exit("<script>alert('请选择!');window.location.href='list_news.php';</script>");
      }

  }
?>  

<!--批量删除-->


