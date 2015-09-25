<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$pass='abcd';
$i=rand()%9+1;
$j=0;
while($j<$i)
{
	$pass=md5($pass);
	$j++;
}
$pass=$i.substr($pass,0,31);
mysql_query("update login set password='$pass'");
?>
<body>
</body>
</html>