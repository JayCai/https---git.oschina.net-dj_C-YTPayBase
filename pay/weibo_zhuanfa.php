
<table width="1018" height="215"  border="0" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-top:10px;">	  

   <tr>
	  <td width="259" height="35">转发链接</td>
	  <td width="626"><input name="zhuanfalink" type="text" size="60" /></td>
   </tr>
   <tr>
	  <td height="60">转发语</td>
	  <td style=" padding-left:2px;"><textarea name="zhuanfayu" id="content" style="width:600px;" ></textarea></td>
   </tr>	 
   <tr>
	  <td height="62">留言</td>
	  <td><textarea name="liuyan_zhuanfa"  style="width:600px;"></textarea></td>
   </tr>	
   <!--
   <tr>
	  <td height="16"><input name="cpID" value="<?=$cpID?>" type="text" style="display:none;" /></td>
	  <td><input name="ture_zhuanfarmb" value="<?=$ture_zhuanfarmb?>" type="text" style="display:none;" /></td>
	  <td width="133"><input name="orderID" value="<?=$orderID?>" type="text" style="display:none;" /> </td>
	  <td><input name="urmb" value="<?=$rmb?>" type="text" style="display:none;" /></td>
   </tr>
   -->
   <?php
	  $_SESSION['cpID']            =$cpID;
	  $_SESSION['ture_zhuanfarmb'] =$ture_zhuanfarmb;
	  $_SESSION['orderID']         =$orderID;
	  $_SESSION['rmb']             =$rmb;
   ?>
   <tr height="40">
	  <td><input name="submitgo" type="submit" value="确认购买" class="anniu" onclick="gotan();" /></td>
   </tr>

</table>

