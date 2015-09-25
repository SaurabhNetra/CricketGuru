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
$sql=mysql_query("select * from current");
$row=mysql_fetch_array($sql);
$matchid=$row["MatchID"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$batno=$row["BatNo"];
$striker=$row["Striker"];
$nonstriker=$row["NonStriker"];
$bowler=$row["Bowler"];
$runs=$_POST["runs"];
$cextras=$row["Extras"];
$wicketsfallen=$row["WicketsFallen"];
$wicket=$_POST["wicket"];
$extra=$_POST["extra"];
$temp=$row["Score"];
$ball=$row["BallsBowled"];
$lball=$row["LegalBallsBowled"];
$overruns=$row["OverRuns"];
if($extra=='No Ball' || $extra=='Wide')
{
	mysql_query("update current set SID=1");
}
else
{
	mysql_query("update current set SID=0");
}
if($extra!='Byes' && $extra!='Leg Byes')
{
$overruns=$overruns+$runs;
mysql_query("update current set OverRuns=$overruns");
}
$temp=$temp+$runs;
mysql_query("update current set Score=$temp");
$sql=mysql_query("select * from battingscorecard where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
    $row=mysql_fetch_array($sql);
	$balls=$row["Balls"];
	$bruns=$row["Runs"];
	$fs=$row["4s"];
	$ss=$row["6s"];	
	if($extra!='Wide')
	{
	$balls++;	
	mysql_query("update battingscorecard set Balls=$balls where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
	}
$sql=mysql_query("select * from battingcareer where PlayerName='$striker'");
    $row=mysql_fetch_array($sql);
	$bcballs=$row["Balls"];
	$bcbruns=$row["Runs"];
	$bcfs=$row["4s"];
	$bcss=$row["6s"];
	if($extra!='Wide')
	{
	$bcballs++;	
	mysql_query("update battingcareer set Balls=$bcballs where PlayerName='$striker'");
	}	
	$sql=mysql_query("select * from bowlingscorecard where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	$row=mysql_fetch_array($sql);
	$boruns=$row["Runs"];
	$boballs=$row["Balls"];
	$bowickets=$row["Wickets"];
	$bonoballs=$row["NoBalls"];
	$bowides=$row["Wides"];
	if($extra!='None')
	{
		if($extra=='No Ball')
		{
			$cextras++;
		}
		else
		{
			$cextras=$cextras+$runs;
		}
		mysql_query("update current set Extras=$cextras");
	}
	if($extra=='No Ball')
	{
		$bonoballs++;
		mysql_query("update bowlingscorecard set NoBalls=$bonoballs where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
	else if($extra=='Wide')
	{
		$bowides=$bowides+$runs;
		mysql_query("update bowlingscorecard set Wides=$bowides where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
if($wicket=='None' && $extra=='None')
{
	$bruns=$bruns+$runs;
	$bcbruns=$bcbruns+$runs;
	mysql_query("update battingscorecard set Runs=$bruns where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
	mysql_query("update battingcareer set Runs=$bcbruns where PlayerName='$striker'");
	if($runs==4)
	{
		$fs++;
		$bcfs++;
		mysql_query("update battingscorecard set 4s=$fs where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
		mysql_query("update battingcareer set 4s=$bcfs where PlayerName='$striker'");
	}
	else if($runs==6)
	{
		$ss++;
		$bcss++;
		mysql_query("update battingscorecard set 6s=$ss where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
		mysql_query("update battingcareer set 6s=$bcss where PlayerName='$striker'");
	}
	$boballs++;
	mysql_query("update bowlingscorecard set Balls=$boballs where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	$boruns=$boruns+$runs;
	mysql_query("update bowlingscorecard set Runs=$boruns where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	if($runs%2==1)
	{
		mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");
	}
	$lball++;
}
else if($extra!='None' && $wicket!='None')
{
	$bruns=$bruns+$runs;
	$bcbruns=$bcbruns+$runs;
	mysql_query("update battingscorecard set Runs=$bruns where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
	mysql_query("update battingcareer set Runs=$bcbruns where PlayerName='$striker'");
	if($wicket=='Stumped')
	{
		$bowickets++;
		mysql_query("update bowlingscorecard set Wickets=$bowickets where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
	if($extra=='No Ball')
	{
		$boruns=$boruns+$runs;
	mysql_query("update bowlingscorecard set Runs=$boruns where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
	else if($extra=='Wide')
	{
		$boruns=$boruns+$runs;
	mysql_query("update bowlingscorecard set Runs=$boruns where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
	$wicketsfallen++;
	mysql_query("update current set WicketsFallen=$wicketsfallen");
	if($wicket=='Run Out' && $runs%2==0 && $extra!='No Ball' && $extra!='Wide')
	{
		mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");
	}
	else if($wicket=='Run Out' && $runs%2==1)
	{
		mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");
	}
	if($extra=='No Ball')
	{
		$bruns=$bruns+$runs-1;
		$bcbruns=$bcbruns+$runs-1;
		mysql_query("update battingscorecard set Runs=$bruns where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
		mysql_query("update battingcareer set Runs=$bcbruns where PlayerName='$striker'");
	}
	if($wicketsfallen!=10)
	{
	$batsmanout=$_POST["outbatsman"];
	$batsmanin=$_POST["batsmanin"];
	if($wicket!='Run Out')
	{
	mysql_query("update current set Striker='$batsmanin'");
	}
	else
	{
		if(($extra=='No Ball' || $extra=='Wide') && $runs%2==1)
		{
			if($batsmanout==$striker)
			{
			mysql_query("update current set NonStriker='$batsmanin'");
			}
			else
			{
				mysql_query("update current set Striker='$batsmanin'");
			}
		}
		else if(($extra=='No Ball' || $extra=='Wide') && $runs%2==0)
		{
			if($batsmanout==$striker)
		    {
			mysql_query("update current set Striker='$batsmanin'");
			}
			else
			{
				mysql_query("update current set NonStriker='$batsmanin'");
			}
		}
		else if($runs%2==0)
		{
			if($batsmanout==$striker)
			{
			mysql_query("update current set NonStriker='$batsmanin'");
			}
			else
			{
				mysql_query("update current set Striker='$batsmanin'");
			}
		}
		else
		{
			if($batsmanout==$striker)
			{
			mysql_query("update current set Striker='$batsmanin'");
			}
			else
			{
				mysql_query("update current set NonStriker='$batsmanin'");
			}
		}
	}
	}
	if($extra=='Byes' || $extra=='Leg Byes')
	{
		$lball++;
		$boballs++;
		mysql_query("update bowlingscorecard set Balls=$boballs where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
}
else if($extra!='None')
{
	if($extra=='Byes' || $extra=='Leg Byes')
	{
		$lball++;
		$boballs++;
		mysql_query("update bowlingscorecard set Balls=$boballs where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
	if($extra=='Wide')
	{
		$boruns=$boruns+$runs;
	mysql_query("update bowlingscorecard set Runs=$boruns where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
	else if($extra=='No Ball')
	{
		$boruns=$boruns+$runs;
	mysql_query("update bowlingscorecard set Runs=$boruns where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
	if($runs%2==0 && ($extra=='No Ball' || $extra=='Wide'))
	{
		mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");
	}
	else if($runs%2==1 && $extra!='No Ball' && $extra!='Wide')
	{
		mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");
	}
	if($extra=='No Ball')
	{
		$bruns=$bruns+$runs-1;
		$bcbruns=$bcbruns+$runs-1;
		mysql_query("update battingscorecard set Runs=$bruns where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
		mysql_query("update battingcareer set Runs=$bcbruns where PlayerName='$striker'");
		if($runs==5)
	{
		$fs++;
		$bcfs++;
		mysql_query("update battingscorecard set 4s=$fs where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
		mysql_query("update battingcareer set 4s=$bcfs where PlayerName='$striker'");
	}
	else if($runs==7)
	{
		$ss++;
		$bcss++;
		mysql_query("update battingscorecard set 6s=$ss where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
		mysql_query("update battingcareer set 6s=$bcss where PlayerName='$striker'");
	}
	}
}
else if($wicket!='None')
{
	$bruns=$bruns+$runs;
	$bcbruns=$bcbruns+$runs;
	mysql_query("update battingscorecard set Runs=$bruns where MatchID=$matchid and TeamName='$team1' and PlayerName='$striker'");
	mysql_query("update battingcareer set Runs=$bcbruns where PlayerName='$striker'");
	$wicketsfallen++;
	mysql_query("update current set WicketsFallen=$wicketsfallen");
	$lball++;
	$boruns=$boruns+$runs;
	mysql_query("update bowlingscorecard set Runs=$boruns where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	if($wicket!='Run Out')
	{
		$bowickets++;
	mysql_query("update bowlingscorecard set Wickets=$bowickets where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	}
	$boballs++;
	mysql_query("update bowlingscorecard set Balls=$boballs where MatchID=$matchid and TeamName='$team2' and PlayerName='$bowler'");
	if($wicketsfallen!=10)
	{
	$batsmanout=$_POST["outbatsman"];
	$batsmanin=$_POST["batsmanin"];
	if($wicket!='Run Out')
	{
	mysql_query("update current set Striker='$batsmanin' where Striker='$batsmanout'");
	}
	else
	{
		if($runs%2==0)
		{
			mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");	
			if($batsmanout==$striker)
			{
			mysql_query("update current set NonStriker='$batsmanin'");
			}
			else
			{
				mysql_query("update current set Striker='$batsmanin'");
			}
		}
		else
		{
			if($batsmanout==$striker)
			{
			mysql_query("update current set Striker='$batsmanin'");
			}
			else
			{
				mysql_query("update current set NonStriker='$batsmanin'");
			}
		}
	}
	}
}
mysql_query("update current set BallsBowled=$ball");
mysql_query("update current set LegalBallsBowled=$lball");
mysql_query("insert into ballupdate values($temp,$matchid,'$team1','$team2','$striker','$nonstriker','$bowler',$ball,$runs,'$extra','$wicket')");
if($wicket!='None')
{
	$batsmanout=$_POST["outbatsman"];
	$fielder=$_POST["fielder"];
	$batno++;
	if($wicketsfallen!=10)
	{
		$batsmanin=$_POST["batsmanin"];	
	mysql_query("update battingscorecard set BattingNumber=$batno where MatchID='$matchid' and PlayerName='$batsmanin' and TeamName='$team1'");
	mysql_query("update current set BatNo='$batno'");
	}
	if($wicketsfallen!=10)
	{
	$batsmanin=$_POST["batsmanin"];	
	$sql=mysql_query("select * from battingcareer where PlayerName='$batsmanin'");
	$row=mysql_fetch_array($sql);
	$inn=$row["Innings"];
	$inn++;
	mysql_query("update battingcareer set Innings=$inn where PlayerName='$batsmanin'");
	}
	mysql_query("insert into wicketstats values($matchid,'$team1','$team2','$batsmanout','$bowler','$wicket',$ball,'$fielder')");
	mysql_query("update battingscorecard set BallOut=$ball where PlayerName='$batsmanout'");
}
$sql=mysql_query("select * from battingcareer where PlayerName='$striker'");
$row=mysql_fetch_array($sql);
$fts=$row["50s"];
$hs=$row["100s"];
if($extra!='No Ball')
{
if($bruns>=50 && ($bruns-$runs)<50)
{
	$fts++;
}
else if($bruns>=100 && ($bruns-$runs)<100)
{
	$fts--;
	$hs++;
}
}
else
{
if($bruns>=50 && ($bruns-$runs+1)<50)
{
	$fts++;
}
else if($bruns>=100 && ($bruns-$runs+1)<100)
{
	$fts--;
	$hs++;
}	
}
$sql=mysql_query("select * from bowlingcareer where PlayerName='$bowler'");
$row=mysql_fetch_array($sql);
$bwcwickets=$row["Wickets"];
$fwh=$row["5WktHauls"];
$bwcruns=$row["Runs"];
$bwcballs=$row["Balls"];
if($wicket!='None' && $wicket!='Run Out')
{
	$bwcwickets++;
	if($bowickets==5)
	{
		$fwh++;
	}
	mysql_query("update bowlingcareer set Wickets=$bwcwickets,5WktHauls=$fwh where PlayerName='$bowler'");
}
if($extra=='None')
{
	$bwcruns=$bwcruns+$runs;
	mysql_query("update bowlingcareer set Runs=$bwcruns where PlayerName='$bowler'");
}
if($extra=='Wide')
{
	$bwcruns=$bwcruns+$runs;
	mysql_query("update bowlingcareer set Runs=$bwcruns where PlayerName='$bowler'");
}
else if($extra=='No Ball')
{
	$bwcruns=$bwcruns+$runs;
	mysql_query("update bowlingcareer set Runs=$bwcruns where PlayerName='$bowler'");
}
if($extra!='No Ball' && $extra!='Wide')
{
	$bwcballs++;
	mysql_query("update bowlingcareer set Balls=$bwcballs where PlayerName='$bowler'");
}
echo 'Event Successfully Updated<br/>';
echo '<a href="LoopEvaluate.php">Proceed</a>';
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