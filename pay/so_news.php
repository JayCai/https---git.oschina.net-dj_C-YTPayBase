<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$sg['sitename']?></title>
<meta name="keywords" content="<?=$sg['keywords']?>" />
<meta name="description" content="<?=$sg['description']?>" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="foot.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/index.js"></script> 
<script>	
	function hese(){
	 var myselect=document.getElementById("select"); 
	 var index=myselect.selectedIndex ; 
	 var a=myselect.options[index].value; 
	// alert(a);

		if(a=="tb_dxwenzhang|zishu|up_dxwenzhang.php"){	
		
		document.getElementById("mikd").innerHTML="请输入字数"; //显示
		}
	}
</script>
</head>

<body>
<?php include 'head.php';?>
<!--head end-->
<form action="" method="get">
<div class="serach">
   <div class="serachr2"><input name="so" id="so" type="text"  style="line-height:40px; color:#CCCCCC; font-size:14px;"  value="媒体名称/链接" onclick="qingchu();"/></div>  
   <div class="serachr"><input name="submit_news" type="submit" class="seranniu" value="搜索" /></div>
</div>
</form>

   <!--核心代码-->
 <table class="table_weibo_nav" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="114" style=" padding-left:10px;">选择</td>
    <td width="105">媒体</td>
	<td width="105">媒体名称</td>
    <td width="102">分类</td>   
    <td width="251" style="text-align:center;">链接</td>
	<td width="143">会员价</td>
    <td width="145">可否带链接</td>
    <td width="145">是否收录</td>
    <td width="149">备注</td>
  </tr>
</table>
<form action="add_news.php" method="post">

   <?php

       $so=$_GET['so'];//关键词
	   
       $numq=mysql_query("select id from tb_news where mtname like '%$so%' or link like '%$so%'");
       require_once 'page.php';
	   $list=listquery("select * from tb_news where mtname like '%$so%' or link like '%$so%' order by id desc  limit ".$num.",20");
	   foreach ($list as $v){
	   ?>
		
		<table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
		  <tr>
			<td width="124" ><input name="numid[]" type="checkbox" value="<?=$v['id']?>" class="checkbox" style="margin-top:5px;" onclick="check();"/>选中发布</td>
			<td width="105"><?=$v['meiti']?></td>
			<td width="105"><?=$v['mtname']?></td>
			<td width="102"><?=$v['fenlei']?></td>    
			<td width="251" style="text-align:center;"><a href="<?=$v['link']?>" target="_blank"><?=$v['link']?></a></td>
			<td width="143"><?=$v['price']?>元</td>
			<td width="145"><?=$v['kedai']?></td>
			<td width="145"><?=$v['shoulu']?> </td>
			<td width="149"><?=mb_substr($v['beizhu'],0,11,'utf8')?> </td>
		  </tr>
		  
		</table>
			   <?
			   }
  
   ?>
   
   <div class="page">
    <div class="pagebao">
		   <a href="?page=0&so=<?=$so?>">首页</a>
		   <a href="?page=<?=$shang?>&so=<?=$so?>">上一页</a>
		  
		   <a href="?page=<?=$next?>&so=<?=$so?>">下一页</a>
		   <a href="?page=<?=$totle?>&so=<?=$so?>">末页</a>
		   <a href="javascript:;">跳到
		  <select onchange="window.location='?so=<?=$so?>&page='+this.value">
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
		   <a href="" style="float:right; border:0px;">资源总数<?=$tongji?>条</a>
		   
	</div>
</div>
   
   
	 <table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td>
		<?php 
		if(empty($list)){
		echo '未找到, 匹配信息, 请减少搜索条件';
		}
		?>
		</td>
	  </tr>
	</table>

  <!--新闻-->
<!--page end-->
<?php include 'foot.php';?>

</body>
</html>

