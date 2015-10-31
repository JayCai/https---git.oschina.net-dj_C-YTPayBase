<script type="text/javascript">
   function changeTrColor(obj){    
		 var _table=obj.parentNode;
		 for( var i=0; i<_table.rows.length; i++ ){
			   _table.rows[i].style.backgroundColor="";
		 }    
		 obj.style.backgroundColor="#EEEEEE";
   }
</script>

<script charset="utf-8" src="./kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="./kindeditor/lang/zh_CN.js"></script>

<script>
   var editor;
   KindEditor.ready(function(K) { editor = K.create('textarea[name="content"]', {})});
</script>


<script>
   var editor;
   KindEditor.ready(
	  function(K) { editor = K.create('textarea[name="content_zhifa"]', {})}
   );
</script>


<script>
   var editor;
   KindEditor.ready(
	  function(K) { editor = K.create('textarea[name="content_chang"]', { })}
   );
</script>

<script>
   function qingchu() {
		 document.getElementById("so").value="";
   }
   function gotan(){
		 document.getElementById("dxx").style.display = "block";
   }
</script>

<div class="topline">
   <div class="toplinenav">
	  <div class="topline1">易推网络-在线下单 - 超低价、高效率自媒体资源平台</div>

	  <div class="topline2">	
		 <a href="./user/chongzhi.php">立即充值</a>

		 <a href="./user/order_news.php?caozuoid=news">订单查询</a>

		 <?php
			include 'config.php';
			include 'function.php';
			$user=$_COOKIE['member'];

			//if(empty($user)){
			//   exit("<script>alert('请登录!');window.location.href='./user/';</script>");
			//   exit;
			//}

			$rmbd=query("select * from user where user='$user'"); 

			if($user){
			   echo '<a href=./user/main.php>您好 '.$user.'</a><a>剩余 '.$rmbd[rmb].' 元</a><a href=./user/out.php>退出登录</a>';
			}else{
			   echo '<a href="./user/index.php">登录</a><a href="./user/reg.php">注册</a>';
			}

			session_start();  
			header("Cache-control: private"); 	
		 ?>  	   
	  </div>
   </div>
</div>
<div class="top">
   <div class="top1"><img src="./<?=$sg['logo']?>" height="100" width="200" border="0" /></div>

   <div class="top2">论坛发帖，新闻软文，微博红人，微信公众号推广，综合营销。</div>
   <div class="top3">
	  <div class="top3s">客户QQ：800003659</div>
	  <div class="top3s">咨询电话：400-059-9224</div>
   </div>
</div>
<div class="nav">
   <div class="navbao">     
	  <a href="<?=$sg['link']?>" target="_blank">网站首页</a>

	  <a href="./list_news.php?caozuoid=pt1">新闻资源</a>	
	  <a href="./list_weibo.php?caozuoid=pt16">微博资源</a>	
	  <a href="./list_weixin.php?caozuoid=pt9">微信资源</a>	
	  <a href="./list_bbs.php?caozuoid=pt8">论坛套餐</a>	
	  <a href="./list_bbszhiding.php?caozuoid=pt7">论坛置顶加精</a>	
	  <a href="./list_bbsdingtie.php?caozuoid=pt6">论坛水军顶贴</a>	
	  <a href="./list_zonghe.php?caozuoid=pt5">综合套餐</a>	
	  <a href="./list_newstc.php?caozuoid=pt4">新闻套餐</a>	
	  <a href="./user/main.php">会员中心</a>	
   </div>

</div>

<div class="navnext">  
   <a href="./daochu.php" style="color:#ffffff;
	  background-color: #FF0000;
	  height:30px;
	  line-height:30px;
	  margin-top:5px;
	  margin-left:0px;
	  padding-left:10px;
	  padding-right:10px;">下载报价单</a>
</div>

