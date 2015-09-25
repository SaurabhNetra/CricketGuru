<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ball Event</title>
</head>
<?php
session_start();
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
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
$ball=$row["BallsBowled"];
$matchid=$row["MatchID"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$batno=$row["BatNo"];
$bowlno=$row["BowlNo"];
if($ball==0)
{
	$batno++;
	$striker=$_POST["striker"];
	$nonstriker=$_POST["nonstriker"];
	$bowler=$_POST["bowler"];
	mysql_query("update battingscorecard set BattingNumber=$batno where MatchID='$matchid' and PlayerName='$striker' and TeamName='$team1'");
	$batno++;
	mysql_query("update battingscorecard set BattingNumber=$batno where MatchID='$matchid' and PlayerName='$nonstriker' and TeamName='$team1'");
	mysql_query("update current set BatNo=$batno");
	$bowlno++;
	mysql_query("update bowlingscorecard set BowlingNumber=$bowlno where MatchID='$matchid' and PlayerName='$bowler' and TeamName='$team2'");
	mysql_query("update current set BowlNo=$bowlno");
	$sql=mysql_query("select * from battingcareer where PlayerName='$striker'");
	$row=mysql_fetch_array($sql);
	$inn=$row["Innings"];
	$inn++;
	mysql_query("update battingcareer set Innings=$inn where PlayerName='$striker'");
	$sql=mysql_query("select * from battingcareer where PlayerName='$nonstriker'");
	$row=mysql_fetch_array($sql);
	$inn=$row["Innings"];
	$inn++;
	mysql_query("update battingcareer set Innings=$inn where PlayerName='$nonstriker'");
	$sql=mysql_query("select * from bowlingcareer where PlayerName='$bowler'");
	$row=mysql_fetch_array($sql);
	$inn=$row["Innings"];
	$inn++;
	mysql_query("update bowlingcareer set Innings=$inn where PlayerName='$bowler'");
	mysql_query("update current set Striker='$striker',NonStriker='$nonstriker',Bowler='$bowler'");
}
	$sql=mysql_query("select * from current");
    $row=mysql_fetch_array($sql);
	$striker=$row["Striker"];
    $nonstriker=$row["NonStriker"];
    $bowler=$row["Bowler"];
	mysql_query("update current set Striker='$striker',NonStriker='$nonstriker',Bowler='$bowler'");
	$ball++;
	mysql_query("update current set BallsBowled=$ball");
echo '<form action="EventEvaluate.php" method="post">Striker : '.$striker.'<br/>Non-Striker : '.$nonstriker.'<br/>Bowler : '.$bowler.'<br/>Ball No. '.$ball.'<br/>';
echo 'Runs : <select name="runs"><option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option></select>';
echo '     Wicket : <select name="wicket"><option>None</option><option>Bowled</option><option>LBW</option><option>Caught</option><option>Run Out</option><option>Stumped</option></select>';
echo 'Extra : <select name="extra"><option>None</option><option>No Ball</option><option>Wide</option><option>Byes</option><option>Leg Byes</option></select>';
echo '<input name="" type="submit" value="Confirm" /><br/>';
echo 'IF Wicket Has Fallen : <br/>';
echo 'Batsman Out : <select name="outbatsman"><option>'.$striker.'</option><option>'.$nonstriker.'</option></select><br/>';
$sql=mysql_query("select *from battingscorecard where BattingNumber=0 and TeamName='$team1' and MatchID=$matchid");
echo 'New Batsman : ';
echo '<select name="batsmanin">';
while($row=mysql_fetch_array($sql))
{
	echo '<option>'.$row["PlayerName"].'</option>';
}
echo '</select><br/>';
echo 'Fielder Involved in the Wicket : ';
$sql=mysql_query("select *from bowlingscorecard where TeamName='$team2' and MatchID=$matchid");
echo '<select name="fielder">';
echo '<option>None</option>';
while($row=mysql_fetch_array($sql))
{
	echo '<option>'.$row["PlayerName"].'</option>';
}
echo '</select></form>';
?>
<?php
}
else
{
echo "<a href='adminvalidation.php'>LOGIN FIRST</a>";
}
?>
</body>
</html>