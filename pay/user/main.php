<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>会员中心_易推网路</title>
	  <link rel="stylesheet" type="text/css" href="../css/css.css" />
	  <link rel="stylesheet" type="text/css" href="css.css" />
   </head>

   <body>
	  <?php
		 include 'head.php';
	  ?>
	  <div class="ureg">
		 <div class="uregnav"> <span style="color:#0066CC; margin-right:10px;"><a href="./main.php">会员中心</a></span>  <?=$user?> 您好</div>

		 <div class="uregbox">
			<div class="uleft">
			   <?php include 'nav.php';?>
			</div>
			<div class="uright">
			   <?php
				  $row  =query("select * from ticheng where id=1");
				  $listggao =listquery("select id, time, title from gonggao " ) ;
			   ?>
			   <br/>

			   <table>
				  <tr>
					 <td>
						<table width ="550" border="0" cellpadding="3" cellspacing="3" >
						   <tr>
							  <td   style="color:#0066CC;">我的信息</td>
							  <td></td>
						   </tr>

						   <tr>
							  <td  >用户名</td>
							  <td><?=$myuser[user]?></td>
						   </tr>
						   <tr>
							  <td>QQ</td>
							  <td><?=$myuser[qq]?></td>
						   </tr>
						   <tr>
							  <td>电话</td>
							  <td><?=$myuser[tel]?></td>
						   </tr>
						   <tr>
							  <td>邮箱</td>
							  <td><?=$myuser[email]?></td>
						   </tr>
						   <tr>
							  <td>账户余额</td>
							  <td style="color:red;"><?=$myuser[rmb]?> 元 <a href="chongzhi.php" style="margin-left:50px; color:red;">立即充值</a></td>
						   </tr>
						   <tr>
							  <td>账户级别</td>
							  <td><?=$myuser[level]?>  </td>
						   </tr>
						   <tr>
							  <td>推广下线奖励</td>
							  <td>下线消费 金额X<?=$row['ticheng']?>%，提成到您账户余额下  </td>
						   </tr>
						   <tr>
							  <td  >我的推广链接</td>
							  <td>
								 <input name="" type="text" id="source"  value="http://pay.531gw.com/t.php?user=<?=$user?>" />
								 <input name="" id="button" type="button" value="复制" onclick="jsCopy();" />
							  </td>
						   </tr>		
						</table>
					 </td>
					 <td>
						<div style ="width:300px height:260px overflow:scroll"  >
						   <p style="color:#0066CC;"> 公告</p>

						   <?php
							  foreach( $listggao as $ggao )
							  {
							  ?>
							  <p><?=$ggao['time']?> <?=$ggao['title']?></p> 
							  <?php
							  }
						   ?>

						</div>
					 </td>
				  </tr>

			   </table>

			   <p> <br /> </p>

			   <table width="776" height="53" border="0" cellpadding="1" cellspacing="1" style="border: #CCCCCC 1px solid; text-align:center;">
				  <tr height="30" style="background-color:#999999;">
					 <td width="112">会员级别</td>
					 <td width="109">单次充值金额</td>
					 <td width="104">消费折扣</td>	
				  </tr>	
				  <?php
					 $row=listquery("select * from level order by id asc");
					 foreach ($row as $v){
					 ?>
					 <tr height="30">
						<td width="112"><?=$v[level]?></td>
						<td width="109"><?=$v[price]?> 元 </td>
						<td width="104"><?=$v[zhekou]?> 折 </td>		
					 </tr>	
					 <?php
					 }
				  ?> 
			   </table>				



			</div>
		 </div>
	  </div>

	  <?php
		 include 'foot.php';
	  ?>

   </body>
</html>

