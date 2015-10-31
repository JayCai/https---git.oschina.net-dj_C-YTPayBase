<?php
    require_once "../config.php";
	require_once "email.class.php";
	
	function query($sql){
    $query=mysql_query($sql);
    $row=mysql_fetch_array($query);
	return $row;
   }

	
	if($_POST['submit']){
	
	$toemail=$_POST['toemail'];
	if(empty($toemail)){
	exit("<script>alert('请输入邮箱!');window.location.href='zhaohui.php';</script>");
	}
	
	
	
	//******************** 配置信息 ********************************
	$smtpserver = "smtp.qq.com";//SMTP服务器
	$smtpserverport =25;//SMTP服务器端口
	$smtpusermail = "pay@531gw.com";//SMTP服务器的用户邮箱
	$smtpemailto = $_POST['toemail'];//发送给谁
	$smtpuser = "pay@531gw.com";//SMTP服务器的用户帐号
	$smtppass = "facai1234";//SMTP服务器的用户密码
	
	
	$m=query("select * from user where email='$smtpemailto'");
	if(!$m['id']){
	exit("<script>alert('邮箱不正确!');window.location.href='zhaohui.php';</script>");
	}
	$user=$m['user'];//用户名
	$chars="123456";
    $pwdok = str_shuffle($chars);//随机打乱 	
	$pwd=md5($pwdok);
	mysql_query("update user set pwd='$pwd' where email='$smtpemailto'");//修改成新密码 
	
	
	$mailtitle = "亲您好 你的账号密码已经发送到你的邮箱 请注意查收";//邮件主题
	$mailcontent = "<h1> 亲您好 你的用户名是".$user." 密码是".$pwdok."</h1>";//邮件内容
	
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);


	if($state==""){
	exit("<script>alert('找回失败!');window.location.href='zhaohui.php';</script>");
		
	}else{
	exit("<script>alert('请到邮箱查收!');window.location.href='zhaohui.php';</script>");
	}
	
  }
?>