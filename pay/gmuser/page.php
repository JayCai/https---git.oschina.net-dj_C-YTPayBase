<?php
   $num = mysql_num_rows($numq); //统计
   $tongji=$num;
		$totle=ceil($num/10); //取得分页总数						
		$page=$_GET[page];	
		$num=($page-1)*10;					
		
		if($page==0){
		$num=0;
		$shang=1;
		$next=2;
		$now=1;
		  
		}else{								
			if($page==1){
			$shang=1;$next=2;$now=1;
			}else{
			$next=$page+1;
			$now=$page;
			$shang=$page-1;	
			}
		} 
		if($totle==1){$next=1;}
		if($next>$totle){$next=$totle;}
?>