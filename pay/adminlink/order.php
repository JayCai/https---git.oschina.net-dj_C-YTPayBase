<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>管理中心_易推网络</title>
	  <link rel="stylesheet" type="text/css" href="../css/css.css" />
	  <link rel="stylesheet" type="text/css" href="css.css" />
	  <style>
		 .circle { 
			   width: 10px; 
			   height: 10px; 
			   background-color: #FF0000; 
			   -webkit-border-radius: 5px;
			   padding-left:5px; padding-right:5px;
			   color:white;
		 } 
	  </style>
   </head>

   <body>
	  <?php
		 include 'head.php';
		 function ati($tb){
			$numl=mysql_query("select id,type from $tb where type='未收单'");
			echo $num = mysql_num_rows($numl); //统计  
		 }
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
			   <!--核心代码-->	
			   <table width="1183" height="61" border="0" cellpadding="0" cellspacing="0" class="order">
				  <tr>
					 <td width="130"><a href="order_news.php?caozuoid=news" id="news">新闻资源订单<sup class="circle"><?=ati('order_news')?></sup></a></td>
					 <td width="128"><a href="order_weibo.php?caozuoid=weibo" id="weibo">微博资源订单<sup class="circle"><?=ati('order_weibo')?></sup></a></td>
					 <td width="135"><a href="order_weixin.php?caozuoid=weixin" id="weixin">微信资源订单<sup class="circle"><?=ati('order_weixin')?></sup></a></td>
					 <td width="127"><a href="order_bbs.php?caozuoid=bbs" id="bbs">论坛套餐订单<sup class="circle"><?=ati('order_bbs')?></sup></a></td>
					 <td width="146"><a href="order_bbszhiding.php?caozuoid=bbszhiding" id="bbszhiding">论坛置顶加精订单<sup class="circle"><?=ati('order_bbszhiding')?></sup></a></td>
					 <td width="131"><a href="order_bbsdingtie.php?caozuoid=bbsdingtie" id="bbsdingtie">论坛水军顶贴订单<sup class="circle"><?=ati('order_bbsdingtie')?></sup></a></td>
					 <td width="116"><a href="order_zonghe.php?caozuoid=zonghe" id="zonghe">综合套餐订单<sup class="circle"><?=ati('order_zonghe')?></sup></a></td>
					 <td width="112"><a href="order_newstc.php?caozuoid=newstc" id="newstc">新闻套餐订单<sup class="circle"><?=ati('order_newstc')?></sup></a></td>
					 <td width="123"><a href="order_dxwenzhang.php?caozuoid=dxwenzhang" id="dxwenzhang">代写文章订单<sup class="circle"><?=ati('order_dxwenzhang')?></sup></a></td>
					 <td width="12"></td>
				  </tr>	 
			   </table>

			   <!--核心代码-->
			</div>
			<!--right-->
		 </div>
	  </div>

	  <?php
		 include 'foot.php';
	  ?>

   </body>
</html>

