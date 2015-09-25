<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Evaluate</title>
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
$swap=0;
$sql=mysql_query("select * from current");
$row=mysql_fetch_array($sql);
$matchid=$row["MatchID"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$batno=$row["BatNo"];
$innno=$row["InnNo"];
$striker=$row["Striker"];
$nonstriker=$row["NonStriker"];
$bowler=$row["Bowler"];
$extras=$row["Extras"];
$wicketsfallen=$row["WicketsFallen"];
$ballsbowled=$row["BallsBowled"];
$legalballsbowled=$row["LegalBallsBowled"];
$overruns=$row["OverRuns"];
$score=$row["Score"];
$totalballs=$row["TotalBalls"];
$runs=$_POST["runs"];
$wicket=$_POST["wicket"];
$extra=$_POST["extra"];
$_SESSION["Extra"]=$extra;
$batsmanin=$_POST["batsmanin"];
$batsmanout=$_POST["batsmanout"];
$fielder=$_POST["fielder"];
$sql=mysql_query("select * from battingscorecard where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
$row=mysql_fetch_array($sql);
$bsballs=$row["Balls"];
$bsruns=$row["Runs"];
$bs4s=$row["4s"];
$bs6s=$row["6s"];
$sql=mysql_query("select * from battingcareer where PlayerName='$striker'");
$row=mysql_fetch_array($sql);
$bcouts=$row["Outs"];
$bcballs=$row["Balls"];
$bcruns=$row["Runs"];
$bc4s=$row["4s"];
$bc6s=$row["6s"];
$bc50s=$row["50s"];
$bc100s=$row["100s"];
$sql=mysql_query("select * from bowlingscorecard where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
$row=mysql_fetch_array($sql);
$bosruns=$row["Runs"];
$bosballs=$row["Balls"];
$boswickets=$row["Wickets"];
$bosnoballs=$row["NoBalls"];
$boswides=$row["Wides"];
$sql=mysql_query("select * from bowlingcareer where PlayerName='$bowler'");
$row=mysql_fetch_array($sql);
$bocwickets=$row["Wickets"];
$boc5wkthauls=$row["5WktHauls"];
$bocruns=$row["Runs"];
$bocballs=$row["Balls"];

$ballsbowled++;

if($extra!='No Ball' && $extra!='Wide' && $extra!='No Ball,Leg Byes' && $extra!='No Ball,Byes')
{
$legalballsbowled++;
$bosballs++;
$bocballs++;	
}

if($wicket!='None')
{
$wicketsfallen++;	
}

if($wicket!='None' && $wicketsfallen!=10)
{
$batno++;
$sql=mysql_query("select * from battingcareer where PlayerName='$batsmanin'");
$row=mysql_fetch_array($sql);
$innings=$row["Innings"];
$bcouts++;
$innings++;
mysql_query("update battingcareer set Outs=$bcouts where PlayerName='$batsmanout'");
mysql_query("update battingcareer set Innings=$innings where PlayerName='$batsmanin'");
mysql_query("update battingscorecard set BattingNumber=$batno where MatchID=$matchid and TeamName='$team1' and PlayerName='$batsmanin'");
mysql_query("update battingscorecard set BallOut=$ballsbowled where MatchID=$matchid and TeamName='$team1' and PlayerName='$batsmanout'");	
}

$score=$score+$runs;
if($extra!='Byes' && $extra!='Leg Byes' && $extra!='No Ball,Leg Byes' && $extra!='No Ball,Byes')
{
$overruns=$overruns+$runs;
$bosruns=$bosruns+$runs;
$bocruns=$bocruns+$runs;
}

if($extra=='No Ball' || $extra=='Wide' || $extra=='No Ball,Leg Byes' || $extra=='No Ball,Byes')
{
$score++;
$overruns++;
$bosruns++;
$bocruns++;	
}

if($extra=='No Ball')
{
$extras++;
$bosnoballs++;	
}
if($extra=='Wide')
{
$extras=$extras+$runs+1;
$boswides=$boswides+$runs+1;	
}

if($extra=='No Ball,Leg Byes' || $extra=='No Ball,Byes')
{
$extras=$extras+$runs+1;
$bosnoballs++;	
}

if($runs%2==1 && $wicket=='None')
{
$swap=1;	
}

if($runs%2==0 && $wicket=='Run Out')
{
$swap=1;	
}

if($extra!='Byes' && $extra!='Leg Byes' && $extra!='Wide' && $extra!='No Ball,Leg Byes' && $extra!='No Ball,Byes')
{
$bsruns=$bsruns+$runs;
$bcruns=$bcruns+$runs;
if($runs==4)
{
$bs4s++;
$bc4s++;
}
if($runs==6)
{
$bs6s++;
$bc6s++;
}
if($bsruns-$runs<50 && $bsruns>=50)
{
$bc50s++;	
}
if($bsruns-$runs<100 && $bsruns>=100)
{
$bc50s--;
$bc100s++;	
}
}

if($extra!='Wide')
{
$bcballs++;
$bsballs++;	
}

if($wicket=='Bowled' || $wicket=='Caught' || $wicket=='Stumped' || $wicket=='Hit Wicket')
{
$bocwickets++;
$boswickets++;
if($boswickets==5)
{
$boc5wkthauls++;	
}
}

mysql_query("insert into ballupdate values($score,$matchid,'$team1','$team2','$striker','$nonstriker','$bowler',$ballsbowled,$runs,'$extra','$wicket')");

if($wicket!='None')
{
mysql_query("insert into wicketstats values($matchid,'$team1','$team2','$batsmanout','$bowler','$wicket',$ballsbowled,'$fielder')");
}

if($innno==1)
{
mysql_query("update livematch set TeamAScore=$score,TeamAWickets=$wicketsfallen,TeamABalls=$legalballsbowled,TeamAExtras=$extras where MatchID=$matchid");
}
if($innno==2)
{
mysql_query("update livematch set TeamBScore=$score,TeamBWickets=$wicketsfallen,TeamBBalls=$legalballsbowled,TeamBExtras=$extras where MatchID=$matchid");	
}

mysql_query("update current set BallsBowled=$ballsbowled,LegalBallsBowled=$legalballsbowled,WicketsFallen=$wicketsfallen,Score=$score,BatNo=$batno,Extras=$extras,OverRuns=$overruns");

mysql_query("update battingcareer set Runs=$bcruns,Balls=$bcballs,50s=$bc50s,100s=$bc100s,4s=$bc4s,6s=$bc6s where PlayerName='$striker'");

mysql_query("update battingscorecard set Runs=$bsruns,Balls=$bsballs,4s=$bs4s,6s=$bs6s where MatchID=$matchid and PlayerName='$striker' and TeamName='$team1'");

mysql_query("update bowlingcareer set Runs=$bocruns,Balls=$bocballs,Wickets=$bocwickets,5WktHauls=$boc5wkthauls where PlayerName='$bowler'");

mysql_query("update bowlingscorecard set Runs=$bosruns,Balls=$bosballs,NoBalls=$bosnoballs,Wides=$boswides,Wickets=$boswickets where MatchID=$matchid and PlayerName='$bowler' and TeamName='$team2'");

if($wicket!='None' && $wicketsfallen!=10)
{
if($batsmanout==$striker)
{
mysql_query("update current set Striker='$batsmanin'");	
$striker=$batsmanin;
}
else 
{
mysql_query("update current set NonStriker='$batsmanin'");
$nonstriker=$batsmanin;		
}
}

if($swap==1)
{
mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");	
}

header("Location:LoopEvaluate.php");
}
else
{?>
<a href='adminvalidation.php'>LOGIN FIRST</a>
<?php
}
?>
</body>
</html>