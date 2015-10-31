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
			<td width="150">添加论坛置顶加精资源产品</td>
			<td width="356"></td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td width="150">论坛</td>
			<td width="356">
				<input name="bbs" type="text" />
			</td>
			<td width="405"></td>
		  </tr>
		  <tr>
			<td>板块</td>
			<td>
				<select name="bk">
				<option value="汽车">汽车</option>
				<option value="时尚">时尚</option>
				<option value="IT">IT</option>
				<option value="娱乐">娱乐</option>
				<option value="旅游">旅游</option>
				<option value="女性">女性</option>
				<option value="健康">健康</option>
				<option value="亲子">亲子</option>
				<option value="摄影">摄影</option>
				<option value="游戏">游戏</option>
				<option value="房产">房产</option>
				<option value="体育">体育</option>
				<option value="财经">财经</option>
				<option value="家居">家居</option>
				<option value="杂谈">杂谈</option>
				<option value="校园">校园</option>
				<option value="全站">全站</option>
				<option value="动漫">动漫</option>
				<option value="地区">地区</option>
				<option value="美食">美食</option>
				<option value="综合">综合</option>
				<option value="手机">手机</option>
				<option value="教育">教育</option>			 		 
				</select> 
			</td>
			<td></td>
		  </tr>		  
		   <tr>
			<td>地区</td>
			<td><select name="area">
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
			<td>板块地址</td>
			<td><input name="bkadress" type="text" size="40" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td>效果</td>
			<td><select name="xiaoguo">
				<option value="置顶">置顶</option>
				<option value="加精">加精</option>		
                					
				</select> 
				 </td>
			<td></td>
		  </tr>
		  <tr>
			<td>置顶价格/天</td>
			<td><input name="zdprice" type="text"   /> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>加精价格/天</td>
			<td><input name="jjprice" type="text"   /> 元</td>
			<td></td>
		  </tr>
		  <tr>
			<td>备注</td>
			<td><input name="beizhu" type="text"  size="40" maxlength="20" value="最长20个汉子" /></td>
			<td></td>
		  </tr>
		  <tr>
			<td></td>
			<td><input name="submit" type="submit" value="添加" class="reganniu" /></td>
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

$bbs=$_POST['bbs'];
$bk=$_POST['bk'];
$area=$_POST['area'];
$bkadress=$_POST['bkadress'];
$xiaoguo=$_POST['xiaoguo'];

$zdprice=$_POST['zdprice'];
$jjprice=$_POST['jjprice'];
$beizhu=$_POST['beizhu'];

$time=date("Y-m-d");


mysql_query("insert into tb_bbszhiding (bbs,bk,area,bkadress,xiaoguo,zdprice,jjprice,beizhu,time) values ('$bbs','$bk','$area','$bkadress','$xiaoguo','$zdprice','$jjprice','$beizhu','$time')");

 exit("<script>alert('添加成功!');window.history.go(-1);</script>");

}


?>
