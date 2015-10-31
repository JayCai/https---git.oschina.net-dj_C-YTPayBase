<?php require_once 'seo.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <title>论坛套餐_<?=$sg['sitename']?></title>
	  <meta name="keywords" content="<?=$sg['keywords']?>" />
	  <meta name="description" content="<?=$sg['description']?>" />
	  <link href="css/css.css" rel="stylesheet" type="text/css" />
	  <link href="foot.css" rel="stylesheet" type="text/css" />
	  <link rel = "Shortcut Icon" href="favicon.ico" /> 
	  <script type="text/javascript" src="js/index.js"></script> 
   </head>

   <body>
	  <?php include 'head.php';?>
	  <?php

		 $bbsleixing=$_GET['bbsleixing'];
		 $zhouqi=$_GET['zhouqi'];
		 $shoulu=$_GET['shoulu'];
		 $price=$_GET['price'];


		 if($bbsleixing){
			$_SESSION['sql_news'][0]='  bbsleixing="'.$bbsleixing.'"';
			$_SESSION['show'][0]=$bbsleixing;
		 }
		 if($zhouqi){
			$_SESSION['sql_news'][1]='  zhouqi="'.$zhouqi.'"';
			$_SESSION['show'][1]=$zhouqi;
		 }

		 if($shoulu){
			$_SESSION['sql_news'][2]='  shoulu="'.$shoulu.'"';
			$_SESSION['show'][2]=$shoulu;
		 }

		 if($price){
			switch($price){ 
			   case 100: 
			   $_SESSION['sql_news'][3]='  price <=100';
			   $_SESSION['show'][3]="100";
			   break; 
			   case 200: 
			   $_SESSION['sql_news'][3]='  price between 100 and 200';	
			   $_SESSION['show'][3]="200";
			   break; 	
			   case 500: 
			   $_SESSION['sql_news'][3]='  price between 200 and 500';	
			   $_SESSION['show'][3]="500";
			   break; 	
			   case 1000: 
			   $_SESSION['sql_news'][3]='  price between 500 and 1000';	
			   $_SESSION['show'][3]="1000";
			   break; 	
			   case 1001: 
			   $_SESSION['sql_news'][3]='  fensi > 1000';
			   $_SESSION['show'][3]="1001";
			   break;	
			} 
		 }



		 $sa=$_SESSION['sql_news'];
		 foreach($sa as $sv){
			$m.=' and '.$sv; //SQL 语句的连贯操作
		 }
		 $f='-'.$m; //组合SQL语句
		 $m=str_replace("- and"," where ",$f); //替换第一个 


		 $caozuoid=$_GET['caozuoid'];
		 if($caozuoid){
			$_SESSION['sql_news']="";
			$_SESSION['show']="";
			$m="";
		 }

		 $xuanzhong=$_SESSION['show'];
	  ?>
	  <script>
		 window.onload=function (){
			   <?php
				  foreach($xuanzhong as $xv){ 
					 echo 'document.getElementById("'.$xv.'").className="bian";';
					 echo 'document.getElementById("'.$xv.'").style.color="white";';
				  }
			   ?>
			}
		 </script>
		 <!--head end-->
		 <div class="bnav">
			<a  class="bian" href="list_bbs.php?caozuoid=pt8"><font color="#FFFFFF">论坛类型</font></a>
			<a href="?bbsleixing=大型论坛" id="大型论坛">大型论坛</a>
			<a href="?bbsleixing=中小论坛" id="中小论坛">中小论坛</a>	
		 </div>
		 <div class="bnav">
			<a  class="bian" href="list_bbs.php?caozuoid=pt8"><font color="#FFFFFF">周期</font></a>
			<a href="?zhouqi=一次" id="一次">一次</a>
			<a href="?zhouqi=一周" id="一周">一周</a>
			<a href="?zhouqi=一个月" id="一个月">一个月</a>	
			<a href="?zhouqi=一季度" id="一季度">一季度</a>	
			<a href="?zhouqi=一年" id="一年">一年</a>		
		 </div>
		 <div class="bnav">
			<a  class="bian" href="list_bbs.php?caozuoid=pt8"><font color="#FFFFFF">是否收录</font></a>
			<a href="?shoulu=是" id="是">是</a>
			<a href="?shoulu=否" id="否">否</a>
			<a href="?shoulu=不确定" id="不确定">不确定</a>	

		 </div>
		 <div class="bnav">
			<a  class="bian" href="list_bbs.php?caozuoid=pt8"><font color="#FFFFFF">价格分类</font></a>
			<a href="?price=100" id="100">0-100元 </a>
			<a href="?price=200" id="200">100-200元 </a>	
			<a href="?price=500" id="500">200-500元</a>
			<a href="?price=1000" id="1000">500-1000元</a>
			<a href="?price=1001" id="1001">1000元以上</a>	  
		 </div>
		 <!--fenlei end-->
		 <!--fenlei end-->
		 <table class="table_weibo_nav" border="0" cellspacing="0" cellpadding="0" >
			<tr>
			   <td width="120" style=" padding-left:10px;">选择</td>
			   <td width="120">论坛套餐</td>      
			   <td width="120">论坛类型</td>
			   <td width="100">发布条数</td>
			   <td width="80">周期</td>	
			   <td width="70">会员价</td>
			   <td width="180">是否收录</td>
			   <td width="100">备注</td>
			</tr>
		 </table>
		 <form action="add_bbs.php" method="post">
			<table class="table_weibo_list"  border="0" cellspacing="0" cellpadding="0" >
			   <?php
				  $numq=mysql_query("select id from tb_bbs $m");
				  include 'page.php';
				  $row=listquery("select * from tb_bbs $m order by id desc limit ".$num.",20");
				  foreach ($row as $v){
				  ?>
				  <tr onmousemove="changeTrColor(this)">
					 <td width="127" ><a href="?mid=<?=$v[id]?>" class="renbude" style="width:70px; margin-left:5px; ">加入购物车</a></td>
					 <td width="240"><?=$v['bbstaocan']?></td>   
					 <td width="180"><?=$v['bbsleixing']?></td> 
					 <td width="140"><?=$v['fabutiao']?></td>   
					 <td width="120"><?=$v['zhouqi']?></td>	
					 <td width="140"><?=$v['price']?> 元</td>
					 <td width="120"><?=$v['shoulu']?> </td>
					 <td width="250"><?=$v['beizhu']?> </td>
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
			<?php $sex=query("select count(id) from ordertop where user='$user' and tb='tb_bbs'");$xge=$sex['count(id)'];if($xge==0){$xge=0;}

			   $sexd=listquery("select * from ordertop  where user='$user' and tb='tb_bbs' order by id desc");
			   foreach ($sexd as $ve){
				  $vid=$ve[cpID];
				  $sexdd=query("select * from tb_bbs  where id='$vid'");
				  $showxuan.='<a>'.$sexdd['bbstaocan'].'<a>'.'<a href="?del_id='.$ve[id].'"><font color=blue>点击删除</font></a>';
					 }

					 $del_id=$_GET['del_id'];
					 if($del_id){
						mysql_query("delete from ordertop where id='$del_id'");
						exit("<script>window.location.href='list_bbs.php?caozuoid=pt8';</script>");	
					 }
				  ?>
				  <?php include 'foot.php';?>
			   </form>

			   <?php 
				  $cpID=$_GET['mid'];//产品IP
				  if($cpID){
					 $zz=query("select * from ordertop where user='$user' and cpID='$cpID' and tb='tb_bbs'");
					 if(!$zz[id]){
						mysql_query("insert into ordertop (tb,cpID,user) values ('tb_bbs','$cpID','$user')");
						exit("<script>window.location.href='list_bbs.php?caozuoid=pt8';</script>");
					 }else{
						exit("<script>window.history.go(-1);</script>");
					 } 
				  }
			   ?>
			</body>
		 </html>
