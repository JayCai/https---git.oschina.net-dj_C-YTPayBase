<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>综合套餐_<?=$sg['sitename']?></title>
	  <meta name="keywords" content="<?=$sg['keywords']?>" />
	  <meta name="description" content="<?=$sg['description']?>" />
	  <link href="css/css.css" rel="stylesheet" type="text/css" />
	  <link href="foot.css" rel="stylesheet" type="text/css" />
	  <link rel = "Shortcut Icon" href="favicon.ico" /> 
	  <script type="text/javascript" src="js/index.js"></script> 
	  <script>
		 window.onload=function (){
			   <?php
				  $p=$_GET['price'];
				  if($p){
					 echo 'document.getElementById("'.$p.'").className="bian";';
					 echo 'document.getElementById("'.$p.'").style.color="white";';
				  }
				  $caozuoid=$_GET['caozuoid'];
				  if($caozuoid){
					 echo 'document.getElementById("'.$caozuoid.'").className="bian";';
					 echo 'document.getElementById("'.$caozuoid.'").style.color="white";';
				  }
			   ?>
			}
		 </script>
	  </head>

	  <body>
		 <?php include 'head.php';?>
		 <!--head end-->
		 <div class="bnav">
			<a  class="bian" href="list_zonghe.php?caozuoid=pt5"><font color="#FFFFFF">价格分类</font></a>
			<a href="?price=5000&caozuoid=<?=$caozuoid?>" id="5000" >0-5000元</a>
			<a href="?price=10000&caozuoid=<?=$caozuoid?>" id="10000" >5000-10000元</a>
			<a href="?price=30000&caozuoid=<?=$caozuoid?>" id="30000" >10000-30000元</a>
			<a href="?price=30001&caozuoid=<?=$caozuoid?>" id="30001" >30000元以上</a>

		 </div>
		 <!--fenlei end-->
		 <table class="table_weibo_nav" border="0" cellspacing="0" cellpadding="0" >
			<tr>
			   <td width="120" style=" padding-left:10px;">选择</td>
			   <td width="108">套餐</td>  
			   <td width="524">服务内容</td>
			   <td width="80">周期</td>	
			   <td width="110">会员价</td>
			   <td width="109">市场价</td>

			</tr>
		 </table>
		 <form action="add_zonghe.php" method="post">
			<table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
			   <?php
				  $price=$_GET['price'];
				  switch($price){ 
					 case 5000: 
						$sql="where price <=5000 "; 
						break; 
					 case 10000: 
						$sql="where price between 5000 and 10000"; 
						break; 
					 case 30000: 
						$sql="where price between 10000 and 30000"; 
						break; 
					 case 30001: 
						$sql="where price > 30001"; 
						break; 
					 default: 
						$sql=""; 
				  } 


				  $numq=mysql_query("select id from tb_zonghe $sql");
				  include 'page.php';
				  $row=listquery("select * from tb_zonghe $sql order by id desc limit ".$num.",20");
				  foreach ($row as $v){
				  ?>
				  <tr onmousemove="changeTrColor(this)">
					 <td width="120" style=" padding-left:10px;" ><a href="?mid=<?=$v[id]?>" class="renbude" style="width:70px; margin-left:5px; ">加入购物车</a></td>
					 <td width="108"><?=$v['leixing']?></td> 
					 <td width="524" class="show"><?=$v['taocanzy']?></td>   
					 <td width="80"><?=$v['zhouqi']?></td>	
					 <td width="110"><?=$v['price']?> 元</td>
					 <td width="109"><?=$v['scprice']?> 元<div class="delxian"></div></td>
				  </tr>
				  <?php
				  }
			   ?>

			</table>




			<!--LIST end-->

			<div class="page">
			   <div class="pagebao">
				  <a href="?page=0&price=<?=$price?>&caozuoid=<?=$caozuoid?>">首页</a>
				  <a href="?page=<?=$shang?>&price=<?=$price?>&caozuoid=<?=$caozuoid?>">上一页</a>

				  <a href="?page=<?=$next?>&price=<?=$price?>&caozuoid=<?=$caozuoid?>">下一页</a>
				  <a href="?page=<?=$totle?>&price=<?=$price?>&caozuoid=<?=$caozuoid?>">末页</a>
				  <a href="javascript:;">跳到
					 <select onchange="window.location='?price=<?=$price?>&caozuoid=<?=$caozuoid?>&page='+this.value">
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
				  <a href="" style="float:right; border:0px;">资源总数<?=$tongji?>条</a>

			   </div>
			</div>

			<!--page end-->
			<?php $sex=query("select count(id) from ordertop where user='$user' and tb='tb_zonghe'");$xge=$sex['count(id)'];if($xge==0){$xge=0;}

			   $sexd=listquery("select * from ordertop  where user='$user' and tb='tb_zonghe' order by id desc");
			   foreach ($sexd as $ve){
				  $vid=$ve[cpID];
				  $sexdd=query("select * from tb_zonghe  where id='$vid'");
				  $showxuan.='<a>'.$sexdd['leixing'].'<a>'.'<a href="?del_id='.$ve[id].'"><font color=blue>点击删除</font></a>';
					 }

					 $del_id=$_GET['del_id'];
					 if($del_id){
						mysql_query("delete from ordertop where id='$del_id'");
						exit("<script>window.location.href='list_zonghe.php?caozuoid=pt5';</script>");	
					 }
				  ?>
				  <?php include 'foot.php';?>
			   </form>

			   <?php 
				  $cpID=$_GET['mid'];//产品IP
				  if($cpID){
					 $zz=query("select * from ordertop where user='$user' and cpID='$cpID' and tb='tb_zonghe'");
					 if(!$zz[id]){
						mysql_query("insert into ordertop (tb,cpID,user) values ('tb_zonghe','$cpID','$user')");
						exit("<script>window.location.href='list_zonghe.php?caozuoid=pt5';</script>");
					 }else{
						exit("<script>window.history.go(-1);</script>");
					 } 
				  }
			   ?>
			</body>
		 </html>
