<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻资源_<?=$sg['sitename']?></title>
<meta name="keywords" content="<?=$sg['keywords']?>" />
<meta name="description" content="<?=$sg['description']?>" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="foot.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/index.js"></script> 
</head>
<body>   
<?php include 'head.php';?>
<form action="so_news.php" method="get">
<div class="serach">
   <div class="serachr2"><input name="so" id="so" type="text"  style="line-height:40px; color:#CCCCCC; font-size:14px;"  value="媒体名称/链接" onclick="qingchu();" /></div>  
   <div class="serachr"><input name="submit_news" type="submit" class="seranniu" value="搜索" /></div>
</div>
</form>
<?php
$meiti=$_GET['meiti'];
$rukou=$_GET['rukou'];
$fenlei=$_GET['fenlei'];
$area=$_GET['area'];
$price=$_GET['price'];

if($meiti){
$_SESSION['sql_news'][0]='  meiti="'.$meiti.'"';
$_SESSION['show'][0]=$meiti;
}
if($rukou){
$_SESSION['sql_news'][1]='  rukou="'.$rukou.'"';
$_SESSION['show'][1]=$rukou;
}
if($fenlei){
$_SESSION['sql_news'][2]='  fenlei="'.$fenlei.'"';
$_SESSION['show'][2]=$fenlei;
}
if($area){
$_SESSION['sql_news'][3]='  area="'.$area.'"';
$_SESSION['show'][3]=$area;
}

if($price){
	switch($price){ 
	case 10: 
	$_SESSION['sql_news'][4]='  price <=10';
	$_SESSION['show'][4]="10";
	break; 
	case 50: 
	$_SESSION['sql_news'][4]='  price between 10 and 50';	
	$_SESSION['show'][4]="50";
	break; 
	case 100: 	
	$_SESSION['sql_news'][4]='  price between 50 and 100';	
	$_SESSION['show'][4]="100";
	break; 
	case 300: 	
	$_SESSION['sql_news'][4]='  price between 100 and 300';	
	$_SESSION['show'][4]="300";
	break; 
	case 301: 	
	$_SESSION['sql_news'][4]='  price > 300';
	$_SESSION['show'][4]="301";
	break; 	
	
	} 
}

$sa=$_SESSION['sql_news'];
foreach($sa as $sv){
  $m.=' and '.$sv; //SQL 语句的连贯操作
}
$f='-'.$m; //组合SQL语句
$m=str_replace("- and"," where ",$f); //替换第一个 


$caozuoid=$_GET['caozuoid'];
if($caozuoid){
$_SESSION['sql_news']="";
$_SESSION['show']="";
$m="";
}

$xuanzhong=$_SESSION['show'];
?>
<script>
window.onload=function (){
<?php
foreach($xuanzhong as $xv){ 
 echo 'document.getElementById("'.$xv.'").className="bian";';
 echo 'document.getElementById("'.$xv.'").style.color="white";';
}
?>
}
</script>
<!--head end-->
<div class="bnav">
   <a   class="bian" href="list_news.php?caozuoid=pt1" ><font color="#FFFFFF">媒体</font></a>
   <a href="?meiti=大型门户" id="大型门户">大型门户</a>
   <a href="?meiti=中小门户" id="中小门户">中小门户</a>
   <a href="?meiti=地方门户" id="地方门户">地方门户</a>   
   <a href="/list_newstc.php?caozuoid=pt4">新闻套餐</a>  
</div>
<div class="bnav">
   <a   class="bian" href="list_news.php?caozuoid=pt1"><font color="#FFFFFF">入口</font></a>
   <a href="?rukou=有" id="有">有</a>
   <a href="?rukou=无" id="无">无</a>
   <a href="?rukou=不确定" id="不确定">不确定</a>   
</div>

