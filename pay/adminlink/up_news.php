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
$row=query("select * from tb_news where id='$id'");
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
			<td width="150">媒体</td>
			<td width="356">
				<select name="meiti">
				  <option value="<?=$row[meiti]?>"><?=$row[meiti]?></option>		
				  <option value="大型门户">大型门户</option>
				  <option value="中小门户">中小门户</option>
				  <option value="地方门户">地方门户</option>		
				</select>
			</td>
			<td width="405"></td>
		  </tr>
		    <tr>
			<td>媒体名称</td>
			<td><input name="mtname" type="text" value="<?=$row[mtname]?>"  /></td>
			<td></td>
		  </tr>
		   <tr>
			<td width="150">入口</td>
			<td width="356">
				<select name="rukou">
				  <option value="<?=$row[rukou]?>"><?=$row[rukou]?></option>
				  <option value="有">有</option>
				  <option value="无">无</option>
				  <option value="不确定">不确定</option>
				</select>
			</td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td>分类</td>
			<td>
				<select name="fenlei">
				<option value="<?=$row[fenlei]?>"><?=$row[fenlei]?></option>
				<option value="新闻">新闻</option>
				<option value="体育">体育</option>
				<option value="娱乐">娱乐</option>
				<option value="财经">财经</option>
				<option value="科技">科技</option>
				<option value="女性">女性</option>
				<option value="健康">健康</option>
				<option value="房产">房产</option>
				<option value="教育">教育</option>
				<option value="家居">家居</option>
				<option value="汽车">汽车</option>
				<option value="环保">环保</option>
				<option value="育儿">育儿</option>
				<option value="旅游">旅游</option>
				<option value="游戏">游戏</option>
				<option value="公益">公益</option>
				<option value="时尚">时尚</option>
				<option value="电子商务">电子商务</option>
				<option value="服装">服装</option>
				<option value="金融">金融</option>
				<option value="资讯">资讯</option>
				<option value="美容">美容</option>
				<option value="法律">法律</option>
				<option value="通信">通信</option>
				<option value="商讯">商讯</option>
				<option value="文化">文化</option>
				<option value="家电数码">家电数码</option>
				<option value="工业资讯">工业资讯</option>
				<option value="购物">购物</option>
				<option value="食品">食品</option>
				<option value="生活">生活</option>
				<option value="消费">消费</option>
				<option value="地方">地方</option>
				<option value="其他">其他</option>
				</select>	
			</td>
			<td></td>
		  </tr>
		   <tr>
			<td>地区</td>
			<td>
			<select name="area">
				<option value="<?=$row[area]?>"><?=$row[area]?></option>
				  <?php
				  $area=listquery("select * from city order by id asc");
				  foreach ($area as $v){			
				  ?>
				  <option value="<?=$v['cityname']?>"><?=$v['cityname']?></option>
				  <?php
				  }
				  ?>
				</select>	
			</td>
			<td></td>
		  </tr>
		  <tr>
			<td>链接</td>
			<td><input name="link" type="text" size="40" value="<?=$row[link]?>" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td>会员价</td>
			<td><input name="price" type="text" style="width:60px;" value="<?=$row[price]?>" /> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>可否带链接</td>
			<td><input name="kedai" type="text"  size="40" value="<?=$row[kedai]?>" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td>是否收录</td>
			<td><input name="shoulu" type="text"  size="40" value="<?=$row[shoulu]?>" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td>备注</td>
			<td><input name="beizhu" type="text"  size="40" maxlength="20" value="<?=$row[beizhu]?>" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td><input name="submit" type="submit" value="修改" class="reganniu" /></td>
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


<?php
if($_POST['submit']){

$meiti=$_POST['meiti'];
$mtname=$_POST['mtname'];
$rukou=$_POST['rukou'];
$fenlei=$_POST['fenlei'];
$area=$_POST['area'];

$link=$_POST['link'];
$link=str_replace("http://","",$link);
$link="http://".$link;

$price=$_POST['price'];
$kedai=$_POST['kedai'];
$shoulu=$_POST['shoulu'];
$beizhu=$_POST['beizhu'];




mysql_query("update tb_news set meiti='$meiti',mtname='$mtname',rukou='$rukou',fenlei='$fenlei',area='$area',link='$link',price='$price',kedai='$kedai',shoulu='$shoulu',beizhu='$beizhu' where id='$id'");

   exit("<script>alert('修改成功!');window.location.href='list_news.php';</script>");

}


?>
