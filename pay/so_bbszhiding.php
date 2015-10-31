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
   <div class="serachr2"><input name="so" id="so" type="text"  style="line-height:40px; color:#CCCCCC; font-size:14px;"  value="论坛名称/链接"   onclick="qingchu();" /></div>  
   <div class="serachr"><input name="submit_bbszhiding" type="submit" class="seranniu" value="搜索" /></div>
</div>
</form>
   <!--核心代码-->
<table class="table_weibo_nav" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td width="127" style=" padding-left:10px;">选择</td>
    <td width="108">论坛</td>      
	<td width="147">板块</td>
	<td width="283">板块地址</td>
    <td width="158">效果</td>	
    <td width="110">置顶价格</td>
    <td width="109">加精价格</td>
    <td width="156">备注</td>
  </tr>
</table>
<form action="add_bbszhiding.php" method="post">
<table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
   <?php
    $so=$_GET['so'];//关键词
	   
       $numq=mysql_query("select id from tb_bbszhiding where bbs like '%$so%' or bkadress like '%$so%'");	   
	   require_once 'page.php';	  
	   $list=listquery("select * from tb_bbszhiding where bbs like '%$so%' or bkadress like '%$so%' order by id desc limit ".$num.",20");
	   foreach ($list as $v){
	   ?> 
	     <tr>
			<td width="127" ><input name="numid[]" type="checkbox" value="<?=$v['id']?>" class="checkbox" style="margin-top:5px;" onclick="check();"/>选中发布</td>
			<td width="108"><?=$v['bbs']?></td>   
			<td width="147"><?=$v['bk']?></td> 
			<td width="283"><a href="<?=$v['bkadress']?>" target="_blank"><?=$v['bkadress']?></a></td>   
			<td width="158"><?=$v['xiaoguo']?></td>	
			<td width="110"><?=$v['zdprice']?> 元</td>
			<td width="109"><?=$v['jjprice']?> 元</td>
			<td width="156"><?=$v['beizhu']?></td>
		  </tr>
		   <?
		   }
   
   ?>
   
</table>
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

