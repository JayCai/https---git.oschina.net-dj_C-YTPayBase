
 function hide(a){
  document.getElementById(a).style.display="none"; }

function check()
{
	var str=document.getElementsByName("numid[]");
	var objarray=str.length;
	var a=0;
		for (i=0;i<objarray;i++)
		{
			  if(str[i].checked == true)
			  {
			   a++; 
			  }
			  
		  }
	 
	document.getElementById('yixuan').innerText=a;//多少个
}

//选中发布

function naselect (){
	 var myselect=document.getElementById("select"); 
	 var index=myselect.selectedIndex ; 
	 var a=myselect.options[index].value; 
	 
	document.getElementById("option").value=a;//设值
	document.getElementById("option").innerText=a; //显示
	}
//拿select

//ajax请求实例

function qingqiu(a,b,c){
	
	document.getElementById(a).style.display="block";//
	document.getElementById(b).style.display="none";//
	document.getElementById(c).style.display="none";//
	
	
	}
	
	
