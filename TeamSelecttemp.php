<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Team Select</title>
</head>
<h2>Select the playing 11 of Both Teams</h2>
<body>
<?php
session_start();
if(!isset($_SESSION["Status"]))
{
	$_SESSION["Status"]=0;
}
if($_SESSION["Status"]==1)
{
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$proceed=1;
if(isset($_POST['startmatch']))
{
	if($_POST['startmatch']=='No Matches Scheduled')
	{
		header("Location:adminhome.php");
	}
}
if(isset($_POST['startmatch']))
{
$id=substr($_POST['startmatch'],0,1);
mysql_query("update schedule set Status=0 where SID=$id and Status=1");
$sql=mysql_query("select * from schedule where SID=$id and Status=0");
$row=mysql_fetch_array($sql);
}
else
{
$sql=mysql_query("select * from current");
$row=mysql_fetch_array($sql);
$matchid=$row["MatchID"];
$sql=mysql_query("select * from schedule where MatchID=$matchid");
$row=mysql_fetch_array($sql);	
}
$matchid=$row["MatchID"];
$team1=$row['Team1'];
$team2=$row['Team2'];
mysql_query("update current set Team1='$team1',Team2='$team2',MatchID=$matchid");
$sql=mysql_query("Select name from player where teamname='$team1'");?>
<form action="Toss.php" method="post">
<table>
<tr>
<td valign="top">
<table>
<tr>
<td>
<?php echo $team1;?>
</td>
</tr>
<?php
$c=100;
$d=1000;
while($row=mysql_fetch_array($sql))
  {
	 $i=$row['name'];?>
<tr>
<td>
<input name="<?php echo $d;?>" type="checkbox"/>
</td>
<td>
<input name="<?php echo $c;?>" type="text" readonly value="<?php echo $i;?>"/>
</td>
</tr>
<?php
	 $c++;
	 $d++;
  } 
 ?>
</table>
</td>
<td valign="top">
<table>
<tr>
<td>
<?php echo $team2;?>
</td>
</tr>
<?php
$sql=mysql_query("Select name from player where teamname='$team2'");
$c=200;
$d=2000;
 while($row=mysql_fetch_array($sql))
  {
	  $i=$row['name'];?>
<tr>
<td>
<input name="<?php echo $d;?>" type="checkbox"/>
</td>
<td>
<input name="<?php echo $c;?>" type="text" readonly value="<?php echo $i;?>"/>
</td>
</tr>
<?php
	 $c++;
	 $d++;
  } 
?>
</table>
</td>
</tr>
<tr>
<td>
<input type="submit" value="Confirm" />
</td>
</tr>
</table>
</form>
<?php 
}
else
{?>
<a href='adminvalidation.php'>LOGIN FIRST</a>
<?php
}
?>
</body>
</html>