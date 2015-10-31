<?php error_reporting(0);?>
<script charset="utf-8" src="./../kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="./../kindeditor/lang/zh_CN.js"></script>

<script>
   var editor;
   KindEditor.ready(function(K) {
		 editor = K.create('textarea[name="content"]', { })}
   );
</script>


<script>
   var editor;
   KindEditor.ready(function(K) {
		 editor = K.create('textarea[name="content_zhifa"]', { })}
   );
</script>


<script>
   var editor;
   KindEditor.ready(function(K) {
		 editor = K.create('textarea[name="content_chang"]', { })}
   );
</script>


<div class="topline">
   <div class="toplinenav">
	  <div class="topline1">易推网络 - 超低价、高效率自媒体资源平台</div>
	  <div class="topline2">	
		 <a href="./chongzhi.php">立即充值</a>
		 <a href="./order_news.php?caozuoid=news">订单查询</a>
		 <?php	
			include '../config.php';	
			include '../function.php';		  
			$user=$_COOKIE['member'];
			$rmbd=query("select * from user where user='$user'"); 	  

			if($user){
			   echo '<a href=./main.php>您好 '.$user.'</a><a>剩余 '.$rmbd[rmb].' 元</a><a href=./out.php>退出登录</a>';
			}else{
			   echo '<a href="./index.php">登录</a><a href="./reg.php">注册</a>';
			}	

			$g="select * from seo where id=1";
			$gg=mysql_query($g);
			$sg=mysql_fetch_array($gg);	  
			$myuser=query("select * from user where user='$user'");
		 ?>  	   
	  </div>
   </div>
</div>
<div class="top">
   <div class="top1"><img src="./../<?=$sg['logo']?>" height="80" width="200" border="0" /></div>
   <div class="top2">论坛发帖，新闻软文，微博红人，微信公众号推广，综合营销。</div>
   <div class="top3">
	  <div class="top3s">客户QQ：800003659</div>
	  <div class="top3s">咨询电话：400-059-9224</div>
   </div>
</div>
<div class="nav">
   <div class="navbao">
	  <a href="<?=$sg['link']?>" target="_blank">网站首页</a>

	  <a href="./../list_news.php?caozuoid=pt1">新闻资源</a>	
	  <a href="./../list_weibo.php?caozuoid=pt16">微博资源</a>	
	  <a href="./../list_weixin.php?caozuoid=pt9">微信资源</a>	
	  <a href="./../list_bbs.php?caozuoid=pt8">论坛套餐</a>	
	  <a href="./../list_bbszhiding.php?caozuoid=pt7">论坛置顶加精</a>	
	  <a href="./../list_bbsdingtie.php?caozuoid=pt6">论坛水军顶贴</a>	
	  <a href="./../list_zonghe.php?caozuoid=pt5">综合套餐</a>	
	  <a href="./../list_newstc.php?caozuoid=pt4">新闻套餐</a>	
	  <a href="./main.php">会员中心</a>	
   </div>
</div>

</div>


