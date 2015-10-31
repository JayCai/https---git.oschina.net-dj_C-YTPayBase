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
			   <td width="243" height="45" style="color:blue; font-size:18px;">发布论坛套餐文章</td>
			   <td width="642" style="color:red; font-size:18px;"></td>
			</tr>
			<tr>
			   <td width="243" height="34">所选产品</td>
			   <td width="642">
				  <?php
					 $numid=listquery("select * from ordertop where user='$user' and tb='tb_bbs'");//查询ordertop 产品ID系列表
					 foreach ($numid as $v){

						$a=query("select * from tb_bbs where id='$v[cpID]'");
						$cpID.=$v[cpID].',';//产品ID
						$price[]=$a['price']; //产品价格


						echo	 $a['bbsleixing'];	  
						echo   ' <font color=red> '. $a['price'].'元</font>';
						echo   '<a href="?del_id='.$v[id].'"><font color=blue> 点击删除</font></a>'.'<br>';
					 }
					 $hbprice= array_sum($price); 	
					 echo '总计<font color=red> '.$hbprice.'元</font>'.'<br>';



					 //查询用户 余额 权限 折扣
					 $cha=query("select * from user where user='$user'");
					 $rmb=$cha['rmb'];//余额
					 $level=$cha['level'];//级别
					 $tuijie=$cha['tuijie'];//推荐人

					 $zk=query("select * from level where level='$level'");//查询级别表 取得折扣		
					 $ture_price=$hbprice*('0.'.$zk['zhekou']); //真实价格

					 echo '当前账户余额：'.$rmb.' 元'.' 会员级别 '.$level;
					 echo ' 折扣：'.$zk['zhekou'].' 折 ';

					 if($level=='普通用户'){
						echo ' 实际付款 '.$hbprice.' 元';	
						$ture_price=$hbprice;	
					 }else{
						echo ' 实际付款 '.$ture_price.' 元';	
					 }

					 if($rmb<$ture_price){
						exit("<script>alert('账号余额不足 请充值!');window.history.go(-1);</script>");
						exit;
					 }

					 $_SESSION['cpID']       =$cpID;
					 $_SESSION['orderID']    =$orderID;
					 $_SESSION['rmb']        =$rmb;
					 $_SESSION['ture_price'] =$ture_price;
					 $_SESSION['tuijie']     =$tuijie;
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
			</script>

		 </td>
	  </tr>
   </table>


   <?php
	  $ti=query("select * from ticheng where id='1'");
	  $ticheng=$ti['ticheng'];//提成 

	  if($_POST['submitgo']){
		 $time=date("Y-m-d H:i:s");

		 $title=$_POST['title'];
		 $content=$_POST['content'];
		 $liuyan=$_POST['liuyan'];

		 //$cpID=$_POST['cpID'];
		 //$orderID=$_POST['orderID'];//订单编号
		 //$urmb=$_POST['urmb'];//用户账户余额
		 //$ture_price=$_POST['ture_price'];
		 //$tuijie=$_POST['tuijie'];

		 $cpID      =$_SESSION['cpID'];
		 $orderID   =$_SESSION['orderID'];
		 $urmb      =$_SESSION['rmb'];
		 $ture_price=$_SESSION['ture_price'];
		 $tuijie    =$_SESSION['tuijie'];

		 if(empty($cpID)){exit("<script>alert('非法操作!');window.location.href='./index.php';</script>");}
		 $wee=query("select * from order_bbs where orderID='$orderID'");
		 if($wee['id']){
			exit("<script>alert('不能重复提交!');window.location.href='./index.php';</script>");	
		 }


		 $type=$_POST['type'];
		 if(empty($type)){exit("<script>alert('请选择发布方式!');window.history.go(-1);</script>");}
		 if($type==1){	
			if(empty($title)){exit("<script>alert('标题不能为空!');window.history.go(-1);</script>");}			  
			if(empty($content)){exit("<script>alert('内容不能为空!');window.history.go(-1);</script>");}	
		 }//使用在线编辑器
		 if($type==2){	 
			$a=query("select * from user_file where orderID='$orderID' and user='$user'");
			if(!$a['id']){
			   exit("<script>alert('请上传文章!');window.history.go(-1);</script>");	 
			}//使用上传文件
		 }

		 if($urmb<$ture_price){
			exit("<script>alert('账号余额不足 请充值!');window.history.go(-1);</script>");
			exit;
		 }

		 $iR =mysql_query("insert into order_bbs (orderID,user,cpID,price,title,content,liuyan,type,time,liyou,baobiao) 
		 values 
		 ('$orderID','$user','$cpID','$ture_price','$title','$content','$liuyan','未收单','$time','','')");
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }

		 $newrmb=$urmb-$ture_price;//更新用户余额
		 mysql_query("update user set rmb='$newrmb' where user='$user'");

		 if($tuijie){ 	
			//如果存在推荐人
			$tcok=$ture_price*$ticheng*0.01;
			$iR =mysql_query("insert into ticheng_b (orderID,user,cpname,cpID,tb,price,tuijie,ticheng,time) values ('$orderID','$user','论坛套餐','$cpID','tb_bbs','$ture_price','$tuijie','$tcok','$time')");
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}
		 }
		 $iR =mysql_query("insert into xiaofei (orderID,user,cpname,cpID,tb,price,time) values ('$orderID','$user','论坛套餐','$cpID','tb_bbs','$ture_price','$time')");  
		 if( !$iR )
		 {
			die('Error: ' . mysql_error());
		 }
		 include 'famail.php';
		 exit("<script>alert('购买成功!');window.location.href='./user/main.php';</script>");	 
	  }
   ?>

   <?php 
	  $del_id=$_GET['del_id'];
	  if($del_id){
		 mysql_query("delete from ordertop where id='$del_id'");
		 exit("<script>window.location.href='./add_bbs.php';</script>");	
	  }
   ?>

   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

	  <table width="1018" height="656"  border="0" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-top:10px;">	  
		 <tr>
			<td height="43"><input name="type" type="radio" value="1" checked="checked" />方式一：使用在线编辑器提交文章</td>
			<td></td>
		 </tr>
		 <tr>
			<td height="36">标题</td>
			<td><input name="title" type="text" size="60"value="标题控制在40字内" /></td>
		 </tr>
		 <tr>
			<td>内容</td>
			<td style=" padding-left:2px;"><textarea name="content" id="content" style="height:400px; width:600px;">内容控制在2000字内</textarea></td>
		 </tr>
		 <tr>
			<td height="54"><input name="type" type="radio" value="2"  />方式二：使用文件上传</td>
			<td>
			   <div style="float:left;"><input type="file" name="file_upload" id="file_upload"  /></div>
			   <div style="float:left; margin-left:50px;"><a href="javascript:$('#file_upload').uploadify('settings', 'formData', {'typeCode':document.getElementById('id_file').value});$('#file_upload').uploadify('upload','*')" style="background-color:#FF0000; color:white; line-height:40px; height:40px;">开始批量上传</a> 仅支持DOC, txt文档 单个文件限制5M内</div>
			   <div style="float:left;"><input type="hidden" value="232113321" name="tmpdir" id="id_file"></div>
			   <div style="float:left;"><span id="show"></span></div>
			</td>

		 </tr>
		 <tr>
			<td height="62">留言</td>
			<td><textarea name="liuyan" style="width:400px; height:80px;"></textarea></td>
		 </tr>	
		 <!--
		 <tr>
			<td height="16"><input name="cpID" value="<?=$cpID?>" type="text" style="display:none;" /></td>
			<td><input name="ture_price" value="<?=$ture_price?>" type="text" style="display:none;" /></td>
			<td width="133"><input name="orderID" value="<?=$orderID?>" type="text" style="display:none;" />
			   <input name="tuijie" value="<?=$tuijie?>" type="text" style="display:none;" /></td>
			<td><input name="urmb" value="<?=$rmb?>" type="text" style="display:none;" /></td>
		 </tr>
		 -->
		 <tr height="40">
			<td><input name="submitgo" type="submit" value="确认购买" class="anniu" onclick="gotan();" /></td>
		 </tr>

	  </table>


   </form>

   <!--核心代码-->
</div>

<!--page end-->
<?php include 'foot2.php';?>

</body>
</html>
