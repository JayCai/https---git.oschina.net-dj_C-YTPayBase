<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理中心_易推网络</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
<link rel="stylesheet" type="text/css" href="css.css" />
<script type="text/javascript" src="js/laydate.js"></script>
</head>

<body>
<?php
include 'head.php';
  $rmbli=listquery("select * from alipay where type>0 ");			
  foreach($rmbli as $vv){		
  $xrmb+=$vv['rmb'];	//总计	 
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
	<form action="" method="get">
	 <table width="899" height="65" >
		  <tr>
			<td width="173" height="18" style="color:#0066CC;">搜索</td>			
		  </tr>		 
		  <tr>
			<td width="173" height="30">输入支付宝交易号</td>
			<td width="168"><input name="alipayID" type="text"  /></td>
			<td width="542"><input name="submit" type="submit" class="reganniu"  value="搜索" /></td>
		  </tr>
		  <tr>
			<td width="173" height="30">按日期查询</td>
			<td width="168"><input name="riqi" class="laydate-icon" id="demo" /> <input name="riqi2" class="laydate-icon" id="demo2" /> </td>
			<td width="542"><input name="submit" type="submit" class="reganniu"  value="搜索" /></td>
		  </tr>
		    <tr>
			<td width="173" height="30">按月份查询</td>
			<td width="168">
			<select name="yue">
			  <option value="100">请选择月份</option>
			  <option value="-01-">1月份</option>
			  <option value="-02-">2月份</option>
			  <option value="-03-">3月份</option>
			  <option value="-04-">4月份</option>
			  <option value="-05-">5月份</option>
			  <option value="-06-">6月份</option>
			  <option value="-07-">7月份</option>
			  <option value="-08-">8月份</option>
			  <option value="-09-">9月份</option>
			  <option value="-10-">10月份</option>
			  <option value="-11-">11月份</option>
			  <option value="-12-">12月份</option>
			</select>
			</td>
			<td width="542"><input name="submit" type="submit" class="reganniu"  value="搜索" /></td>
		  </tr>
		  <tr height="30"></tr>
	  </table>
	 </form>
	 <!--上面是搜索用户--> 
	  	<table width="953" height="38" border="0" cellpadding="0" cellspacing="0" class="order3">
				  <tr>
					<td width="96">项目名称</td>
					<td width="96">用户名</td>
					<td width="154">订单编号</td>
					<td width="277">支付宝交易号</td>
					<td width="117">充值金额</td>
					<td width="108">充值方式</td>
					<td width="201">时间</td>
				  </tr>
				  
				 <?php
				 $alipayID=$_GET['alipayID'];	
				 $riqi=$_GET['riqi'];
				 $riqi2=$_GET['riqi2'];	
				 $yue=$_GET['yue'];		
				 if($_GET['alipayID']){
				 $sql= " and alipayID='$alipayID'";
				 }
				  if($_GET['riqi'] || $_GET['riqi2']){
				 $sql= " and time<'$riqi2' and time>'$riqi'";
				 }
				  if($_GET['yue'] && $_GET['yue']!=100){
				 $sql= " and time like '%$yue%'";
				 }
				   $sqle="select * from alipay where type>0 $sql";
				   $numq=mysql_query($sqle);
				   require_once 'page.php';
				   $list=listquery("select * from alipay where type>0 $sql order by id desc  limit ".$num.",20");			
				  foreach($list as $v){				 
				  ?>
				   <tr>
					<td width="96"><?=$v['title']?></td>
					<td width="96"><?=$v['user']?></td>
					<td width="154"><?=$v['orderID']?></td>
					<td width="277"><?=$v['alipayID']?></td>
					<td width="117"><?=$v['rmb']?></td>
					<td width="108"><?=$v['beizhu']?></td>
					<td width="201"><?=$v['time']?></td>
				  </tr>
	              <?php			
				  }
				  ?>
				</table>
			<table width="953" height="38" border="0" cellpadding="0" cellspacing="0" class="order3">
				  <tr>
				  <td>
			       <a href="?page=0&alipayID=<?=$alipayID?>&riqi=<?=$riqi?>&yue=<?=$yue?>">首页</a>
				   <a href="?page=<?=$shang?>&alipayID=<?=$alipayID?>&riqi=<?=$riqi?>&yue=<?=$yue?>">上一页</a>
				  
				   <a href="?page=<?=$next?>&alipayID=<?=$alipayID?>&riqi=<?=$riqi?>&yue=<?=$yue?>">下一页</a>
				   <a href="?page=<?=$totle?>&alipayID=<?=$alipayID?>&riqi=<?=$riqi?>&yue=<?=$yue?>">末页</a>
				   <a href="javascript:;">跳到
				  <select onchange="window.location='?alipayID=<?=$alipayID?>&riqi=<?=$riqi?>&yue=<?=$yue?>&page='+this.value">
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
			 	   <a style="float:right; border:0px; margin-right:20px; color:red;">网站所有会员充值总计:<?=$xrmb?>元</a>
				   </td>
			    </tr>
			  </table>
	</div>
  <!--right-->
  </div>
</div>

<?php
include 'foot.php';
?>

<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#demo'});//绑定元素
}();

!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#demo2'});//绑定元素
}();

//日期范围限制
var start = {
    elem: '#start',
    format: 'YYYY-MM-DD',
    min: laydate.now(), //设定最小日期为当前日期
    max: '2099-06-16', //最大日期
    istime: true,
    istoday: false,
    choose: function(datas){
         end.min = datas; //开始日选好后，重置结束日的最小日期
         end.start = datas //将结束日的初始值设定为开始日
    }
};

var end = {
    elem: '#end',
    format: 'YYYY-MM-DD',
    min: laydate.now(),
    max: '2099-06-16',
    istime: true,
    istoday: false,
    choose: function(datas){
        start.max = datas; //结束日选好后，充值开始日的最大日期
    }
};
laydate(start);
laydate(end);

//自定义日期格式
laydate({
    elem: '#test1',
    format: 'YYYY年MM月DD日',
    festival: true, //显示节日
    choose: function(datas){ //选择日期完毕的回调
        alert('得到：'+datas);
    }
});

//日期范围限定在昨天到明天
laydate({
    elem: '#hello3',
    min: laydate.now(-1), //-1代表昨天，-2代表前天，以此类推
    max: laydate.now(+1) //+1代表明天，+2代表后天，以此类推
});
</script>

</body>
</html>


 