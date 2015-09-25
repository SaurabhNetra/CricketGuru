<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loop Evaluate</title>
</head>
<?php
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
session_start();
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
if(!isset($_SESSION["Status"]))
{
	$_SESSION["Status"]=0;
}
if($_SESSION["Status"]==1)
{?>
<body>
<?php
echo "Ball Event Successfully Updated<br/>";
$sql=mysql_query("select * from current");
$row=mysql_fetch_array($sql);
$sid=$row["SID"];
$matchid=$row["MatchID"];
$striker=$row["Striker"];
$nonstriker=$row["NonStriker"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$bowler=$row["Bowler"];
$lball=$row["LegalBallsBowled"];
$totalballs=$row["TotalBalls"];
$inno=$row["InnNo"];
$score=$row["Score"];
$wicketsfallen=$row["WicketsFallen"];
$score=$row["Score"];
$extras=$row["Extras"];
$target=$row["Target"];
$overruns=$row["OverRuns"];
$eq=$target-1;
if($lball%6==0 && $overruns==0 && $lball!=0)
{
	$sql=mysql_query("select * from bowlingscorecard where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	$row=mysql_fetch_array($sql);
	$maidens=$row["Maidens"];
	$maidens++;
mysql_query("update bowlingscorecard set Maidens=$maidens where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
$sql=mysql_query("select * from bowlingcareer where PlayerName='$bowler'");
	$row=mysql_fetch_array($sql);
	$bwcmaidens=$row["Maidens"];
	$bwcmaidens++;
mysql_query("update bowlingcareer set Maidens=$bwcmaidens where PlayerName='$bowler'");
}
if($lball%6==0 && $lball!=0)
{
	mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");
	mysql_query("update current set OverRuns=0");
}
if(($totalballs==$lball || $wicketsfallen==10) && $inno==1)
{
	$temp=$score;
	$temp++;
	mysql_query("update livematch set TeamAScore=$score where MatchID=$matchid");
	mysql_query("update livematch set TeamABalls=$lball where MatchID=$matchid");
	mysql_query("update livematch set TeamAExtras=$extras where MatchID=$matchid");
	mysql_query("update livematch set TeamAWickets=$wicketsfallen where MatchID=$matchid");
	mysql_query("update current set InnNo=2");
	mysql_query("update current set BallsBowled=0");
    mysql_query("update current set LegalBallsBowled=0");
    mysql_query("update current set WicketsFallen=0");
	mysql_query("update current set Target='$temp'");
    mysql_query("update current set Score=0");
    mysql_query("update current set BatNo=0");
    mysql_query("update current set BowlNo=0");
    mysql_query("update current set Extras=0");
	mysql_query("update current set OverRuns=0");
	mysql_query("update current set SID=0");
	echo '1st Innings Over<br/>';
	echo '<a href=InningBegin.php>Proceed to Next Innings</a>';
}
else if(($totalballs==$lball || $wicketsfallen==10 || ($target!=-1 && $target<=$score)) && $inno==2)
{
	mysql_query("update livematch set TeamBScore=$score where MatchID=$matchid");
	mysql_query("update livematch set TeamBBalls=$lball where MatchID=$matchid");
	mysql_query("update livematch set TeamBExtras=$extras where MatchID=$matchid");
	mysql_query("update livematch set TeamBWickets=$wicketsfallen where MatchID=$matchid");
	mysql_query("update current set InnNo=null");
	mysql_query("update current set BallsBowled=null");
    mysql_query("update current set LegalBallsBowled=null");
    mysql_query("update current set WicketsFallen=null");
	mysql_query("update current set Target=null");
    mysql_query("update current set Score=null");
    mysql_query("update current set BatNo=null");
    mysql_query("update current set BowlNo=null");
    mysql_query("update current set Extras=null");
	mysql_query("update current set OverRuns=null");
	echo '2nd Innings Over<br/>';
	if($target!=-1 && $target<=$score)
	{
		mysql_query("update livematch set Result='$team1' where MatchID=$matchid");
		echo 'Match won by '.$team1.'<br/>';
		$sql=mysql_query("Select * from team where Name='$team1'");
		$row=mysql_fetch_array($sql);
		$won=$row["Won"];
		$won++;
		mysql_query("update team set Won=$won where Name='$team1'");
		$sql=mysql_query("Select * from team where Name='$team2'");
		$row=mysql_fetch_array($sql);
		$lost=$row["Lost"];
		$lost++;
		mysql_query("update team set Lost=$lost where Name='$team2'");
	}
	else if($score<$eq)
	{
		mysql_query("update livematch set Result='$team2' where MatchID=$matchid");
		echo 'Match won by '.$team2.'<br/>';
		$sql=mysql_query("Select * from team where Name='$team2'");
		$row=mysql_fetch_array($sql);
		$won=$row["Won"];
		$won++;
		mysql_query("update team set Won=$won where Name='$team2'");
		$sql=mysql_query("Select * from team where Name='$team1'");
		$row=mysql_fetch_array($sql);
		$lost=$row["Lost"];
		$lost++;
		mysql_query("update team set Lost=$lost where Name='$team1'");
	}
	else if($target-1==$score)
	{
		mysql_query("Update livematch set Result=Tied where MatchId=$matchid");
		echo 'Match Tied<br/>';
		$sql=mysql_query("Select * from team where Name='$team1'");
		$row=mysql_fetch_array($sql);
		$tied=$row["Tied"];
		$tied++;
		mysql_query("update team set Tied=$tied where Name='$team1'");
		$sql=mysql_query("Select * from team where Name='$team2'");
		$row=mysql_fetch_array($sql);
		$tied=$row["Tied"];
		$tied++;
		mysql_query("update team set Tied=$tied Name='$team2'");
	}
	mysql_query("update schedule set Status=-1 where MatchID=$matchid");
	echo '<form action="adminhome.php" method="post"><input name="username" type="hidden" value="Saurabh" /><input name="password" type="hidden" value="abcd" /><input name="Home" type="submit" value="Home" /></form>';
}
else if($lball%6==0 && $sid==0)
{
	echo '<form action="NewBowler.php" method="post">Over Completed<br/>New Bowler : ';
	echo '<select name="newbowler">';
	$sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and PlayerName!='$bowler' and MatchID=$matchid");
	while($row=mysql_fetch_array($sql))
	{
		echo '<option>'.$row["PlayerName"].'</option>';
	}
	echo '</select>';
	echo '<br/><input name="" type="submit" value="Confirm"/></form>';
}
else
{ 
echo '<a href=BallEvent.php>Proceed to Next Ball</a>';	
}
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