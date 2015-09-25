<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Bowler</title>
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
<body>
<?php
$sql=mysql_query("select * from current");
$row=mysql_fetch_array($sql);
$matchid=$row["MatchID"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$bowlno=$row["BowlNo"];
$newbowler=$_POST["newbowler"];
$sql=mysql_query("select * from bowlingcareer where PlayerName='$newbowler'");
$row=mysql_fetch_array($sql);
$inns=$row["Innings"];
$inns++;
$sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and PlayerName='$newbowler' and MatchID=$matchid");
$row=mysql_fetch_array($sql);
if($row["BowlingNumber"]==0)
{
	$bowlno++;
	mysql_query("update bowlingscorecard set BowlingNumber=$bowlno where MatchID=$matchid and PlayerName='$newbowler' and TeamName='$team2'");
}
mysql_query("update current set BowlNo=$bowlno,Bowler='$newbowler'");
mysql_query("update bowlingcareer set Innings=$inns where PlayerName='$newbowler'");
header("Location:BallEvent.php");
}
else
{?>
<a href='adminvalidation.php'>LOGIN FIRST</a>
<?php
}
?>
</body>
</html>