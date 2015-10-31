
<table width="1018" height="656"  border="0" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-top:10px;">	  
   <tr>
	  <td height="43"><input name="typezhi" type="radio" value="1" checked="checked"/>方式一：使用在线编辑器提交文章</td>
	  <td></td>
   </tr>	 
   <tr>
	  <td height="415">内容(内容控制在140字内,图片9张内)</td>
	  <td style=" padding-left:2px;"><textarea name="content_zhifa" id="content" style="height:400px; width:600px;"></textarea></td>
   </tr>
   <tr>
	  <td height="71"><input name="typezhi" type="radio" value="2" />方式二：使用文件上传</td>
	  <td>
		 <div style="float:left;"><input type="file" name="file_upload" id="file_upload"  /></div>
		 <div style="float:left; margin-left:50px;"><a href="javascript:$('#file_upload').uploadify('settings', 'formData', {'typeCode':document.getElementById('id_file').value});$('#file_upload').uploadify('upload','*')" style="background-color:#FF0000; color:white;line-height:40px; height:40px;">开始批量上传</a> 仅支持DOC, txt文档 单个文件限制5M内</div>
		 <div style="float:left;"><input type="hidden" value="1215154" name="tmpdir" id="id_file"></div>
		 <div style="float:left;"><span id="show"></span></div>
	  </td>

   </tr>
   <tr>
	  <td height="62">留言</td>
	  <td><textarea name="liuyan_zhifa" style="width:400px; height:80px;"></textarea></td>
   </tr>	
   <!--
   <tr>
	  <td height="16"><input name="cpID" value="<?=$cpID?>" type="text" style="display:none;" /></td>
	  <td><input name="ture_zhifarmb" value="<?=$ture_zhifarmb?>" type="text" style="display:none;" /></td>
	  <td width="133"><input name="orderID" value="<?=$orderID?>" type="text" style="display:none;" /> </td>
	  <td><input name="urmb" value="<?=$rmb?>" type="text" style="display:none;" /></td>
   </tr>
   -->
   <?php
	  $_SESSION['cpID']          =$cpID;
	  $_SESSION['ture_zhifarmb'] =$ture_zhifarmb;
	  $_SESSION['orderID']       =$orderID;
	  $_SESSION['rmb']           =$rmb;
   ?>
   <tr height="40">
	  <td><input name="submitgo" type="submit" value="确认购买" class="anniu" onclick="gotan();" /></td>
   </tr>

</table>

