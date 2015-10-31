<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>论坛水军顶贴_<?=$sg['sitename']?></title>
	  <meta name="keywords" content="<?=$sg['keywords']?>" />
	  <meta name="description" content="<?=$sg['description']?>" />
	  <link href="css/css.css" rel="stylesheet" type="text/css" />
	  <link href="foot.css" rel="stylesheet" type="text/css" />
	  <link rel = "Shortcut Icon" href="favicon.ico" /> 
	  <script type="text/javascript" src="js/index.js"></script> 
	  <script>
		 window.onload=function (){
			   <?php
				  $price=$_GET['price'];
				  if($price){
					 echo 'document.getElementById("'.$price.'").className="bian";';
					 echo 'document.getElementById("'.$price.'").style.color="white";';
				  }
				  $bbs=$_GET['bbs'];
				  if($bbs){
					 echo 'document.getElementById("'.$bbs.'").className="bian";';
					 echo 'document.getElementById("'.$bbs.'").style.color="white";';
				  }
			   ?>
			}
		 </script>
	  </head>

	  <body>
		 <?php include 'head.php';?>
		 <form action="so_bbsdingtie.php" method="get">
			<div class="serach">
			   <div class="serachr2"><input name="so" id="so" type="text"  style="line-height:40px; color:#CCCCCC; font-size:14px;"  value="论坛名称/链接"  onclick="qingchu();"  /></div>  
			   <div class="serachr"><input name="submit_bbsdingtie" type="submit" class="seranniu" value="搜索" /></div>
			</div>
		 </form>
		 <!--head end-->
		 <div class="bnav">
			<a   class="bian" href="list_bbsdingtie.php?caozuoid=pt6"><font color="#FFFFFF">论坛</font></a>
			<a href="?bbs=天涯&price=<?=$price?>" id="天涯" >天涯</a>
			<a href="?bbs=大众&price=<?=$price?>" id="大众" >大众</a>

		 </div>

		 <div class="bnav">
			<a  class="bian" href="list_bbsdingtie.php?caozuoid=pt6"><font color="#FFFFFF">价格分类</font></a>
			<a href="?price=500&bbs=<?=$bbs?>" id="500" >0-500元</a>
			<a href="?price=1000&bbs=<?=$bbs?>" id="1000" >500-1000元</a>
			<a href="?price=3000&bbs=<?=$bbs?>" id="3000" >1000-3000元</a>
			<a href="?price=10000&bbs=<?=$bbs?>" id="10000" >3000-10000元</a>
			<a href="?price=10001&bbs=<?=$bbs?>" id="10001" >10000元以上</a>

		 </div>
		 <!--fenlei end-->
		 <table class="table_weibo_nav" border="0" cellspacing="0" cellpadding="0" >
			<tr>
			   <td width="127" style=" padding-left:10px;">选择</td>
			   <td width="108">论坛</td>  
			   <td width="283">论坛地址</td>
			   <td width="158">条数</td>	
			   <td width="110">周期</td>
			   <td width="109">会员价</td>
			   <td width="156">备注</td>
			</tr>
		 </table>
		 <form action="add_bbsdingtie.php" method="post">
			<table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
			   <?php

				  switch($price){ 
					 case 500: 
						$sql="where price <=500 "; 
						break; 
					 case 1000: 
						$sql="where price between 500 and 1000"; 
						break; 
					 case 3000: 
						$sql="where price between 1000 and 3000"; 
						break; 
					 case 10000: 
						$sql="where price between 3000 and 10000"; 
						break; 
					 case 10001: 
						$sql="where price > 10000"; 
						break; 
					 default: 
						$sql=" where price <=10000 "; 
				  } 

				  if($bbs){
					 $sql.=" and bbs='$bbs' ";
				  }

				  $numq=mysql_query("select id from tb_bbsdingtie $sql");
				  include 'page.php';
				  $row=listquery("select * from tb_bbsdingtie $sql order by id desc limit ".$num.",20");
				  foreach ($row as $v){
				  ?>
				  <tr onmousemove="changeTrColor(this)">
					 <td width="127" ><a href="?mid=<?=$v[id]?>" class="renbude" style="width:70px; margin-left:5px; ">加入购物车</a></td>
					 <td width="108"><?=$v['bbs']?></td> 
					 <td width="283"><a href="<?=$v['bbsadress']?>" target="_blank"><?=$v['bbsadress']?></a></td>   
					 <td width="158"><?=$v['num']?></td>	
					 <td width="110"><?=$v['zhouqi']?></td>
					 <td width="109"><?=$v['price']?> 元</td>
					 <td width="156"><?=$v['beizhu']?></td>
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
			<?php $sex=query("select count(id) from ordertop where user='$user' and tb='tb_bbsdingtie'");$xge=$sex['count(id)'];if($xge==0){$xge=0;}

			   $sexd=listquery("select * from ordertop  where user='$user' and tb='tb_bbsdingtie' order by id desc");
			   foreach ($sexd as $ve){
				  $vid=$ve[cpID];
				  $sexdd=query("select * from tb_bbsdingtie  where id='$vid'");
				  $showxuan.='<a>'.$sexdd['bbs'].'<a>'.'<a href="?del_id='.$ve[id].'"><font color=blue>点击删除</font></a>';
					 }

					 $del_id=$_GET['del_id'];
					 if($del_id){
						mysql_query("delete from ordertop where id='$del_id'");
						exit("<script>window.location.href='list_bbszhiding.php?caozuoid=pt7';</script>");	
					 }
				  ?>
				  <?php include 'foot.php';?>
			   </form>

			   <?php 
				  $cpID=$_GET['mid'];//产品IP
				  if($cpID){
					 $zz=query("select * from ordertop where user='$user' and cpID='$cpID' and tb='tb_bbsdingtie'");
					 if(!$zz[id]){
						mysql_query("insert into ordertop (tb,cpID,user) values ('tb_bbsdingtie','$cpID','$user')");
						exit("<script>window.location.href='list_bbsdingtie.php?caozuoid=pt6';</script>");
					 }else{
						exit("<script>window.history.go(-1);</script>");
					 } 
				  }
			   ?>
			</body>
		 </html>
