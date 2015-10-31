<div class="footline"></div>
<div class="foot">
  <div class="foots">
    <?php
  $link=listquery("select * from link order by paixu asc");
  foreach ($link as $v){
  ?>
    <a href="<?=$v['url']?>
      " target="_blank">
      <?=$v['title']?></a>
    <?php
  }
  ?></div>
  <div class="foots">
    <?=$sg['content']?></div>

</div>

<!--foot end-->