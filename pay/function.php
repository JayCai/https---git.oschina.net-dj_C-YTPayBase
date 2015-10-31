<?php
   include 'config.php';
   function query($sql){
	  $query=mysql_query($sql);
	  $row=mysql_fetch_array($query);
	  return $row;
   }

   function listquery($sql){
	  $query=mysql_query($sql);
	  while($row=mysql_fetch_array($query)){

		 $a[]=$row;;
	  }	
	  return $a;
   }


?>
