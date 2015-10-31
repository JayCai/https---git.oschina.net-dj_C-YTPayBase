<?php include 'yanzheng.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <title>会员中心_易推网络</title>
	  <link rel="stylesheet" type="text/css" href="../css/css.css">
	  <link rel="stylesheet" type="text/css" href="css.css">
	  <script>
		 function gaibian(a,b){
			   document.getElementById("fangshi").value=a; 
			   document.getElementById("gai").action=b; 

		 }

		 function Checks()
		 {
			   var u= document.getElementById("jinqian").value; 
			   if(u==""){
					 alert('请输入充值金额!');
			   }
		 }


		 function chuanbk(a){
			   document.getElementById("bk").value=a;  
		 }
	  </script>
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
			   <form name=alipayment action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method=post target="_blank" id="gai">
				  <input size="30" name="WIDout_trade_no" style="display:none" value="<?=date("Ymdhis")?>" /><!--商户订单号-->
				  <input size="30" name="WIDsubject" style="display:none" value="账户充值"  /><!--项目名称title-->
				  <input size="30" name="WIDbody" style="display:none" id="fangshi" /><!--订单描述-->
				  <input size="30" name="user" style="display:none" value="<?=$user?>"/><!--用户名-->
				  <input size="30" name="WIDdefaultbank" value="CCB" style="display:none;" id="bk" /><!--银行简码-->
				  <table width="783" height="195" >
					 <tr>
						<td width="167" height="30" style="color:#0066CC; font-size:16px;"></td>
						<td width="604">账户充值&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;账户剩余：<?=$myuser[rmb]?> 元 </td>

					 </tr>

					 <tr>
						<td width="167" height="30"></td>
						<td width="604">充值金额<input size="30" name="WIDtotal_fee" style="width:60px; text-align:center;" id="jinqian"  /> <font color="red">元</font></td>
					 </tr>							
					 <tr>
						<td height="30"></td>
						<td>选择充值方式									
						</td>
					 </tr>

					 <tr>
						<td height="30"></td>
						<td>
						   &nbsp;&nbsp;<input name="yh" type="radio" value="alipay" onclick="gaibian('支付宝','../alipay/alipayapi.php');" /><img src="img/zhifubao.png" />
						</td>
					 </tr>


					 <tr>
						<td height="30"></td>
						<td><div id="shenme">
							  <table width="700" border="0" cellspacing="0" cellpadding="10">
								 <tr>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('CCB');gaibian('网银','../bank/alipayapi.php');" />中国建行银行<img src="img/jianhang.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('ABC');gaibian('网银','../bank/alipayapi.php');" />中国农业银行<img src="img/nongye.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('ICBCB2C');gaibian('网银','../bank/alipayapi.php');" />中国工商银行<img src="img/gonghang.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('BOCB2C');gaibian('网银','../bank/alipayapi.php');" />中国银行<img src="img/chianbank.gif" /></td>

								 </tr>
								 <tr>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('PSBC-DEBIT');gaibian('网银','../bank/alipayapi.php');" />中国邮政<img src="img/youzheng.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('COMM');gaibian('网银','../bank/alipayapi.php');" />交通银行<img src="img/jiaotong.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('CMBC');gaibian('网银','../bank/alipayapi.php');" />民生银行<img src="img/mingsheng.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('SPDB');gaibian('网银','../bank/alipayapi.php');" />浦发银行<img src="img/pufa.jpg" /></td>

								 </tr>
								 <tr>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('GDB');gaibian('网银','../bank/alipayapi.php');" />广发银行<img src="img/guangfa.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('CEBBANK');gaibian('网银','../bank/alipayapi.php');" />光大银行<img src="img/guangda.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('CMB');gaibian('网银','../bank/alipayapi.php');" />招商银行<img src="img/zhaoshang.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('CIB');gaibian('网银','../bank/alipayapi.php');" />兴业银行<img src="img/xingye.png" /></td>

								 </tr>
								 <tr>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('CITIC');gaibian('网银','../bank/alipayapi.php');" />中信银行<img src="img/zhongxin.gif" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('SPABANK');gaibian('网银','../bank/alipayapi.php');" />平安银行<img src="img/pingan.png" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('SHBANK');gaibian('网银','../bank/alipayapi.php');" />上海银行<img src="img/shanghai.jpg" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('NBBANK');gaibian('网银','../bank/alipayapi.php');" />宁波银行<img src="img/ningbo.jpg" /></td>

								 </tr>
								 <tr>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('HZCBB2C');gaibian('网银','../bank/alipayapi.php');" />杭州银行<img src="img/hangzhou.jpg" /></td>
									<td><input name="yh" type="radio" value="CCB" onclick="chuanbk('BJBANK');gaibian('网银','../bank/alipayapi.php');" />北京银行<img src="img/beijing.gif" /></td>
									<td></td>

								 </tr>
							  </table>
						   </div>
						</td>
					 </tr>

					 <tr>
						<td height="30"></td>
						<td><button class="new-btn-login" type="submit" style="text-align:center; background-color: #FF0000; color:#FFFFFF; line-height:25px;" onclick="Checks();">确认充值</button></td>
					 </tr>

				  </table>
			   </form>
			</div>
		 </div>
	  </div>

	  <?php
		 include 'foot.php';
	  ?>

   </body>
</html>
