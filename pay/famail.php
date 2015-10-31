

<?php
   set_time_limit(0);
   require_once "function.php";
   require_once "email.class.php";

   $e=query("select * from email where id=1");
   $adress=$e['adress'];
   $user=$e['user'];
   $pwd=$e['pwd'];
   $shou=$e['shou'];

   $shou=trim($shou);
   $shou = str_replace(array("\r\n", "\r", "\n"), "", $shou);	   
   $shouarr=explode('|',$shou);//数组


   foreach($shouarr as $v){
	  //******************** 配置信息 ********************************
	  $smtpserver = "smtp.exmail.qq.com";//SMTP服务器
	  $smtpserverport =25;//SMTP服务器端口
	  $smtpusermail = $adress;//SMTP服务器的用户邮箱 发送
	  $smtpemailto = $v;//发送给谁
	  $smtpuser = $user;//SMTP服务器的用户帐号 发送
	  $smtppass = $pwd;//SMTP服务器的用户密码 发送


	  $mailtitle = "亲您好 你有新的订单 请注意查收";//邮件主题
	  $mailcontent = "<h1> 亲您好 你有新的订单 请注意查收</h1>";//邮件内容

	  $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	  //************************ 配置信息 ****************************
	  $smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	  $smtp->debug = false;//是否显示发送的调试信息
	  $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

   }

?>

