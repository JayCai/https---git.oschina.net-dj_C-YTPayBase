<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$sg['sitename']?></title>
<meta name="keywords" content="<?=$sg['keywords']?>" />
<meta name="description" content="<?=$sg['description']?>" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/index.js"></script> 
</head>

<body>
<?php include 'head.php';?>
<!--head end-->

<div class="addbox" style="border:0px;">
   <!--核心代码-->


<style>
.dfsf { border-top: #CCCCCC 1px solid; border-left: #CCCCCC 1px solid; margin-left:20px; line-height:30px; margin-top:10px;}
.dfsf td { border-right: #CCCCCC 1px solid; border-bottom: #CCCCCC 1px solid;padding-left:10px;}
</style>
<table width="400" border="0" cellspacing="0" cellpadding="0" class="dfsf">
  <tr>
    <td width="200">新闻资源报价单</td>
    <td width="200"><a href="daochu2.php?tb=tb_news">点击下载报表</a></td>  
  </tr>
  <tr>
    <td width="200">微博资源报价单</td>
     <td><a href="daochu2.php?tb=tb_weibo">点击下载报表</a></td>
  </tr>
  <tr>
    <td width="200">微信资源报价单</td>
    <td><a href="daochu2.php?tb=tb_weixin">点击下载报表</a></td>
  </tr>
 <tr>
    <td width="200">论坛套餐报价单</td>
    <td><a href="daochu2.php?tb=tb_bbs">点击下载报表</a></td>
  </tr>
   <tr>
    <td width="200">论坛置顶加精报价单</td>
    <td><a href="daochu2.php?tb=tb_bbszhiding">点击下载报表</a></td>
  </tr>
     <tr>
    <td width="200">论坛水军顶贴报价单</td>
    <td><a href="daochu2.php?tb=tb_bbsdingtie">点击下载报表</a></td>
  </tr>
  
   <tr>
    <td width="200">综合套餐报价单</td>
    <td><a href="daochu2.php?tb=tb_zonghe">点击下载报表</a></td>
  </tr>
    <tr>
    <td width="200">新闻套餐报价单</td>
   <td><a href="daochu2.php?tb=tb_newstc">点击下载报表</a></td>
  </tr>
   <tr>
    <td width="200">代写文章报价单</td>
   <td><a href="daochu2.php?tb=tb_dxwenzhang">点击下载报表</a></td>
  </tr>
</table>

	<!--核心代码-->
</div>

<!--page end-->
<?php include 'foot2.php';?>

</body>
</html>

