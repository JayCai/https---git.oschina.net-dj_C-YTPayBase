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
	exit("<script>alert('����������!');window.location.href='zhaohui.php';</script>");
	}
	
	
	
	//******************** ������Ϣ ********************************
	$smtpserver = "smtp.qq.com";//SMTP������
	$smtpserverport =25;//SMTP�������˿�
	$smtpusermail = "pay@531gw.com";//SMTP���������û�����
	$smtpemailto = $_POST['toemail'];//���͸�˭
	$smtpuser = "pay@531gw.com";//SMTP���������û��ʺ�
	$smtppass = "facai1234";//SMTP���������û�����
	
	
	$m=query("select * from user where email='$smtpemailto'");
	if(!$m['id']){
	exit("<script>alert('���䲻��ȷ!');window.location.href='zhaohui.php';</script>");
	}
	$user=$m['user'];//�û���
	$chars="123456";
    $pwdok = str_shuffle($chars);//������� 	
	$pwd=md5($pwdok);
	mysql_query("update user set pwd='$pwd' where email='$smtpemailto'");//�޸ĳ������� 
	
	
	$mailtitle = "������ ����˺������Ѿ����͵�������� ��ע�����";//�ʼ�����
	$mailcontent = "<h1> ������ ����û�����".$user." ������".$pwdok."</h1>";//�ʼ�����
	
	$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
	//************************ ������Ϣ ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
	$smtp->debug = false;//�Ƿ���ʾ���͵ĵ�����Ϣ
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);


	if($state==""){
	exit("<script>alert('�һ�ʧ��!');window.location.href='zhaohui.php';</script>");
		
	}else{
	exit("<script>alert('�뵽�������!');window.location.href='zhaohui.php';</script>");
	}
	
  }
?>