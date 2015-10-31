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
window.onload=function (){
<?php
$p=$_GET['price'];
if($p){
 echo 'document.getElementById("'.$p.'").className="bian";';
 echo 'document.getElementById("'.$p.'").style.color="white";';
}
?>
}
</script>
</head>

<body>
<?php include 'head.php';?>
<!--head end-->

<div class="bnav">
   <a href="/"  class="bian"><font color="#FFFFFF">平台</font></a>
    <?php
	 $a=listquery("select * from type_pt order by paixu asc");
	 foreach($a as $v){
	 ?>
	  <a href="/<?=$v['url']?>?caozuoid=pt<?=$v['id']?>" id="pt<?=$v['id']?>"><?=$v['typename']?></a>	
	 <?php
	 }
	 ?>
   
</div>

<div class="bnav">
   <a href="/" class="bian"><font color="#FFFFFF">价格分类</font></a>
    <a href="?price=20" id="20" >0-20元</a>
	 <a href="?price=50" id="50" >20-50元</a>
	 <a href="?price=100" id="100" >50-100元</a>
	 <a href="?price=101" id="101" >100元以上</a>
	 	 
</div>

<!--fenlei end-->
<table class="table_weibo_nav" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="114" style=" padding-left:10px;">选择</td>
    <td width="105">媒体</td>
    <td width="102">分类</td>   
    <td width="251" style="text-align:center;">链接</td>
	<td width="143">会员价</td>
    <td width="145">可否带链接</td>
    <td width="145">是否收录</td>
    <td width="149">备注</td>
  </tr>
</table>
<form action="add_news.php" method="post">
<table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
 <?php
 $price=$_GET['price'];
	switch($price){ 
	case 20: 
	$sql="where price <=20 "; 
	break; 
	case 50: 
	$sql="where price between 20 and 50"; 
	break; 
	case 100: 
	$sql="where price between 50 and 100"; 
	break; 
	case 101: 
	$sql="where price > 100"; 
	break; 
	default: 
	$sql=""; 
	} 


 $numq=mysql_query("select id from tb_news $sql");
 include 'page.php';
 $row=listquery("select * from tb_news $sql order by id desc limit ".$num.",20");
 foreach ($row as $v){
 ?>
  <tr>
    <td width="124"><input name="numid[]" type="checkbox" value="<?=$v['id']?>" class="checkbox" style="margin-top:5px;" onclick="check();"/>选中发布</td>
    <td width="105"><?=$v['meiti']?></td>
    <td width="102"><?=$v['fenlei']?></td>    
    <td width="251" style="text-align:center;"><a href="<?=$v['link']?>" target="_blank"><?=$v['link']?></a></td>
	<td width="143"><?=$v['price']?>元</td>
    <td width="145"><?=$v['kedai']?></td>
    <td width="145"><?=$v['shoulu']?> </td>
    <td width="149"><?=mb_substr($v['beizhu'],0,11,'utf8')?> </td>
  </tr>
 <?php
 }
 ?>
  
</table>




<!--LIST end-->

<div class="page">
    <div class="pagebao">
		   <a href="?page=0">首页</a>
		   <a href="?page=<?=$shang?>">上一页</a>
		  
		   <a href="?page=<?=$next?>">下一页</a>
		   <a href="?page=<?=$totle?>">末页</a>
		   <a href="javascript:;">跳到
		  <select onchange="window.location='?price=<?=$price?>&page='+this.value">
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

<!--page end-->
<?php include 'foot.php';?>
</form>
</body>
</html>
