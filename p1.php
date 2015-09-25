<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">
function Ajax(){
var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}
	xmlHttp.onreadystatechange=function(){
		document.getElementById('re').innerHTML=xmlHttp.responseText;
		setTimeout('Ajax()',2000);
	}
	xmlHttp.open("GET","index1.php",true);
	xmlHttp.send(null); 
}
window.onload=function(){
	setTimeout('Ajax()',2000);
}
</script>
<body>
<?php $i=1;?>
<div id="re">
<?php $i++; echo $i;?>
</div>
</body>
</html>