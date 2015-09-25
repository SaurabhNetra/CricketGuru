<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scheduled</title>
</head>
<?php
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
session_start();
if(!isset($_SESSION["Status"]))
{
	$_SESSION["Status"]=0;
}
if($_SESSION["Status"]==1)
{
?>
<?php
$team1=$_POST['Team1'];
$team2=$_POST['Team2'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$time=$_POST['time'];?>
<?php
$yyyy=substr($date,0,4);
$mm=substr($date,5,2);
$dd=substr($date,8,2);
if($team1==$team2 || $date=="" || $time=="")
{
    header("Location:TeamNames.php");
}
else if($yyyy<date("Y") || ($yyyy==date("Y") && $mm<date("m")) || ($yyyy==date("Y") && $mm==date("m") && $dd<date("d")))
{
	header("Location:TeamNames.php");
}
else
{
$sql=mysql_query("select * from current");
$row=mysql_fetch_array($sql);
$temp=$row["LatestMatchID"];
$temp++;
mysql_query("update current set LatestMatchID=$temp");
mysql_query("insert into schedule values(0,'$team1','$team2','$venue','$date','$time',$temp,1)");
header("Location:adminhome.php");
}
}
else
{?>
<a href='adminvalidation.php'>LOGIN FIRST</a>
<?php
}
?>
<body>
</body>
</html>