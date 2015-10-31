<div class="footline"></div>
<div class="foot">
   <div class="foots">
	  <?php
		 $link=listquery("select * from link order by paixu asc");
		 foreach ($link as $v){
		 ?>
		 <a href="<?=$v['url']?>" target="_blank"><?=$v['title']?></a>
		 <?php
		 }
	  ?>	
   </div>
   <div class="foots">
	  <?=$sg['content']?>
   </div>

</div>

<script type="text/javascript" src="js/jquery-1.5.1.js"></script>

<script type="text/javascript"> 
   $(document).ready(function(){

		 $("#top").click(function(){
			   $("#dfskla").slideToggle("fast");
		 });

   });

   function zzxx(){
		 z=document.getElementById("top").innerText;
		 if(z=="(收起↓)"){
			   document.getElementById("top").innerText="(展开↑)";
		 }
		 if(z=="(展开↑)"){
			   document.getElementById("top").innerText="(收起↓)";
		 }
	  }
   </script>


   <!--foot end-->
   <style>
	  .dibuss { height:30px; float:left; width:700px;}
	  .dibuxx { height:30px; float:left;width:700px;}
	  .dibuss a { float:left; margin-right:10px;}
	  .dibuxx a { float:left; margin-right:10px;}
   </style>
   <div id="good" style=" height:auto; overflow:hidden; padding-bottom:10px;">	
	  <div class="float_close">
		 <a style="cursor:pointer; margin-right:20px; color:red; margin-top:5px;" id="top" onclick="zzxx();">(收起↓)</a> 
	  </div>

	  <div class="dibu" id="dfskla" style=" height:auto; overflow:hidden;">
		 <div class="dibuss"  style=" height:auto; overflow:hidden;">
			<a>	
			   当前账户余额: <font color="red">
				  <?php 
					 $zh=query("select * from user where user='$user'");
					 echo $zh['rmb'];
				  ?>元</font>
			</a>
			<a><input name="submitadd" type="submit" value="去购物车结算" class="renbude"></a>
			<a href="./user/chongzhi.php" class="renbude" style="width:58px;">立即充值</a>
		 </div>	
		 <div class="dibuxx"  style=" height:auto; overflow:hidden;">	
			<a>	已选 <?=$xge?>个产品</a>
			<?=$showxuan?>
			<p>
	       <br />
          </p>

		 </div>
	  </div>
   </div>
   <!--浮动代码 end-->

   <div style="display:none;"><a href="http://www.22kdd.com/">站长论坛</a></div>
