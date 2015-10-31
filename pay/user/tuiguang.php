<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>会员中心_外链网</title>
	  <link rel="stylesheet" type="text/css" href="../css/css.css" />
	  <link rel="stylesheet" type="text/css" href="css.css" />
	  <script type="text/javascript"> 
		 function jsCopy(){ 
			   var e=document.getElementById("source");//对象是contents 
			   e.select(); //选择对象 
			   document.execCommand("Copy"); //执行浏览器复制命令
			   alert('已复制');
		 } 
	  </script> 
   </head>

   <body>
	  <?php
		 include 'head.php';
	  ?>
	  <div class="ureg">
		 <div class="uregnav"> <span style="color:#0066CC; margin-right:10px;"><a href="main.php">会员中心</a></span>  <?=$user?> 您好</div>

		 <div class="uregbox">
			<div class="uleft">
			   <?php include 'nav.php';?>
			   <?php
				  $row=query("select * from ticheng where id=1");
			   ?>
			</div>
			<div class="uright">
			   <table width="783" height="53" >
				  <tr>
					 <td width="167" height="17" style="color:#0066CC;"></td>
					 <td width="604"></td>
				  </tr>
				  <tr>
					 <td height="30">推广下线奖励</td>
					 <td>下线消费 金额X<?=$row['ticheng']?>%，提成到您账户余额下  </td>
				  </tr>
				  <tr>
					 <td width="167" height="30">我的推广链接</td>
					 <td width="604">
						<input name="" type="text" id="source"  value="http://pay.531gw.com/t.php?user=<?=$user?>" style="width:300px;" />
						<input name="" id="button" type="button" value="复制" onclick="jsCopy();" />
					 </td>
				  </tr>							 

			   </table>
			</div>
		 </div>
	  </div>

	  <?php
		 include 'foot.php';
	  ?>

   </body>
</html>

