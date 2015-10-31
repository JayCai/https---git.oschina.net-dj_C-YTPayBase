<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title><?=$sg['sitename']?></title>
	  <meta name="keywords" content="<?=$sg['keywords']?>" />
	  <meta name="description" content="<?=$sg['description']?>" />
	  <link href="css/css.css" rel="stylesheet" type="text/css" />
	  <script type="text/javascript" src="./js/index.js"></script> 
   </head>

   <body>
	  <?php include 'head.php';
		 if(empty($user)){
			exit("<script>alert('请登录!');window.location.href='./user/';</script>");
			exit;
		 }
		 $orderID=date("YmdHis");
	  ?>
	  <!--head end-->

	  <div class="addbox">
		 <!--核心代码-->

		 <table width="1018" height="79"  border="0" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-top:10px;">
			<tr>
			   <td width="243" height="45" style="color:blue; font-size:18px;">发布微博资源文章</td>
			   <td width="642"></td>
			</tr>
			<tr>
			   <td width="243" height="34">所选产品</td>
			   <td width="642">
				  <?php
					 $numid=listquery("select * from ordertop where user='$user' and tb='tb_weibo'");//查询ordertop 产品ID系列表
					 foreach ($numid as $v){

						$a=query("select * from tb_weibo where id='$v[cpID]'");
						$cpID.=$v[cpID].',';//产品ID
						$zhifa[]=$a['zhifa']; //产品直发价格
						$zhuanfa[]=$a['zhuanfa']; //产品转发价格

						echo	 $a['weiboname'];
						echo   ' 直发价格<font color=red> '. $a['zhifa'].'元</font>';
						echo   ' 转发价格<font color=red> '. $a['zhuanfa'].'元</font>';
						echo   '<a href="?del_id='.$v[id].'"><font color=blue> 点击删除</font></a>'.'<br>';
					 }
					 $hbzhifa= array_sum($zhifa); 
					 $hbzhuanfa= array_sum($zhuanfa); 
					 echo '直发价格总计<font color=red> '.$hbzhifa.'元</font>'.'<br>';
					 echo '转发价格总计<font color=red> '.$hbzhuanfa.'元</font>'.'<br>';


					 //查询用户 余额 权限 折扣
					 $cha=query("select * from user where user='$user'");
					 $rmb=$cha['rmb'];//余额
					 $level=$cha['level'];//级别
					 $tuijie=$cha['tuijie'];//推荐人


					 $zk=query("select * from level where level='$level'");//查询级别表 取得折扣		
					 $ture_zhifarmb=$hbzhifa*('0.'.$zk['zhekou']); //真实直发价格
					 $ture_zhuanfarmb=$hbzhuanfa*('0.'.$zk['zhekou']); //真实直发价格


					 echo '当前账户余额：'.$rmb.' 元'.' 会员级别 '.$level;
					 echo ' 折扣：'.$zk['zhekou'].' 折 ';

					 if($level=='普通用户'){
						echo ' 直发实际付款 '.$hbzhifa.' 元';
						$ture_zhifarmb=$hbzhifa;
						echo ' 转发实际付款 '.$hbzhuanfa.' 元';
						$ture_zhuanfarmb=$hbzhuanfa;
					 }else{
						echo ' 直发实际付款 '.$ture_zhifarmb.' 元';
						echo ' 转发实际付款 '.$ture_zhuanfarmb.' 元';
					 }




				  ?>

				  <script type="text/javascript" src="piliang/jquery-1.7.2.min.js" ></script> 
				  <script type="text/javascript" src="piliang/jquery.uploadify-3.1.min.js"></script>
				  <link rel="stylesheet" type="text/css" href="piliang/uploadify.css"/>
				  <script type="text/javascript">
					 var img_id_upload=new Array();//初始化数组，存储已经上传的图片名
					 var i=0;//初始化数组下标
					 $(function() {
						   $('#file_upload').uploadify({
								 'auto'     : false,//关闭自动上传
								 'removeTimeout' : 1,//文件队列上传完成1秒后删除
								 'swf'      : 'piliang/uploadify.swf',
								 'uploader' : 'piliang/uploadify.php?user=<?=$user?>&orderID=<?=$orderID?>',
								 'method'   : 'post',//方法，服务端可以用$_POST数组获取数据
								 'buttonText' : '选择文件',//设置按钮文本
								 'multi'    : true,//允许同时上传多张图片
								 'uploadLimit' : 10,//一次最多只允许上传10
								 'fileTypeDesc' : 'Files',//只允许上传doc txt
								 'fileTypeExts' : '*.doc; *.txt',//限制允许上传的图片后缀
								 'fileSizeLimit' : '5120KB',//限制上传的图片不得超过5M
								 'onUploadSuccess' : function(file, data, response) {//每次成功上传后执行的回调函数，从服务端返回数据到前端
									img_id_upload[i]=data;
									i++;
									// alert(data);
									document.getElementById("show").innerHTML += data;//

							  },
							  'onQueueComplete' : function(queueData) {//上传队列全部完成后执行的回调函数
								 // if(img_id_upload.length>0)
								 // alert('成功上传的文件有：'+encodeURIComponent(img_id_upload));
						   }  
						   // Put your options here
					 });
			   });


			   $(function() {
					 $('#file_upload2').uploadify({
						   'auto'     : false,//关闭自动上传
						   'removeTimeout' : 1,//文件队列上传完成1秒后删除
						   'swf'      : 'piliang/uploadify.swf',
						   'uploader' : 'piliang/uploadify.php?user=<?=$user?>&orderID=<?=$orderID?>',
						   'method'   : 'post',//方法，服务端可以用$_POST数组获取数据
						   'buttonText' : '选择文件',//设置按钮文本
						   'multi'    : true,//允许同时上传多张图片
						   'uploadLimit' : 10,//一次最多只允许上传10
						   'fileTypeDesc' : 'Files',//只允许上传doc txt
						   'fileTypeExts' : '*.doc; *.txt',//限制允许上传的图片后缀
						   'fileSizeLimit' : '5120KB',//限制上传的图片不得超过5M
						   'onUploadSuccess' : function(file, data2, response) {//每次成功上传后执行的回调函数，从服务端返回数据到前端
							  img_id_upload[i]=data2;
							  i++;
							  // alert(data);
							  document.getElementById("sdffa").innerHTML += data2;//

						},
						'onQueueComplete' : function(queueData) {//上传队列全部完成后执行的回调函数
						   // if(img_id_upload.length>0)
						   // alert('成功上传的文件有：'+encodeURIComponent(img_id_upload));
					 }  
					 // Put your options here
			   });
		 });
	  </script>

   </td>
