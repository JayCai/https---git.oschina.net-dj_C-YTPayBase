<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心_易推网络</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
</head>

<body>
<?php
include 'head.php';
$id=$_GET[id];
$row=query("select * from tb_weibo where id='$id'");
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
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<table width="911" height="305" border="0" cellpadding="0" cellspacing="0" class="addtable">
		  <tr>
			<td width="150">修改</td>
			<td width="356"></td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td width="150">微博</td>
			<td width="356">
					<select name="weibo">
					  <option value="<?=$row[weibo]?>"><?=$row[weibo]?></option>
					  <option value="新浪">新浪</option>
					  <option value="腾讯">腾讯</option>				 
					</select>
			</td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td>分类</td>
			<td>
					<select name="fenlei">									 
					<option value="<?=$row[fenlei]?>"><?=$row[fenlei]?></option>
					<option value="段子手">段子手</option>
					<option value="地区号">地区号</option>
					<option value="美容护肤达人">美容护肤达人</option>
					<option value="IT/互联网名人">IT/互联网名人</option>
					<option value="新闻/资讯">新闻/资讯</option>
					<option value="记者">记者</option>
					<option value="主持人">主持人</option>
					<option value="网络红人">网络红人</option>
					<option value="旅游/摄影">旅游/摄影</option>
					<option value="评论人">评论人</option>
					<option value="歌手">歌手</option>
					<option value="明星">明星</option>
					<option value="娱乐/影视">娱乐/影视</option>
					<option value="创意/生活">创意/生活</option>
					<option value="搞笑/笑话">搞笑/笑话</option>
					<option value="时尚/女性">时尚/女性</option>
					<option value="财经">财经</option>
					<option value="汽车">汽车</option>
					<option value="科技/数码">科技/数码</option>
					<option value="校园">校园</option>
					<option value="母婴/育儿">母婴/育儿</option>
					<option value="教育">教育</option>
					<option value="医疗/健康">医疗/健康</option>
					<option value="家居">家居</option>
					<option value="游戏/动漫">游戏/动漫</option>
					<option value="家电">家电</option>
					<option value="美食">美食</option>
					<option value="建材">建材</option>
					<option value="房产">房产</option>
					<option value="体育">体育</option>
					<option value="综合">综合</option>
					<option value="电商">电商</option>
					<option value="文学">文学</option>
					<option value="奢侈品">奢侈品</option>
					<option value="婚纱">婚纱</option>
					<option value="公益">公益</option>
					<option value="宠物">宠物</option>
					<option value="语录">语录</option>
					<option value="英语">英语</option>
					<option value="购物">购物</option>
					<option value="音乐">音乐</option>
					<option value="百科">百科</option>
					<option value="情感">情感</option>
					<option value="星座">星座</option>				 
				</select>	
			</td>
			<td></td>
		  </tr>
		  <tr>
			<td>微博名称</td>
			<td><input name="weiboname" type="text"  value="<?=$row[weiboname]?>" /></td>
			<td></td>
		  </tr>
		    <tr>
			<td>地区</td>
			<td><select name="area">
			      <option value="<?=$row[area]?>"><?=$row[area]?></option>
				  <?php
				  $area=listquery("select * from city order by id asc");
				  foreach ($area as $v){			
				  ?>
				  <option value="<?=$v['cityname']?>"><?=$v['cityname']?></option>
				  <?php
				  }
				  ?>
				</select> </td>
			<td></td>
		  </tr>		
		  <tr>
			<td>链接</td>
			<td><input name="link" type="text"  size="40" value="<?=$row[link]?>" /> </td>
			<td></td>
		  </tr>
		  <tr>
			<td>粉丝数</td>
			<td><input name="fensi" type="text"  value="<?=$row[fensi]?>" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td>直发报价</td>
			<td><input name="zhifa" type="text"  value="<?=$row[zhifa]?>" /> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>转发报价</td>
			<td><input name="zhuanfa" type="text"  value="<?=$row[zhuanfa]?>" /> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td></td>
			<td></td>
		  </tr>
		</table>
		</form>
	</div>
  <!--right-->
  </div>
</div>

<?php
include 'foot.php';
?>

</body>
</html>

