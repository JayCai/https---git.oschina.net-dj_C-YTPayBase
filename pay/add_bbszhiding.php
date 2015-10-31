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
			   <td width="243" height="45" style="color:blue; font-size:18px;">发布论坛置顶加精文章</td>
			   <td width="642"></td>
			</tr>
			<tr>
			   <td width="243" height="34">所选产品</td>
			   <td width="642">
				  <?php
					 $numid=listquery("select * from ordertop where user='$user' and tb='tb_bbszhiding'");//查询ordertop 产品ID系列表
					 foreach ($numid as $v){

						$a=query("select * from tb_bbszhiding where id='$v[cpID]'");
						$cpID.=$v[cpID].',';//产品ID
						$zdprice[]=$a['zdprice']; //产品直发价格
						$jjprice[]=$a['jjprice']; //产品转发价格

						echo	 $a['bbs'];
						echo   ' 置顶价格<font color=red> '. $a['zdprice'].'元</font>';
						echo   ' 加精价格<font color=red> '. $a['jjprice'].'元</font>';
						echo   '<a href="?del_id='.$v[id].'"><font color=blue> 点击删除</font></a>'.'<br>';
					 }
					 $hbzdprice= array_sum($zdprice); 
					 $hbjjprice= array_sum($jjprice); 
					 echo '置顶价格总计<font color=red> '.$hbzdprice.'元</font>'.'<br>';
					 echo '加精价格总计<font color=red> '.$hbjjprice.'元</font>'.'<br>';


					 //查询用户 余额 权限 折扣
					 $cha=query("select * from user where user='$user'");
					 $rmb=$cha['rmb'];//余额
					 $level=$cha['level'];//级别
					 $tuijie=$cha['tuijie'];//推荐人


					 $zk=query("select * from level where level='$level'");//查询级别表 取得折扣		
					 $ture_zdprice=$hbzdprice*('0.'.$zk['zhekou']); //真实置顶价格
					 $ture_jjprice=$hbjjprice*('0.'.$zk['zhekou']); //真实加精价格


					 echo '当前账户余额：'.$rmb.' 元'.' 会员级别 '.$level;
					 echo ' 折扣：'.$zk['zhekou'].' 折 ';

					 if($level=='普通用户'){
						echo ' 置顶实际付款 '.$hbzdprice.' 元';
						$ture_zdprice=$hbzdprice;
						echo ' 加精实际付款 '.$hbjjprice.' 元';
						$ture_jjprice=$hbjjprice;
					 }else{
						echo ' 置顶实际付款 '.$ture_zdprice.' 元';
						echo ' 加精实际付款 '.$ture_jjprice.' 元';
					 }

					 $_SESSION['cpID']         =$cpID        ;
					 $_SESSION['ture_zdprice'] =$ture_zdprice;
					 $_SESSION['ture_jjprice'] =$ture_jjprice;
					 $_SESSION['orderID']      =$orderID     ;
					 $_SESSION['rmb']          =$rmb         ;
					 $_SESSION['tuijie']       =$tuijie      ;
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
		 $content=$_POST['content'];//链接
		 $liuyan=$_POST['liuyan'];

		 //$cpID=$_POST['cpID'];
		 //$ture_zdprice=$_POST['ture_zdprice'];
		 //$ture_jjprice=$_POST['ture_jjprice'];
		 //$orderID=$_POST['orderID'];//订单编号
		 //$urmb=$_POST['urmb'];//用户账户余额
		 //$tuijie=$_POST['tuijie'];

		 $cpID        =$_SESSION['cpID']         ;
		 $ture_zdprice=$_SESSION['ture_zdprice'] ;
		 $ture_jjprice=$_SESSION['ture_jjprice'] ;
		 $orderID     =$_SESSION['orderID']      ;
		 $urmb        =$_SESSION['rmb']          ;
		 $tuijie      =$_SESSION['tuijie']       ;

		 if(empty($cpID)){exit("<script>alert('非法操作!');window.location.href='./index.php';</script>");}
		 $wee=query("select * from order_bbszhiding where orderID='$orderID'");
		 if($wee['id']){
			exit("<script>alert('不能重复提交!');window.location.href='./index.php';</script>");	
		 }

		 $leixing=$_POST['leixing'];//选择类型
		 if(empty($leixing)){exit("<script>alert('请选择类型!');window.history.go(-1);</script>");}

		 if($leixing=='zhiding'){      

			if(empty($content)){exit("<script>alert('链接不能为空!');window.history.go(-1);</script>");}	

			if($urmb<$ture_zdprice){
			   exit("<script>alert('账号余额不足 请充值!');window.history.go(-1);</script>");
			   exit;
			}

			$iR =mysql_query("insert into order_bbszhiding (orderID,user,cpID,zdprice,content,liuyan,leixing,type,time,jjprice,liyou,baobiao) 
			values 
			('$orderID','$user','$cpID','$ture_zdprice','$content','$liuyan','置顶','未收单','$time','','','')");
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}

			$newrmb=$urmb-$ture_zdprice;//更新用户余额
			$iR =mysql_query("update user set rmb='$newrmb' where user='$user'");
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}

			if($tuijie){ 	
			   //如果存在推荐人
			   $tcok=$ture_zdprice*$ticheng*0.01;
			   $iR =mysql_query("insert into ticheng_b (orderID,user,cpname,cpID,tb,price,tuijie,ticheng,time) values ('$orderID','$user','论坛置顶','$cpID','tb_bbszhiding','$ture_zdprice','$tuijie','$tcok','$time')");
			   if( !$iR )
			   {
				  die('Error: ' . mysql_error());
			   }
			}  

			$iR =mysql_query("insert into xiaofei (orderID,user,cpname,cpID,tb,price,time) values ('$orderID','$user','论坛置顶','$cpID','tb_bbszhiding','$ture_zdprice','$time')"); 
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}

			include 'famail.php';
			exit("<script>alert('购买成功!');window.location.href='./user/main.php';</script>");	

		 }
		 //置顶
		 if($leixing=='jiajing'){      

			if(empty($content)){exit("<script>alert('链接不能为空!');window.history.go(-1);</script>");}	

			if($urmb<$ture_jjprice){
			   exit("<script>alert('账号余额不足 请充值!');window.history.go(-1);</script>");
			   exit;
			}

			$iR =mysql_query("insert into order_bbszhiding (orderID,user,cpID,jjprice,content,liuyan,leixing,type,time,zdprice,liyou,baobiao) 
			values 
			('$orderID','$user','$cpID','$ture_jjprice','$content','$liuyan','加精','未收单','$time','','','')");
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}

			$newrmb=$urmb-$ture_jjprice;//更新用户余额
			$iR =mysql_query("update user set rmb='$newrmb' where user='$user'");
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}

			if($tuijie){ 	
			   //如果存在推荐人
			   $tcok=$ture_jjprice*$ticheng*0.01;
			   $iR =mysql_query("insert into ticheng_b (orderID,user,cpname,cpID,tb,price,tuijie,ticheng,time) values ('$orderID','$user','论坛加精','$cpID','tb_bbszhiding','$ture_jjprice','$tuijie','$tcok','$time')");
			   if( !$iR )
			   {
				  die('Error: ' . mysql_error());
			   }
			}  

			$iR =mysql_query("insert into xiaofei (orderID,user,cpname,cpID,tb,price,time) values ('$orderID','$user','论坛加精','$cpID','tb_bbszhiding','$ture_jjprice','$time')"); 
			if( !$iR )
			{
			   die('Error: ' . mysql_error());
			}

			include 'famail.php';
			exit("<script>alert('购买成功!');window.location.href='./user/main.php';</script>");	
		 }
		 //加精

	  }

   ?>

   <?php 
	  $del_id=$_GET['del_id'];
	  if($del_id){
		 mysql_query("delete from ordertop where id='$del_id'");
		 exit("<script>window.location.href='./add_bbszhiding.php';</script>");	
	  }
   ?>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	  <table width="1018" height="40"  border="0" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-top:10px;">	  
		 <tr>
			<td width="278" height="40">选择类型</td>
			<td width="740">
			   <input name="leixing" type="radio" value="zhiding"  />置顶
			   <input name="leixing" type="radio" value="jiajing"  />加精
			</td>
		 </tr>	 
	  </table>


	  <table width="1018" height="656"  border="0" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-top:10px;">	  


		 <tr>
			<td width="278">链接</td>
			<td style=" padding-left:2px;"><textarea name="content" id="content" style="height:400px; width:600px;"></textarea></td>
		 </tr>

		 <tr>
			<td height="62">留言</td>
			<td><textarea name="liuyan" style="height:80px;width:400px;"></textarea></td>
		 </tr>	
		 <!--
		 <tr>
			<td height="16">
			   <input name="cpID" value="<?=$cpID?>" type="text" style="display:none;" />
			</td>
			<td>
			   <input name="ture_zdprice" value="<?=$ture_zdprice?>" type="text" style="display:none;" />
			   <input name="ture_jjprice" value="<?=$ture_jjprice?>" type="text" style="display:none;" />
			</td>
			<td width="133">
			   <input name="orderID" value="<?=$orderID?>" type="text" style="display:none;" />
			   <input name="tuijie" value="<?=$tuijie?>" type="text" style="display:none;" />
			</td>
			<td><input name="urmb" value="<?=$rmb?>" type="text" style="display:none;" />
			</td>
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