</tr>
</table>

<?php
   $ti=query("select * from ticheng where id='1'");
   $ticheng=$ti['ticheng'];//提成 


   if($_POST['submitgo']){
	  $time=date("Y-m-d H:i:s");
	  $zhuanfalink=$_POST['zhuanfalink'];
	  $zhuanfayu=$_POST['zhuanfayu'];
	  $title=$_POST['title'];
	  $content_zhifa=$_POST['content_zhifa'];
	  $content_chang=$_POST['content_chang'];
	  $liuyan_zhifa=$_POST['liuyan_zhifa'];
	  $liuyan_zhuanfa=$_POST['liuyan_zhuanfa'];
	  $liuyan_chang=$_POST['liuyan_chang'];

	  //$tuijie=$_POST['tuijie'];
	  //$ture_zhifarmb=$_POST['ture_zhifarmb'];
	  //$ture_zhuanfarmb=$_POST['ture_zhuanfarmb'];
	  //$cpID=$_POST['cpID'];
	  //$orderID=$_POST['orderID'];//订单编号
	  //$urmb=$_POST['urmb'];//用户账户余额

	  $tuijie         =$_SESSION['tuijie'];
	  $ture_zhifarmb  =$_SESSION['ture_zhifarmb'];
	  $ture_zhuanfarmb=$_SESSION['ture_zhuanfarmb'];
	  $cpID           =$_SESSION['cpID'];
	  $orderID        =$_SESSION['orderID'];//订单编号
	  $urmb           =$_SESSION['rmb'];//用户账户余额


	  if(empty($cpID)){exit("<script>alert('非法操作!');window.location.href='./index.php';</script>");}
	  $wee=query("select * from order_weibo where orderID='$orderID'");
	  if($wee['id']){
		 exit("<script>alert('不能重复提交!');window.location.href='./index.php';</script>");	
	  }

	  $fa=$_POST['fa'];//选择类型

	  if($fa=='zhifa'){

		 $type=$_POST['type'];
		 if(empty($type)){exit("<script>alert('请选择发布方式!');window.history.go(-1);</script>");}
		 if($type==1){			  
			if(empty($content_zhifa)){exit("<script>alert('内容不能为空!');window.history.go(-1);</script>");}	
		 }//使用在线编辑器
		 if($type==2){	 
			$a=query("select * from user_file where orderID='$orderID' and user='$user'");
			if(!$a['id']){
			   exit("<script>alert('请上传文章!');window.history.go(-1);</script>");	 
			}//使用上传文件
		 }

		 if($urmb<$ture_zhifarmb){
			exit("<script>alert('账号余额不足 请充值!');window.history.go(-1);</script>");
			exit;
		 }

		 $iR =mysql_query("insert into order_weibo (orderID,user,cpID,zhifaprice,content,liuyan,leixing,type,time,zhuanfaprice,zhuanfalink,zhuanfayu,liyou,baobiao,title) 
		 values 
		 ('$orderID','$user','$cpID','$ture_zhifarmb','$content_zhifa','$liuyan_zhifa','微博直发','未收单','$time','','','','','','')");
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 $newrmb=$urmb-$ture_zhifarmb;//更新用户余额
		 $iR =mysql_query("update user set rmb='$newrmb' where user='$user'");
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 if($tuijie){ 	
			//如果存在推荐人
			$tcok=$ture_zhifarmb*$ticheng*0.01;
			$iR =mysql_query("insert into ticheng_b (orderID,user,cpname,cpID,tb,price,tuijie,ticheng,time) values ('$orderID','$user','微博直发','$cpID','tb_weibo','$ture_zhifarmb','$tuijie','$tcok','$time')");
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}
		 }  

		 $iR =mysql_query("insert into xiaofei (orderID,user,cpname,cpID,tb,price,time) values ('$orderID','$user','微博直发','$cpID','tb_weibo','$ture_zhifarmb','$time')"); 
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 include 'famail.php';
		 exit("<script>alert('购买成功!');window.location.href='./user/main.php';</script>");	

	  }
	  //直发


	  if($fa=='zhuanfa'){


		 if(empty($zhuanfalink)){exit("<script>alert('转发链接不能为空!');window.history.go(-1);</script>");}	
		 if(empty($zhuanfayu)){exit("<script>alert('转发语不能为空!');window.history.go(-1);</script>");}	



		 if($urmb<$ture_zhuanfarmb){
			exit("<script>alert('账号余额不足 请充值!');window.history.go(-1);</script>");
			exit;
		 }

		 $iR =mysql_query("insert into order_weibo (orderID,user,cpID,zhuanfaprice,zhuanfalink,zhuanfayu,liuyan,leixing,type,time,content,title,zhifaprice,liyou,baobiao) 
		 values 
		 ('$orderID','$user','$cpID','$ture_zhuanfarmb','$zhuanfalink','$zhuanfayu','$liuyan_zhuanfa','微博转发','未收单','$time','','','','','')");
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 $newrmb=$urmb-$ture_zhuanfarmb;//更新用户余额
		 $iR =mysql_query("update user set rmb='$newrmb' where user='$user'");
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 if($tuijie){ 	
			//如果存在推荐人
			$tcok=$ture_zhuanfarmb*$ticheng*0.01;
			$iR =mysql_query("insert into ticheng_b (orderID,user,cpname,cpID,tb,price,tuijie,ticheng,time) values ('$orderID','$user','微博转发','$cpID','tb_weibo','$ture_zhuanfarmb','$tuijie','$tcok','$time')");
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}
		 }   

		 $iR =mysql_query("insert into xiaofei (orderID,user,cpname,cpID,tb,price,time) values ('$orderID','$user','微博转发','$cpID','tb_weibo','$ture_zhuanfarmb','$time')");
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 include 'famail.php';
		 exit("<script>alert('购买成功!');window.location.href='user/main.php';</script>");	

	  }
	  //转发

	  if($fa=='chang'){

		 $type=$_POST['type'];
		 if(empty($type)){exit("<script>alert('请选择发布方式!');window.history.go(-1);</script>");}
		 if($type==1){		
			if(empty($title)){exit("<script>alert('标题不能为空!');window.history.go(-1);</script>");}		
			if(empty($content_chang)){exit("<script>alert('内容不能为空!');window.history.go(-1);</script>");}		  

		 }//使用在线编辑器
		 if($type==2){	 
			$a=query("select * from user_file where orderID='$orderID' and user='$user'");
			if(!$a['id']){
			   exit("<script>alert('请上传文章!');window.history.go(-1);</script>");	 
			}//使用上传文件
		 }

		 if($urmb<$ture_zhifarmb){
			exit("<script>alert('账号余额不足 请充值!');window.history.go(-1);</script>");
			exit;
		 }

		 $iR =mysql_query("insert into order_weibo (orderID,user,cpID,zhifaprice,title,content,liuyan,leixing,type,time,zhuanfaprice,zhuanfalink,zhuanfayu,liyou,baobiao) 
		 values 
		 ('$orderID','$user','$cpID','$ture_zhifarmb','$title','$content_chang','$liuyan_chang','长微博','未收单','$time','','','','','')");
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 $newrmb=$urmb-$ture_zhifarmb;//更新用户余额
		 $iR =mysql_query("update user set rmb='$newrmb' where user='$user'");
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 if($tuijie){ 	
			//如果存在推荐人
			$tcok=$ture_zhifarmb*$ticheng*0.01;
			$iR =mysql_query("insert into ticheng_b (orderID,user,cpname,cpID,tb,price,tuijie,ticheng,time) values ('$orderID','$user','长微博','$cpID','tb_weibo','$ture_zhifarmb','$tuijie','$tcok','$time')");
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}
		 }  

		 $iR =mysql_query("insert into xiaofei (orderID,user,cpname,cpID,tb,price,time) values ('$orderID','$user','长微博','$cpID','tb_weibo','$ture_zhifarmb','$time')"); 
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 include 'famail.php'; 
		 exit("<script>alert('购买成功!');window.location.href='./user/main.php';</script>");	

	  }
	  //长微博

   }

