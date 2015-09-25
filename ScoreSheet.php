<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
.total {
	font-weight: bold;
}
.Result {
	font-weight: bold;
}
.Result strong {
}
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ScoreSheet</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<?php
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$sql=mysql_query("Select * from current");
$row=mysql_fetch_array($sql);
$matchid=$row["MatchID"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$score=$row["Score"];
$wickets=$row["WicketsFallen"];
$balls=$row["LegalBallsBowled"];
$overs=($balls/6)%1000;
$balls=$balls%6;
$innno=$row["InnNo"];
$target=$row["Target"];
$sql=mysql_query("select * from schedule where MatchID=$matchid");
$row=mysql_fetch_array($sql);
$venue=$row["Venue"];
$date=$row["Date"];
$time=$row["Time"];
$sql=mysql_query("select * from livematch where MatchID=$matchid");
$row=mysql_fetch_array($sql);
$toss=$row["Toss"];
$choice=$row["Election"];
$sql=mysql_query("select * from team where Name='$team1'");
$row=mysql_fetch_array($sql);
$abbr=$row["Abbreviation"];
?>
<body>
<strong><?php echo $team1." vs ".$team2; ?></strong>
  <p><strong>Venue</strong> :<?php echo " ".$venue; ?> <strong>Date</strong> :<?php echo " ".$date; ?> <strong>Time</strong> :<?php echo " ".$time; ?></p>
  <p><strong>Toss Won by <?php echo $toss; ?> and Elected to <?php echo $choice; ?></strong></p>
<strong><?php echo $abbr."  ".$score."/".$wickets; ?><br/>Overs <?php echo $overs.".".$balls; ?></strong><strong><?php if($innno==2){?><br/>Target <?php echo $target;}?></strong>
    <table><tr><td align="center" valign="middle"><strong>Batting Scorecard</strong></td>
    <td align="center"><strong> Bowling Scorecard</strong></td></tr>
    <?php 
	if($innno==1)
	{
	$sql=mysql_query("select * from battingscorecard where TeamName='$team1' and MatchID=$matchid and BattingNumber!=0 order by BattingNumber");
	$team=$team1;
	}
	else
	{
		$team=$team2;
	$sql=mysql_query("select * from battingscorecard where TeamName='$team2' and MatchID=$matchid and BattingNumber!=0 order by BattingNumber");
	}
	?>
    <tr><td width="50%" valign="top">
    <table border="0" align="left" cellpadding="5" bordercolor="#00CCFF" bgcolor="#0066FF"><tr bgcolor="#0099FF"><th>Sr.No</th><th>Batsman Name</th><th>Runs</th><th>Balls</th><th>4s</th><th>6s</th><th>How Out</th></tr>
    <?php
	while($row=mysql_fetch_array($sql))
	{?>
		<tr bgcolor="#CCCCCC"><td><?php echo $row["BattingNumber"];?></td><td><?php echo $row["PlayerName"];?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Balls"];?></td><td><?php echo $row["4s"];?></td><td><?php echo $row["6s"];?></td><td><?php if($row["BallOut"]==Null){echo "Not Out";}
		else
{$ballout=$row["BallOut"];$sqlw=mysql_query("select * from wicketstats where MatchID=$matchid and BattingTeam='$team' and BallNo=$ballout");$roww=mysql_fetch_array($sqlw);
echo $roww["HowOut"];
if($roww["HowOut"]=='Run Out' || $roww["HowOut"]=="Caught")
{
	echo " by ".$roww["Fielder"];
}
if($roww["HowOut"]=='Bowled' || $roww["HowOut"]=='LBW' || $roww["HowOut"]=='Stumped' || $roww["HowOut"]=='Caught')
{
	echo " b ".$roww["Bowler"];
}
}?></td></tr>
	<?php }
	?>
    </table></td>
    <td valign="top">
    <?php 
	if($innno==1)
	{
	$sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and MatchID=$matchid and BowlingNumber!=0 order by BowlingNumber");
	$team=$team2;
	}
	else
	{
		$team=$team1;
	$sql=mysql_query("select * from bowlingscorecard where TeamName='$team1' and MatchID=$matchid and BowlingNumber!=0 order by BowlingNumber");
	}
	?>
    <table border="0" align="left" cellpadding="5" bordercolor="#00CCFF" bgcolor="#0066FF"><tr bgcolor="#0099FF"><th>Sr.No</th><th>Bowler Name</th><th>Overs</th><th>Runs</th><th>Maidens</th><th>Wickets</th><th>No Balls</th><th>Wides</th></tr>
    <?php
	while($row=mysql_fetch_array($sql))
	{?>
		<tr bgcolor="#CCCCCC"><td><?php echo $row["BowlingNumber"];?></td><td><?php echo $row["PlayerName"];?></td><td><?php $over=$row["Balls"]; $rem=$over%6; $over=$over/6%1000;echo $over.".".$rem;?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Maidens"];?></td><td><?php echo $row["Wickets"];?></td><td><?php echo $row["NoBalls"];?></td><td><?php echo $row["Wides"];?></td></tr>
	<?php }
	?>
    </table></td></tr><tr>
      <td rowspan="2" class="total"><strong>Total Score</strong>
<?php if($innno==1){ echo $score;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);echo $rowl["TeamAScore"];}?> 
&nbsp;<strong> Total Wickets</strong>
<?php if($innno==1){ echo $wickets;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);echo $rowl["TeamAWickets"];}?> 
&nbsp; <strong>Overs</strong>
<?php if($innno==1){ echo $overs.".".$balls;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);$over=$rowl["TeamABalls"];$rem=$over%6;$over=$over/6%1000;echo $over.".".$rem;}?>
      </td></tr></table>
    <?php 
	if($innno==2)
	{?>
    <table><tr><td align="center"><strong>Batting Scorecard</strong></td><td align="center"><strong>Bowling Scorecard</strong></td></tr>
	<?php $sql=mysql_query("select * from battingscorecard where TeamName='$team1' and MatchID=$matchid and BattingNumber!=0 order by BattingNumber");
	$team=$team1;
	?>
    <tr><td width="50%" valign="top">
    <table border="0" align="left" cellpadding="5" bordercolor="#00CCFF" bgcolor="#0066FF"><tr bgcolor="#0099FF"><th>Sr.No</th><th>Batsman Name</th><th>Runs</th><th>Balls</th><th>4s</th><th>6s</th><th>How Out</th></tr>
    <?php
	while($row=mysql_fetch_array($sql))
	{?>
		<tr bgcolor="#CCCCCC"><td><?php echo $row["BattingNumber"];?></td><td><?php echo $row["PlayerName"];?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Balls"];?></td><td><?php echo $row["4s"];?></td><td><?php echo $row["6s"];?></td><td><?php if($row["BallOut"]==Null){echo "Not Out";}
		else
{$ballout=$row["BallOut"];$sqlw=mysql_query("select * from wicketstats where MatchID=$matchid and BattingTeam='$team' and BallNo=$ballout");$roww=mysql_fetch_array($sqlw);
echo $roww["HowOut"];
if($roww["HowOut"]=='Run Out' || $roww["HowOut"]=="Caught")
{
	echo " by ".$roww["Fielder"];
}
if($roww["HowOut"]=='Bowled' || $roww["HowOut"]=='LBW' || $roww["HowOut"]=='Stumped' || $roww["HowOut"]=='Caught')
{
	echo " b ".$roww["Bowler"];
}
}?></td></tr>
	<?php }
	?>
    </table></td><td valign="top">
    <?php 
	$sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and MatchID=$matchid and BowlingNumber!=0 order by BowlingNumber");
	$team=$team2;
	?>
    <table border="0" align="left" cellpadding="5" bordercolor="#0099FF" bgcolor="#0066FF"><tr bgcolor="#0099FF"><th>Sr.No</th><th>Bowler Name</th><th>Overs</th><th>Runs</th><th>Maidens</th><th>Wickets</th><th>No Balls</th><th>Wides</th></tr>
    <?php
	while($row=mysql_fetch_array($sql))
	{?>
		<tr bgcolor="#CCCCCC"><td><?php echo $row["BowlingNumber"];?></td><td><?php echo $row["PlayerName"];?></td><td><?php $over=$row["Balls"]; $rem=$over%6; $over=$over/6%1000;echo $over.".".$rem;?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Maidens"];?></td><td><?php echo $row["Wickets"];?></td><td><?php echo $row["NoBalls"];?></td><td><?php echo $row["Wides"];?></td></tr>
	<?php }
	?>
    </table></td></tr><tr><td rowspan="2" class="total"><strong>Total Score</strong>
<?php echo $score;?> 
&nbsp;<strong> Total Wickets</strong>
<?php echo $wickets;?> 
&nbsp; <strong>Overs</strong> 
<?php echo $overs.".".$balls;?>
      </td></tr><tr><?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	  if($sqll)
	  { 
	  $row=mysql_fetch_array($sqll);
	  ?>
        <td rowspan="2" class="Result"><strong>Result : </strong><?php if($row["Result"]==Null){
			echo "???";} else {echo $row["Result"];}?> Win</td> </tr></table> <?php }}?></div>
</body>
</html>