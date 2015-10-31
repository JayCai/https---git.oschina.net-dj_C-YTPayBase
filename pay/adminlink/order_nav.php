    <table width="1183" height="61" border="0" cellpadding="0" cellspacing="0" class="order">
	  <tr>
		<td width="130"><a href="order_news.php?caozuoid=news" id="news">新闻资源订单</a></td>
		<td width="128"><a href="order_weibo.php?caozuoid=weibo" id="weibo">微博资源订单</a></td>
		<td width="135"><a href="order_weixin.php?caozuoid=weixin" id="weixin">微信资源订单</a></td>
		<td width="127"><a href="order_bbs.php?caozuoid=bbs" id="bbs">论坛套餐订单</a></td>
		<td width="146"><a href="order_bbszhiding.php?caozuoid=bbszhiding" id="bbszhiding">论坛置顶加精订单</a></td>
		<td width="131"><a href="order_bbsdingtie.php?caozuoid=bbsdingtie" id="bbsdingtie">论坛水军顶贴订单</a></td>
		<td width="116"><a href="order_zonghe.php?caozuoid=zonghe" id="zonghe">综合套餐订单</a></td>
		<td width="112"><a href="order_newstc.php?caozuoid=newstc" id="newstc">新闻套餐订单</a></td>
		<td width="123"><a href="order_dxwenzhang.php?caozuoid=dxwenzhang" id="dxwenzhang">代写文章订单</a></td>
		<td width="12"></td>
	  </tr>	 
	</table>
	<?php 	
	$type=$_GET['type'];
	if($type=='未收单'){
	$shaiwei='class="shai"';
	$sql="where type='未收单'";
	}
	if($type=='收单'){
	$shaiyi='class="shai"';
	$sql="where type='收单'";
	}
	
	if($type=='退单'){
	$shaitui='class="shai"';
	$sql="where type='退单'";
	}
	
	if($type=='交易成功'){
	$shaijiao='class="shai"';
	$sql="where type='交易成功'";
	}
	
	$tiaojian=$_GET['tiaojian'];
	$xuanze=$_GET['xuanze'];
	if($xuanze=='1'){	
	$sql="where orderID='$tiaojian'";
	}
	if($xuanze=='2'){	
	$sql="where user='$tiaojian'";
	}
	?>	
	<table width="579" height="33" border="0" cellpadding="0" cellspacing="0"  style="margin-top:10px;">
	
	   <tr>
		<td width="91" height="31"><a href="?type=未收单&caozuoid=<?=$caozuoid?>" <?=$shaiwei?>>未收单</a></td>
		<td width="91"><a href="?type=收单&caozuoid=<?=$caozuoid?>" <?=$shaiyi?>>已收单</a></td>	
		<td width="91"><a href="?type=退单&caozuoid=<?=$caozuoid?>" <?=$shaitui?>>已退单</a></td>	
		<td width="91"><a href="?type=交易成功&caozuoid=<?=$caozuoid?>" <?=$shaijiao?>>交易成功</a></td>
		<td width="91">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
		<input name="caozuoid" type="text" value="<?=$caozuoid?>" style="display:none;"/>
		<input name="tiaojian" type="text" />
		<select name="xuanze">
		 <option value="1">订单编号</option>
		 <option value="2">用户名</option>
		</select>
		<input name="submitfind" type="submit" value="查询" class="reganniu" />
		</form>
		</td>		
	  </tr>
</table>
