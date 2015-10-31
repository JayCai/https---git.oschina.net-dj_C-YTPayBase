<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>微博资源_<?=$sg['sitename']?></title>
	  <meta name="keywords" content="<?=$sg['keywords']?>" />
	  <meta name="description" content="<?=$sg['description']?>" />
	  <link href="css/css.css" rel="stylesheet" type="text/css" />
	  <link href="foot.css" rel="stylesheet" type="text/css" />
	  <link rel = "Shortcut Icon" href="favicon.ico" /> 
	  <script type="text/javascript" src="js/index.js"></script> 
   </head>

   <body>
	  <?php include 'head.php';?>
	  <form action="so_weibo.php" method="get">
		 <div class="serach">
			<div class="serachr2"><input name="so"  id="so" type="text"  style="line-height:40px; color:#CCCCCC; font-size:14px;"  value="微博名称/链接" onclick="qingchu();" /></div>  
			<div class="serachr"><input name="submit_weibo" type="submit" class="seranniu" value="搜索" /></div>
		 </div>
	  </form>
	  <?php
		 $weibo=$_GET['weibo'];
		 $fenlei=$_GET['fenlei'];
		 $area=$_GET['area'];
		 $fensi=$_GET['fensi'];
		 $zhifa=$_GET['zhifa'];
		 $zhuanfa=$_GET['zhuanfa'];

		 if($weibo){
			$_SESSION['sql_news'][0]='  weibo="'.$weibo.'"';
			$_SESSION['show'][0]=$weibo;
		 }
		 if($fenlei){
			$_SESSION['sql_news'][1]='  fenlei="'.$fenlei.'"';
			$_SESSION['show'][1]=$fenlei;
		 }
		 if($area){
			$_SESSION['sql_news'][2]='  area="'.$area.'"';
			$_SESSION['show'][2]=$area;
		 }


		 if($fensi){
			switch($fensi){ 
			   case 10: 
				  $_SESSION['sql_news'][3]='  fensi <=10';
				  $_SESSION['show'][3]="10";
				  break; 
			   case 30: 
				  $_SESSION['sql_news'][3]='  fensi between 10 and 30';	
				  $_SESSION['show'][3]="30";
				  break; 	
			   case 50: 
				  $_SESSION['sql_news'][3]='  fensi between 30 and 50';	
				  $_SESSION['show'][3]="50";
				  break; 	
			   case 100: 
				  $_SESSION['sql_news'][3]='  fensi between 50 and 100';	
				  $_SESSION['show'][3]="100";
				  break; 	
			   case 200: 
				  $_SESSION['sql_news'][3]='  fensi between 100 and 200';	
				  $_SESSION['show'][3]="200";
				  break; 	
			   case 300: 
				  $_SESSION['sql_news'][3]='  fensi between 200 and 300';	
				  $_SESSION['show'][3]="300";
				  break; 	
			   case 400: 
				  $_SESSION['sql_news'][3]='  fensi between 300 and 400';	
				  $_SESSION['show'][3]="400";
				  break; 	
			   case 500: 
				  $_SESSION['sql_news'][3]='  fensi between 400 and 500';	
				  $_SESSION['show'][3]="500";
				  break; 	
			   case 600: 
				  $_SESSION['sql_news'][3]='  fensi between 500 and 600';	
				  $_SESSION['show'][3]="600";
				  break; 	
			   case 800: 
				  $_SESSION['sql_news'][3]='  fensi between 600 and 800';	
				  $_SESSION['show'][3]="800";
				  break; 	
			   case 801: 
				  $_SESSION['sql_news'][3]='  fensi > 800';
				  $_SESSION['show'][3]="801";
				  break; 	
			   } 
			}

			if($zhifa){
			   switch($zhifa){ 
				  case 'f10': 
					 $_SESSION['sql_news'][4]='  zhifa <=10';
					 $_SESSION['show'][4]="f10";
					 break; 
				  case 'f30': 
					 $_SESSION['sql_news'][4]='  zhifa between 10 and 30';	
					 $_SESSION['show'][4]="f30";
					 break; 	
				  case 'f50': 
					 $_SESSION['sql_news'][4]='  zhifa between 30 and 50';	
					 $_SESSION['show'][4]="f50";
					 break; 	
				  case 'f100': 
					 $_SESSION['sql_news'][4]='  zhifa between 50 and 100';	
					 $_SESSION['show'][4]="f100";
					 break; 	
				  case 'f200': 
					 $_SESSION['sql_news'][4]='  zhifa between 100 and 200';	
					 $_SESSION['show'][4]="f200";
					 break; 	
				  case 'f400': 
					 $_SESSION['sql_news'][4]='  zhifa between 200 and 400';	
					 $_SESSION['show'][4]="f400";
					 break; 	
				  case 'f600': 
					 $_SESSION['sql_news'][4]='  zhifa between 400 and 600';	
					 $_SESSION['show'][4]="f600";
					 break; 	
				  case 'f800': 
					 $_SESSION['sql_news'][4]='  zhifa between 600 and 800';	
					 $_SESSION['show'][4]="f800";
					 break; 	
				  case 'f1000': 
					 $_SESSION['sql_news'][4]='  zhifa between 800 and 1000';	
					 $_SESSION['show'][4]="f1000";
					 break; 	
				  case 'f1500': 
					 $_SESSION['sql_news'][4]='  zhifa between 1000 and 1500';	
					 $_SESSION['show'][4]="f1500";
					 break; 	
				  case 'f1501': 
					 $_SESSION['sql_news'][4]='  zhifa >1500';	
					 $_SESSION['show'][4]="f1501";
					 break; 	
				  } 
			   }

			   if($zhuanfa){
				  switch($zhuanfa){ 
					 case 'z10': 
						$_SESSION['sql_news'][5]='  zhuanfa <=10';
						$_SESSION['show'][5]="z10";
						break; 
					 case 'z30': 
						$_SESSION['sql_news'][5]='  zhuanfa between 10 and 30';	
						$_SESSION['show'][5]="z30";
						break; 	
					 case 'z50': 
						$_SESSION['sql_news'][5]='  zhuanfa between 30 and 50';	
						$_SESSION['show'][5]="z50";
						break; 	
					 case 'z100': 
						$_SESSION['sql_news'][5]='  zhuanfa between 50 and 100';	
						$_SESSION['show'][5]="z100";
						break; 	
					 case 'z200': 
						$_SESSION['sql_news'][5]='  zhuanfa between 100 and 200';	
						$_SESSION['show'][5]="z200";
						break; 	
					 case 'z400': 
						$_SESSION['sql_news'][5]='  zhuanfa between 200 and 400';	
						$_SESSION['show'][5]="z400";
						break; 	
					 case 'z600': 
						$_SESSION['sql_news'][5]='  zhuanfa between 400 and 600';	
						$_SESSION['show'][5]="z600";
						break; 	
					 case 'z800': 
						$_SESSION['sql_news'][5]='  zhuanfa between 600 and 800';	
						$_SESSION['show'][5]="z800";
						break; 	
					 case 'z1000': 
						$_SESSION['sql_news'][5]='  zhuanfa between 800 and 1000';	
						$_SESSION['show'][5]="z1000";
						break; 	
					 case 'z1500': 
						$_SESSION['sql_news'][5]='  zhuanfa between 1000 and 1500';	
						$_SESSION['show'][5]="z1500";
						break; 	
					 case 'z1501': 
						$_SESSION['sql_news'][5]='  zhuanfa >1500';	
						$_SESSION['show'][5]="z1501";
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
					 <a   class="bian" href="list_weibo.php?caozuoid=pt16"><font color="#FFFFFF">微博</font></a>
					 <a href="?weibo=新浪" id="新浪">新浪</a>
					 <a href="?weibo=腾讯" id="腾讯">腾讯</a>  
				  </div>

				  <div class="bnav">
					 <a   class="bian" href="list_weibo.php?caozuoid=pt16"><font color="#FFFFFF">分类</font></a>  
					 <a href="?fenlei=段子手" id="段子手">段子手</a>
					 <a href="?fenlei=地区号" id="地区号">地区号</a>
					 <a href="?fenlei=美容护肤达人" id="美容护肤达人">美容护肤达人</a>
					 <a href="?fenlei=IT/互联网名人" id="IT/互联网名人">IT/互联网名人</a>
					 <a href="?fenlei=新闻/资讯" id="新闻/资讯">新闻/资讯</a>
					 <a href="?fenlei=记者" id="记者">记者</a>
					 <a href="?fenlei=主持人" id="主持人">主持人</a>
					 <a href="?fenlei=网络红人" id="网络红人">网络红人</a>
					 <a href="?fenlei=旅游/摄影" id="旅游/摄影">旅游/摄影</a>
					 <a href="?fenlei=评论人" id="评论人">评论人</a>
					 <a href="?fenlei=歌手" id="歌手">歌手</a>
					 <a href="?fenlei=明星" id="明星">明星</a>
					 <a href="?fenlei=娱乐/影视" id="娱乐/影视">娱乐/影视</a>
					 <a href="?fenlei=创意/生活" id="创意/生活">创意/生活</a>
					 <a href="?fenlei=搞笑/笑话" id="搞笑/笑话">搞笑/笑话</a>
					 <a href="?fenlei=时尚/女性" id="时尚/女性">时尚/女性</a>
					 <a href="?fenlei=财经" id="财经">财经</a>
					 <a href="?fenlei=汽车" id="汽车">汽车</a>
					 <a href="?fenlei=科技/数码" id="科技/数码">科技/数码</a>
					 <a href="?fenlei=校园" id="校园">校园</a>
					 <a href="?fenlei=母婴/育儿" id="母婴/育儿">母婴/育儿</a>
					 <a href="?fenlei=教育" id="教育">教育</a>
					 <a href="?fenlei=医疗/健康" id="医疗/健康">医疗/健康</a>
					 <a href="?fenlei=家居" id="家居">家居</a>
					 <a href="?fenlei=游戏/动漫" id="游戏/动漫">游戏/动漫</a>
					 <a href="?fenlei=家电" id="家电">家电</a>
					 <a href="?fenlei=美食" id="美食">美食</a>
					 <a href="?fenlei=建材" id="建材">建材</a>
					 <a href="?fenlei=房产" id="房产">房产</a>
					 <a href="?fenlei=体育" id="体育">体育</a>
					 <a href="?fenlei=综合" id="综合">综合</a>
					 <a href="?fenlei=电商" id="电商">电商</a>
					 <a href="?fenlei=文学" id="文学">文学</a>
					 <a href="?fenlei=奢侈品" id="奢侈品">奢侈品</a>
					 <a href="?fenlei=婚纱" id="婚纱">婚纱</a>
					 <a href="?fenlei=公益" id="公益">公益</a>
					 <a href="?fenlei=宠物" id="宠物">宠物</a>
					 <a href="?fenlei=语录" id="语录">语录</a>
					 <a href="?fenlei=英语" id="英语">英语</a>
					 <a href="?fenlei=购物" id="购物">购物</a>
					 <a href="?fenlei=音乐" id="音乐">音乐</a>
					 <a href="?fenlei=百科" id="百科">百科</a>
					 <a href="?fenlei=情感" id="情感">情感</a>
					 <a href="?fenlei=星座" id="星座">星座</a>
				  </div>


				  <div class="bnav">
					 <a   class="bian" href="list_weibo.php?caozuoid=pt16"><font color="#FFFFFF">地区</font></a>
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
					 <a  class="bian" href="list_weibo.php?caozuoid=pt16"><font color="#FFFFFF">粉丝数</font></a>
					 <a href="?fensi=10" id="10">小于10万</a>
					 <a href="?fensi=30" id="30">10~30万</a>
					 <a href="?fensi=50" id="50">30~50万</a>
					 <a href="?fensi=100" id="100">50~100万</a>
					 <a href="?fensi=200" id="200">100万~200万</a>
					 <a href="?fensi=300" id="300">200~300万 </a>
					 <a href="?fensi=400" id="400">300~400万</a>
					 <a href="?fensi=500" id="500">400~500万</a>
					 <a href="?fensi=600" id="600">500~600万</a>
					 <a href="?fensi=800" id="800">600~800万</a>
					 <a href="?fensi=801" id="801">大于800万</a>
				  </div>
				  <div class="bnav">
					 <a  class="bian" href="list_weibo.php?caozuoid=pt16"><font color="#FFFFFF">直发价格</font></a>
					 <a href="?zhifa=f10" id="f10">0~10元</a>
					 <a href="?zhifa=f30" id="f30">10~30元</a>	
					 <a href="?zhifa=f50" id="f50">30~50元</a>
					 <a href="?zhifa=f100" id="f100">50~100元</a>
					 <a href="?zhifa=f200" id="f200">100~200元</a>
					 <a href="?zhifa=f400" id="f400">200~400元</a>
					 <a href="?zhifa=f600" id="f600">400~600元 </a>
					 <a href="?zhifa=f800" id="f800">600~800元 </a>
					 <a href="?zhifa=f1000" id="f1000">800~1000元</a>
					 <a href="?zhifa=f1500" id="f1500">1000~1500元</a>
					 <a href="?zhifa=f1501" id="f1501">1500元以上</a>

				  </div>
				  <div class="bnav">
					 <a  class="bian" href="list_weibo.php?caozuoid=pt16"><font color="#FFFFFF">转发价格</font></a>
					 <a href="?zhuanfa=z10" id="z10">0~10元</a>
					 <a href="?zhuanfa=z30" id="z30">10~30元</a>	 
					 <a href="?zhuanfa=z50" id="z50">30~50元</a>
					 <a href="?zhuanfa=z100" id="z100">50~100元</a>	 
					 <a href="?zhuanfa=z200" id="z200">100~200元</a>
					 <a href="?zhuanfa=z400" id="z400">200~400元</a>	 
					 <a href="?zhuanfa=z600" id="z600">400~600元</a>
					 <a href="?zhuanfa=z800" id="z800">600~800元 </a>	 
					 <a href="?zhuanfa=z1000" id="z1000">800~1000元</a>
					 <a href="?zhuanfa=z1500" id="z1500">1000~1500元</a>	 
					 <a href="?zhuanfa=z1501" id="z1501">1500元以上</a>
				  </div>
				  <!--fenlei end-->
				  <table class="table_weibo_nav" border="0" cellspacing="0" cellpadding="0" >
					 <tr>
						<td width="120" style=" padding-left:10px;">选择</td>
						<td width="115">微博</td>      
						<td width="180">微博名称</td>
						<td width="102">分类</td> 
						<td width="310" style="text-align:center;">链接</td>	
						<td width="130">粉丝数/万</td>
						<td width="145">直发报价</td>
						<td width="149">转发报价</td>
					 </tr>
				  </table>
				  <form action="add_weibo.php" method="get">
					 <table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
						<?php
						   $numq=mysql_query("select id from tb_weibo $m");
						   include 'page.php';
						   $row=listquery("select * from tb_weibo $m order by id desc limit ".$num.",20");
						   foreach ($row as $v){
						   ?>
						   <tr onmousemove="changeTrColor(this)">
							  <td width="140" ><a href="?mid=<?=$v[id]?>" class="renbude" style="width:70px; margin-left:5px; ">加入购物车</a></td>
							  <td width="125"><?=$v['weibo']?></td>      
							  <td width="183"><?=$v['weiboname']?></td> 
							  <td width="112"><?=$v['fenlei']?></td> 
							  <td width="340" style="text-align:center;"><a href="<?=$v['link']?>" target="_blank"><?=$v['link']?></a></td>	
							  <td width="130"><?=$v['fensi']?></td>
							  <td width="145"><?=$v['zhifa']?> 元</td>
							  <td width="149"><?=$v['zhuanfa']?> 元</td>
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
					 <?php $sex=query("select count(id) from ordertop where user='$user' and tb='tb_weibo'");$xge=$sex['count(id)'];if($xge==0){$xge=0;}

						$sexd=listquery("select * from ordertop  where user='$user' and tb='tb_weibo' order by id desc");
						foreach ($sexd as $ve){
						   $vid=$ve[cpID];
						   $sexdd=query("select * from tb_weibo  where id='$vid'");
						   $showxuan.='<a>'.$sexdd['weiboname'].'<a>'.'<a href="?del_id='.$ve[id].'"><font color=blue>点击删除</font></a>';
							  }

							  $del_id=$_GET['del_id'];
							  if($del_id){
								 mysql_query("delete from ordertop where id='$del_id'");
								 exit("<script>window.location.href='list_weibo.php?caozuoid=pt16';</script>");	
							  }
						   ?>
						   <?php include 'foot.php';?>
						</form>


						<?php 
						   $cpID=$_GET['mid'];//产品IP
						   if($cpID){
							  $zz=query("select * from ordertop where user='$user' and cpID='$cpID' and tb='tb_weibo'");
							  if(!$zz[id]){
								 mysql_query("insert into ordertop (tb,cpID,user) values ('tb_weibo','$cpID','$user')");
								 exit("<script>window.location.href='list_weibo.php?caozuoid=pt16';</script>");
							  }else{
								 exit("<script>window.history.go(-1);</script>");
							  } 
						   }
						?>

					 </body>
				  </html>