<div class="bnav">
  <a   class="bian" href="list_news.php?caozuoid=pt1"><font color="#FFFFFF">分类</font></a>  
    <a href="?fenlei=新闻" id="新闻">新闻</a>
	<a href="?fenlei=体育" id="体育">体育</a>
	<a href="?fenlei=娱乐" id="娱乐">娱乐</a>
	<a href="?fenlei=财经" id="财经">财经</a>
	<a href="?fenlei=科技" id="科技">科技</a>
	<a href="?fenlei=女性" id="女性">女性</a>
	<a href="?fenlei=健康" id="健康">健康</a>
	<a href="?fenlei=房产" id="房产">房产</a>
	<a href="?fenlei=教育" id="教育">教育</a>
	<a href="?fenlei=家居" id="家居">家居</a>
	<a href="?fenlei=汽车" id="汽车">汽车</a>
	<a href="?fenlei=环保" id="环保">环保</a>
	<a href="?fenlei=育儿" id="育儿">育儿</a>
	<a href="?fenlei=旅游" id="旅游">旅游</a>
	<a href="?fenlei=游戏" id="游戏">游戏</a>
	<a href="?fenlei=公益" id="公益">公益</a>
	<a href="?fenlei=时尚" id="时尚">时尚</a>
	<a href="?fenlei=电子商务" id="电子商务">电子商务</a>
	<a href="?fenlei=服装" id="服装">服装</a>
	<a href="?fenlei=金融" id="金融">金融</a>
	<a href="?fenlei=资讯" id="资讯">资讯</a>
	<a href="?fenlei=美容" id="美容">美容</a>
	<a href="?fenlei=法律" id="法律">法律</a>
	<a href="?fenlei=通信" id="通信">通信</a>
	<a href="?fenlei=商讯" id="商讯">商讯</a>
	<a href="?fenlei=文化" id="文化">文化</a>
	<a href="?fenlei=家电数码" id="家电数码">家电数码</a>
	<a href="?fenlei=工业资讯" id="工业资讯">工业资讯</a>
	<a href="?fenlei=购物" id="购物">购物</a>
	<a href="?fenlei=食品" id="食品">食品</a>
	<a href="?fenlei=生活" id="生活">生活</a>
	<a href="?fenlei=消费" id="消费">消费</a>
	<a href="?fenlei=地方" id="地方">地方</a>
	<a href="?fenlei=其他" id="其他">其他</a>  
	
</div>


<div class="bnav">
   <a   class="bian" href="list_news.php?caozuoid=pt1"><font color="#FFFFFF">地区</font></a>
   <?php
   $clist=listquery("select * from city order by id asc");
   foreach($clist as $v){
   ?>
   <a href="?area=<?=$v['cityname']?>" id="<?=$v['cityname']?>"><?=$v['cityname']?></a>
   <?php   
   }
   ?>
</div>

<div class="bnav">
   <a class="bian" href="list_news.php?caozuoid=pt1"><font color="#FFFFFF">价格分类</font></a>
    <a href="?price=10" id="10">0-10元</a>
	 <a href="?price=50" id="50">10-50元</a>
	 <a href="?price=100" id="100">50-100元</a>
	 <a href="?price=300" id="300">100-300元</a>
	 <a href="?price=301" id="301">300元以上</a>
	 	 
</div>
<!--fenlei end-->
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
<table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
 <?php

 $numq=mysql_query("select id from tb_news $m");
 include 'page.php';
 $row=listquery("select * from tb_news $m order by id desc limit ".$num.",20");
 foreach ($row as $v){
 ?>
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
 <?php
 }
 ?>
  
</table>




<!--LIST end-->

<div class="page">
    <div class="pagebao">
		   <a href="?page=0&price=<?=$price?>&caozuoid=<?=$caozuoid?>">首页</a>
		   <a href="?page=<?=$shang?>&price=<?=$price?>&caozuoid=<?=$caozuoid?>">上一页</a>
		  
		   <a href="?page=<?=$next?>&price=<?=$price?>&caozuoid=<?=$caozuoid?>">下一页</a>
		   <a href="?page=<?=$totle?>&price=<?=$price?>&caozuoid=<?=$caozuoid?>">末页</a>
		   <a href="javascript:;">跳到
		  <select onchange="window.location='?price=<?=$price?>&caozuoid=<?=$caozuoid?>&page='+this.value">
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
