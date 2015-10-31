<?php
include 'head.php';
?>



    <!-- begin page title -->
    <section id="page-title"  style="margin-bottom:20px; ">
    	<div class="container clearfix">
            <h1><strong><?=$row[title]?></strong></h1>
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="/">首页</a> &rsaquo;</li>

                    <li><?=$row[title]?></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- begin page title -->
  <?php
  include 'jsad.php';
  ?>
    <!-- begin content -->
    <section id="content" class="container clearfix">
    	
		 <?php
		  include 'left2.php';
		  ?>
				
        <section>
        	
            
            <div class="one-half column-last" style="line-height:25px;">
            	
               <?=$row[content]?>
            </div>
            <div class="clear"></div>
        </section>
        <!-- begin our company -->
        
        <hr>
        
      
     	<!-- begin clients -->
        <section>
        	
				 <?php
					include 'wdkh.php';
					?>
            
        </section>
        <!-- end clients -->   
    </section>
    <!-- end content -->  
    
      <?php
  include 'foot.php';
  ?>