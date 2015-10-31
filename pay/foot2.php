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

<!--foot end-->

<style type="text/css" >
   #dxx{  
		 position: fixed;/*层漂浮*/  
		 top:50%;  
		 left:50%;  
		 width:200px;  
		 height:60px;  
		 margin-top:-100px;/*注意这里必须是DIV高度的一半*/  
		 margin-left:-100px;/*这里是DIV宽度的一半*/  
		 background:yellow;  
		 border:1px solid red;
		 line-height:60px;
		 text-align:center;
		 color:blue;
		 font-size:18px;
		 display:none;
	  }

</style>

<div id="dxx">
   正在付款请稍等...
</div>


