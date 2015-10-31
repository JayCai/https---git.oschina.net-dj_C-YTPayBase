<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>论坛置顶加精_<?=$sg['sitename']?></title>
	  <meta name="keywords" content="<?=$sg['keywords']?>" />
	  <meta name="description" content="<?=$sg['description']?>" />
	  <link href="css/css.css" rel="stylesheet" type="text/css" />
	  <link href="foot.css" rel="stylesheet" type="text/css" />
	  <link rel = "Shortcut Icon" href="favicon.ico" /> 
	  <script type="text/javascript" src="js/index.js"></script> 
   </head>
   <body>
	  <?php include 'head.php';?>
	  <form action="so_bbszhiding.php" method="get">
		 <div class="serach">
			<div class="serachr2"><input name="so" id="so" type="text"  style="line-height:40px; color:#CCCCCC; font-size:14px;"  value="论坛名称/链接"   onclick="qingchu();" /></div>  
			<div class="serachr"><input name="submit_bbszhiding" type="submit" class="seranniu" value="搜索" /></div>
		 </div>
	  </form>
	  <?php

		 $bk=$_GET['bk'];
		 $area=$_GET['area'];
		 $xiaoguo=$_GET['xiaoguo'];
		 $zdprice=$_GET['zdprice'];
		 $jjprice=$_GET['jjprice'];

		 if($bk){
			$_SESSION['sql_news'][0]='  bk="'.$bk.'"';
			$_SESSION['show'][0]=$bk;
		 }
		 if($area){
			$_SESSION['sql_news'][1]='  area="'.$area.'"';
			$_SESSION['show'][1]=$area;
		 }

		 if($xiaoguo){
			$_SESSION['sql_news'][2]='  xiaoguo="'.$xiaoguo.'"';
			$_SESSION['show'][2]=$xiaoguo;
		 }

		 if($zdprice){
			switch($zdprice){ 
			   case 50: 
				  $_SESSION['sql_news'][3]='  zdprice <=50';
				  $_SESSION['show'][3]="50";
				  break; 
			   case 100: 
				  $_SESSION['sql_news'][3]='  zdprice between 50 and 100';	
				  $_SESSION['show'][3]="100";
				  break; 	
			   case 150: 
				  $_SESSION['sql_news'][3]='  zdprice between 100 and 150';	
				  $_SESSION['show'][3]="150";
				  break; 	
			   case 200: 
				  $_SESSION['sql_news'][3]='  zdprice between 150 and 200';	
				  $_SESSION['show'][3]="200";
				  break; 	
			   case 300: 
				  $_SESSION['sql_news'][3]='  zdprice between 200 and 300';	
				  $_SESSION['show'][3]="300";
				  break; 		
			   case 301: 
				  $_SESSION['sql_news'][3]='  zdprice > 300';
				  $_SESSION['show'][3]="301";
				  break; 
			   } 
			}

			if($jjprice){
			   switch($jjprice){ 
				  case 'j50': 
					 $_SESSION['sql_news'][4]='  jjprice <=50';
					 $_SESSION['show'][4]="j50";
					 break; 
				  case 'j100': 
					 $_SESSION['sql_news'][4]='  jjprice between 50 and 100';	
					 $_SESSION['show'][4]="j100";
					 break; 	
				  case 'j150': 
					 $_SESSION['sql_news'][4]='  jjprice between 100 and 150';	
					 $_SESSION['show'][4]="j150";
					 break; 	
				  case 'j200': 
					 $_SESSION['sql_news'][4]='  jjprice between 150 and 200';	
					 $_SESSION['show'][4]="j200";
					 break; 	
				  case 'j300': 
					 $_SESSION['sql_news'][4]='  jjprice between 200 and 300';	
					 $_SESSION['show'][4]="j300";
					 break; 		
				  case 'j301': 
					 $_SESSION['sql_news'][4]='  jjprice > 300';
					 $_SESSION['show'][4]="j301";
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
				  <a   class="bian" href="list_bbszhiding.php?caozuoid=pt7"><font color="#FFFFFF">板块</font></a>  
				  <a href="?bk=汽车" id="汽车">汽车</a>
				  <a href="?bk=时尚" id="时尚">时尚</a>
				  <a href="?bk=IT" id="IT">IT</a>
				  <a href="?bk=娱乐" id="娱乐">娱乐</a>
				  <a href="?bk=旅游" id="旅游">旅游</a>
				  <a href="?bk=女性" id="女性">女性</a>
				  <a href="?bk=健康" id="健康">健康</a>
				  <a href="?bk=亲子" id="亲子">亲子</a>
				  <a href="?bk=摄影" id="摄影">摄影</a>
				  <a href="?bk=游戏" id="游戏">游戏</a>
				  <a href="?bk=房产" id="房产">房产</a>
				  <a href="?bk=体育" id="体育">体育</a>
				  <a href="?bk=财经" id="财经">财经</a>
				  <a href="?bk=家居" id="家居">家居</a>
				  <a href="?bk=杂谈" id="杂谈">杂谈</a>
				  <a href="?bk=校园" id="校园">校园</a>
				  <a href="?bk=全站" id="全站">全站</a>
				  <a href="?bk=动漫" id="动漫">动漫</a>
				  <a href="?bk=地区" id="地区">地区</a>
				  <a href="?bk=美食" id="美食">美食</a>
				  <a href="?bk=综合" id="综合">综合</a>
				  <a href="?bk=手机" id="手机">手机</a>
				  <a href="?bk=教育" id="教育">教育</a>
			   </div>
			   <div class="bnav">
				  <a class="bian" href="list_bbszhiding.php?caozuoid=pt7"><font color="#FFFFFF">地区</font></a>
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
				  <a class="bian" href="list_bbszhiding.php?caozuoid=pt7"><font color="#FFFFFF">效果</font></a>
				  <a href="?xiaoguo=置顶" id="置顶">置顶</a>
				  <a href="?xiaoguo=加精" id="加精">加精</a>	
			   </div>
			   <div class="bnav">
				  <a  class="bian" href="list_bbszhiding.php?caozuoid=pt7"><font color="#FFFFFF">置顶价格分类</font></a>
				  <a href="?zdprice=50" id="50">0~50元</a>
				  <a href="?zdprice=100" id="100">50~100元</a>	 
				  <a href="?zdprice=150" id="150">100~150元</a>
				  <a href="?zdprice=200" id="200">150~200元</a>
				  <a href="?zdprice=300" id="300">200~300元 </a>
				  <a href="?zdprice=301" id="301">300元以上 </a>
			   </div>
			   <div class="bnav">
				  <a  class="bian" href="list_bbszhiding.php?caozuoid=pt7"><font color="#FFFFFF">加精价格分类</font></a>
				  <a href="?jjprice=j50" id="j50">0~50元</a>
				  <a href="?jjprice=j100" id="j100">50~100元</a>	 
				  <a href="?jjprice=j150" id="j150">100~150元</a>
				  <a href="?jjprice=j200" id="j200">150~200元</a>
				  <a href="?jjprice=j300" id="j300">200~300元 </a>
				  <a href="?jjprice=j301" id="j301">300元以上 </a>
			   </div>

			   <!--fenlei end-->
			   <table class="table_weibo_nav" border="0" cellspacing="0" cellpadding="0" >
				  <tr>
					 <td width="127" style=" padding-left:10px;">选择</td>
					 <td width="108">论坛</td>      
					 <td width="147">板块</td>
					 <td width="340">板块地址</td>
					 <td width="158">效果</td>	
					 <td width="110">置顶价格/天</td>
					 <td width="109">加精价格/周</td>
					 <td width="156">备注</td>
				  </tr>
			   </table>
			   <form action="add_bbszhiding.php" method="post">
				  <table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
					 <?php
						$numq=mysql_query("select id from tb_bbszhiding $m");
						include 'page.php';
						$row=listquery("select * from tb_bbszhiding $m order by id desc limit ".$num.",20");
						foreach ($row as $v){
						?>
						<tr onmousemove="changeTrColor(this)">
						   <td width="127" ><a href="?mid=<?=$v[id]?>" class="renbude" style="width:70px; margin-left:5px; ">加入购物车</a></td>
						   <td width="108"><?=$v['bbs']?></td>   
						   <td width="147"><?=$v['bk']?></td> 
						   <td width="340"><a href="<?=$v['bkadress']?>" target="_blank"><?=$v['bkadress']?></a></td>   
						   <td width="158"><?=$v['xiaoguo']?></td>	
						   <td width="110"><?=$v['zdprice']?> 元</td>
						   <td width="109"><?=$v['jjprice']?> 元</td>
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
				  <?php $sex=query("select count(id) from ordertop where user='$user' and tb='tb_bbszhiding'");$xge=$sex['count(id)'];if($xge==0){$xge=0;}

					 $sexd=listquery("select * from ordertop  where user='$user' and tb='tb_bbszhiding' order by id desc");
					 foreach ($sexd as $ve){
						$vid=$ve[cpID];
						$sexdd=query("select * from tb_bbszhiding  where id='$vid'");
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
						   $zz=query("select * from ordertop where user='$user' and cpID='$cpID' and tb='tb_bbszhiding'");
						   if(!$zz[id]){
							  mysql_query("insert into ordertop (tb,cpID,user) values ('tb_bbszhiding','$cpID','$user')");
							  exit("<script>window.location.href='list_bbszhiding.php?caozuoid=pt7';</script>");
						   }else{
							  exit("<script>window.history.go(-1);</script>");
						   } 
						}
					 ?>
				  </body>
			   </html>