?>

<?php 
   $del_id=$_GET['del_id'];
   if($del_id){
	  mysql_query("delete from ordertop where id='$del_id'");
	  exit("<script>window.location.href='./add_weibo.php';</script>");	

   }

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
   <table width="1018" height="40"  border="0" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-top:10px;">	  
	  <tr>
		 <td width="278" height="40">选择类型</td>
		 <td width="740">
			<!--
			<input name="tuijie" value="<?=$tuijie?>" type="text" style="display:none;" />
			-->
			<?php
			   $_SESSION['tuijie']        =$tuijie;
			?>
			<input name="fa" type="radio" value="zhifa"   onclick="qingqiu('showa','showb','showc');" checked="checked"/>微博直发 
			<input name="fa" type="radio" value="zhuanfa" onclick="qingqiu('showb','showa','showc');" />微博转发 
			<input name="fa" type="radio" value="chang" onclick="qingqiu('showc','showb','showa');" />长微博</td>
	  </tr>	 
   </table>

   <div id="showa" style="display:block;">
	  <?php include 'weibo_zhifa.php';?>
   </div>
   <div id="showb">
	  <?php include 'weibo_zhuanfa.php';?>
   </div>
   <div id="showc">
	  <?php include 'weibo_chang.php';?>
   </div>
</form>

<!--核心代码-->
</div>

<!--page end-->
<?php include 'foot2.php';?>

</body>
</html>

