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
		 $rmbli=listquery("select * from user where rmb>0 ");			
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
			   <form name="del_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				  <table width="953" height="38" border="0" cellpadding="0" cellspacing="0" class="order3">
					 <tr>
						<td > 时间</td>
						<td > 标题</td>				
						<td > 内容</td>				
					 </tr>

					 <?php
						$sqle="select * from gonggao ";
						$numq=mysql_query($sqle);

						require_once 'page.php';
						$list=listquery("select * from gonggao order by id desc limit ".$num.",20");			

						//echo '<script>alert('.$list.');</script>' ;
						foreach($list as $v){				 
						?>

						<tr>
						   <td width="150"> <input  name="del_id[]" type="checkbox" id="del_id[]" value="<?=$v['id']?>" /> <?= $v['time'] ?> </td>
						   <td width="96"> <?= $v['title'] ?> </td>
						   <td> <?= $v['content'] ?> </td>
						</tr>
						<?php			
						}
					 ?>
				  </table>

				  <table width="953" height="38" border="0" cellpadding="0" cellspacing="0" class="order3">
					 <tr>
						<td>
						   <a href="?page=0">首页</a>
						   <a href="?page=<?=$shang?>">上一页</a>				  
						   <a href="?page=<?=$next?>">下一页</a>
						   <a href="?page=<?=$totle?>">末页</a>
						   <a href="javascript:;">跳到
							  <select onchange="window.location='?page='+this.value">
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
						</td>
					 </tr>
				  </table>

				  <table width="1156" border="0" cellspacing="0" cellpadding="0" height="30" class="usertable" style="margin-top:10px; border:0px;">
					 <tr>
						<td width="80"> <input id="select_all" name="select_all" type="checkbox" value="1" onClick="SelectAll(this.form)"/> 全选</td>

						<td width="154"> <input name="submitdel" type="submit" value="批量删除" class="reganniu" /></td>	
						<td width="724"></td>
					 </tr>
				  </table>

			   </form>
			</div>
			<!--right-->
		 </div>
	  </div>

	  <!--批量删除-->
	  <?php
		 if($_POST['submitdel'])
		 {
			$del_id=$_POST['del_id'];

			//print_r( $del_id ) ;

			if($del_id!="")
			{ 
			   $del_num=count($del_id); 
			   //echo '<script>alert('.$del_num.');</script>' ;

			   for($i=0;$i<$del_num;$i++){ 

				  //echo '<script>alert('.$del_id[$i].');</script>' ;

				  mysql_query("Delete from gonggao where id='$del_id[$i]'"); 				
			   }  
			   exit("<script>alert('删除成功!');window.location.href='gonggaolishi';</script>");
			}
			else
			{ 
			   exit("<script>alert('请选择!');window.location.href='gonggaolishi';</script>");
			}

		 }
	  ?>  
	  <!--批量删除-->

	  <?php
		 include 'foot.php';
	  ?>



   </body>
</html>



