<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css">
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
}?>
<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top">
    <td height="658" align="right">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="610" class="bkg_left">&nbsp;</td>
      </tr>
    </table>
	</td>
    <td width="1%">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
		<td height="159" align="center"><img src="../images/abv.png" width="30%" height="60%"></td>
	  </tr>
      <tr>
        <td><img src="../images/h1.jpg" alt="" width="941" height="20"></td>
      </tr>
    </table>
          
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="../images/hom.jpg" alt="" width="941" height="20"></td>
        </tr>
        <tr>
          <td height="320" align="center" valign="top" class="bodytal">
		  <table width="940"  border="0" cellspacing="0" cellpadding="0">
            <tr ="center" width="600">
				<td align=center>
<?php if($_SESSION["Status"]==1)
{
$sql=mysql_query("select * from current");
$row=mysql_fetch_array($sql);
$matchid=$row["MatchID"];
$striker=$row["Striker"];
$nonstriker=$row["NonStriker"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$bowler=$row["Bowler"];
$legalballsbowled=$row["LegalBallsBowled"];
$totalballs=$row["TotalBalls"];
$inno=$row["InnNo"];
$score=$row["Score"];
$wicketsfallen=$row["WicketsFallen"];
$score=$row["Score"];
$extras=$row["Extras"];
$target=$row["Target"];
$overruns=$row["OverRuns"];
$eq=$target-1;
$extra=$_SESSION["Extra"];
if($legalballsbowled%6==0 && $overruns==0 && $extra=='None')
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

if($legalballsbowled%6==0 && $extra=='None')
{
	mysql_query("update current set Striker='$nonstriker',NonStriker='$striker'");
	mysql_query("update current set OverRuns=0");
}
if(($totalballs==$legalballsbowled || $wicketsfallen==10) && $inno==1)
{
	$temp=$score;
	$temp++;
	mysql_query("update current set InnNo=2,BallsBowled=0,LegalBallsBowled=0,WicketsFallen=0,Target='$temp',Score=0,BatNo=0,BowlNo=0,Extras=0,OverRuns=0");
	header("Location:InningBegin.php");
}
else if(($totalballs==$legalballsbowled || $wicketsfallen==10 || ($target!=-1 && $target<=$score)) && $inno==2)
{
	mysql_query("update current set InnNo=null,BallsBowled=null,LegalBallsBowled=null,WicketsFallen=null,Target=null,Score=null,BatNo=null,BowlNo=null,Extras=null,OverRuns=null");?>
    <table>
<?php	if($target!=-1 && $target<=$score)
	{
		mysql_query("update livematch set Result='$team1' where MatchID=$matchid");?>
        <tr>
        <td>
		<h2>Match won by </h2>
        </td>
        <td>
        <h2><?php echo $team1;?></h2>
        </td>
        </tr>
<?php       
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
		mysql_query("update livematch set Result='$team2' where MatchID=$matchid");?>
		<tr>
        <td>
        Match won by 
        </td>
        <td>
        <?php echo $team2;?>
        </td>
        </tr>
<?php        
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
	else if($eq==$score)
	{
		mysql_query("Update livematch set Result=Tied where MatchId=$matchid");?>
        <tr>
        <td>
		Match Tied
        </td>
        </tr>
<?php        
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
mysql_query("update schedule set Status=-1 where MatchID=$matchid");?>
<form action="adminhome.php" method="post">
<input name="username" type="hidden" value="Saurabh" />
<input name="password" type="hidden" value="abcd" />
<tr>
<td>
<input type="submit" value="Home" />
</td>
</tr>
</form>
</table>
<?php
}
else if($legalballsbowled%6==0 && $extra=='None')
{?>
<table>
<form action="NewBowler.php" method="post">
<tr>
<td>
Over Completed
</td>
</tr>
<tr>
<td>
New Bowler : 
</td>
<td>
<select name="newbowler">
<?php
$sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and PlayerName!='$bowler' and MatchID=$matchid");
while($row=mysql_fetch_array($sql))
{?>
	<option><?php echo $row["PlayerName"];?></option>
<?php
}?>
</select>
</td>
</tr>
<tr>
<td>
<input type="submit" value="Confirm"/>
</td>
</tr>
</form>
</table>
<?php
}
else
{ 
header("Location:BallEvent.php");	
}
}
else
{?>
<a href='adminvalidation.php'>LOGIN FIRST</a>
<?php
}
?>
				</td>	
			</tr>
          </table>
		  </td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <td valign="bottom"  class="footer"  width="950" height="120" align="center">
            Copyright © 2011 Maximus Media. All Rights Reserved.<br>&nbsp;<br>&nbsp;<br>&nbsp;
          </td>
       
      </table></td>
    <td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="610" class="bkg_right">&nbsp;</td>
      </tr>
    </table>
	</td>
  </tr>
</table>
</body>
</html>
