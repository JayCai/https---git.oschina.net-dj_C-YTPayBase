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
	<form action="souser.php" method="get">
	 <table width="899" height="65" >
		  <tr>
			<td width="99" height="18" style="color:#0066CC;">搜索用户</td>			
		  </tr>		 
		  <tr>
			<td width="99" height="30">输入用户名</td>
			<td width="168"><input name="username" type="text"  /></td>
			<td width="616"><input name="submitso" type="submit" class="reganniu"  value="搜索" /></td>
		  </tr>
		  <tr height="30"></tr>
	  </table>
	 </form>
	 <!--上面是搜索用户--> 
	
	<form name="del_form" action="" method="post">
	<table width="1156" border="0" cellspacing="0" cellpadding="0" height="69" class="listtable">
	  <tr>
		<td width="106" height="36">选择</td>
		<td width="121">用户名</td>
		<td width="119">账号金额 </td>
		<td width="128">QQ </td>
		<td width="123">电话</td>
		<td width="231">邮箱</td>
		<td width="104">&nbsp;</td>
		<td width="114">权限</td>
		<td width="108">删除</td>
	  </tr>
	   <?php
	   
	  $numq=mysql_query("select * from user");
      $num = mysql_num_rows($numq); //统计

		$totle=ceil($num/10); //取得分页总数						
		$page=$_GET[page];	
		$num=($page-1)*10;					
		
		if($page==0){
		$num=0;
		$shang=1;
		$next=2;
		$now=1;
		  
		}else{								
			if($page==1){
			$shang=1;$next=2;$now=1;
			}else{
			$next=$page+1;
			$now=$page;
			$shang=$page-1;	
			}
		} 
		if($totle==1){$next=1;}
		if($next>$totle){$next=$totle;}
	   
	  $row=listquery("select * from user order by id desc  limit ".$num.",10");
	  foreach ($row as $v){
	  ?>
	   <tr>
		<td width="106" height="33"><input  name="del_id[]" type="checkbox" id="del_id[]" value="<?=$v['user']?>" /></td><input  name="user[]" type="text" id="user[]" value="<?=$v['user']?>" style="display:none;" />
		<td width="121"><a href="souser.php?username=<?=$v[user]?>"><font color="blue"><?=$v[user]?></font></a></td>
		<td width="119"><?=$v[rmb]?> </td>
		<td width="128"><?=$v[qq]?> </td>
		<td width="123"><?=$v[tel]?></td>
		<td width="231"><?=$v[email]?></td>
		<td width="104">&nbsp;</td>
		<td width="114">
			<select name="level[]">
			 <option value="<?=$v['level']?>"><?=$v['level']?></option>
				<?php
				$h="select * from level";
				$hh=mysql_query($h);
				while($rowh=mysql_fetch_array($hh)){
				?>
				<option value="<?=$rowh['level']?>"><?=$rowh['level']?></option>
				<?php
				 } 
				 ?>
		   </select>  
		</td>
		<td width="108"><a href="?delid=<?=$v[id]?>">删除</a></td>
	  </tr>
	<?php
	  }
	  ?> 
	</table>

	
	  <table width="1156" border="0" cellspacing="0" cellpadding="0" height="30" class="usertable" style="margin-top:10px;border:0px;">
	  <tr>
		<td width="64"><a href="?page=0">首页</a></td>
		<td width="72"><a href="?page=<?=$shang?>">上一页</a></td>
		<td width="76"><a href="?page=<?=$next?>">下一页</a></td>
		<td width="82"><a href="?page=<?=$totle?>">末页</a></td>	
		<td width="133"> 跳到：
       <select onchange="window.location='user.php?page='+this.value">
			<?php
			for($i=1;$i<=$totle;$i++){ 
			 echo "<option value='$i'>$i</option>\n"; 
			} 
			?>
		</select>
		页</td>	
		<td width="727"></td>
	  </tr>
	  </table>
	  <table width="1156" border="0" cellspacing="0" cellpadding="0" height="30" class="usertable" style="margin-top:10px; border:0px;">
	  <tr>
		<td width="128"> <input id="select_all" name="select_all" type="checkbox" value="1" onClick="SelectAll(this.form)"/> 全选</td>
		<td width="148"> <input name="submitset" type="submit" value="批量设置权限" class="reganniu" /></td>
		<td width="154"> <input name="submit" type="submit" value="批量删除" class="reganniu" /></td>	
		<td width="724"></td>
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

$del_id=$_POST['del_id'];//用户名
     if($del_id!=""){ 
            foreach ($del_id as $key=>$s){
			
                 mysql_query("Delete from user where user='$del_id[$key]'"); 
				
             }  
            exit("<script>alert('删除成功!');window.location.href='user.php';</script>");
      }else{ 
            exit("<script>alert('请选择!');window.location.href='user.php';</script>");
      }

  }
?>  

 <!--批量删除-->
 
<?php
if($_GET['delid']){

 $id=$_GET['delid'];
 mysql_query("Delete from user where id='$id'"); 
		
 exit("<script>alert('删除成功!');window.location.href='user.php';</script>");
  

}
?>  

 <!--单个删除-->
 
    <?php
if($_POST['submitset']){

$user=$_POST['user'];//用户数组 
$level=$_POST['level'];//级别数组


     if($user!=""){ 
            foreach ($user as $key=>$s){
			
                 mysql_query("update  user set level='$level[$key]' where user='$user[$key]'"); 
				
             }  
            exit("<script>alert('操作成功!');window.location.href='user.php';</script>");
      }else{ 
            exit("<script>alert('请选择!');window.location.href='user.php';</script>");
      }

  }
?>  

 <!--批量设置权限-->
 
 
 
 
 
 
 
 