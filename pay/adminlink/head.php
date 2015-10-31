<script language="javascript" type="text/javascript">
   function preg_match(regStr, str)
   {
		 var objRegExp = new RegExp(regStr);
		 return objRegExp.test(str);
   }
   function SelectAll(form)
   {
		 for(var j = 0;j < form.elements.length;j++)
		 {
			   var e = form.elements[j];
			   if(preg_match(/del_id/, e.name))
			   {
					 e.checked = form.select_all.checked;
			   }
			   else
			   {
					 continue;
			   }
		 }
   }
</script>

<script>
   window.onload=function (){
		 <?php
			$caozuoid=$_GET['caozuoid'];
			if($caozuoid){
			   echo 'document.getElementById("'.$caozuoid.'").className="shai";';
			   echo 'document.getElementById("'.$caozuoid.'").style.color="white";';
			}
		 ?>
   }
</script>

<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>

<script>
   var editor;
   KindEditor.ready(function(K) {
		 editor = K.create('textarea[name="taocanzy"]', { })}
   );
</script>

<script>
   var editor;
   KindEditor.ready(function(K) { editor = K.create('textarea[name="content"]', {})});
</script>

<script>
   function xianshi(){
		 n=document.getElementById("xian").value;
		 document.getElementById("urlxian").href="?pageso="+n;

   }
</script>

<?php 
   include '../config.php';
   include '../function.php';
   $myuser=query("select * from admin where user='$user'");

?>
<div class="admin_top">

   外链后台管理系统
</div>

<script>
   function getdan (){
		 var myselect=document.getElementById("liebiao"); 
		 var index=myselect.selectedIndex ; 
		 var a=myselect.options[index].value; 

		 s=document.getElementById("type").innerText;
		 if(s=="已退单"){
			   document.getElementById("caozuo").style.display="none";
		 }
		 if(s=="交易成功"){
			   document.getElementById("caozuo").style.display="none";
		 }
   }
   //拿select
</script>

