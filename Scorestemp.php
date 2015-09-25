<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CricketGURU</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<?php
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$sql=mysql_query("Select * from current");
$row=mysql_fetch_array($sql);
if($row["InnNo"]!=null)
{
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
$sql=mysql_query("select * from schedule where MatchID=$matchid and Status=0");
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
	  <td>
      <table height="150" width="900" align="center">
			<tr height="150" width="900" align="center">
				<td align="left"><img src="images/abv.png" width="60%" height="25%"></td>
				<td align="right" valign="bottom" width="30%">
						<form action="PlayerList.php" method="get">
						<input name="Player" type="text" value="Search Player" />
						<input name="" type="submit" value="GO" />
						</form>
				</td>
			</tr>
      </table>
      </td>
      </tr>
      <tr>
        <td>
		<table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20%"><a href="Home.php"><img src="images/bt1.jpg" alt="" width="189" height="42" border="0"></a></td>
            <td width="19%"><a href="TeamList.php"><img src="images/bt2.jpg" alt="" width="179" height="42" border="0"></a></td>
            <td width="21%"><a href="Scores.php"><img src="images/bt3.jpg" alt="" width="187" height="42" border="0"></a></td>
            <td width="23%"><a href="RecentResults.php"><img src="images/bt4.jpg" alt="" width="182" height="42" border="0"></a></td>
            <td width="17%"><a href="Fixures.php"><img src="images/bt5.jpg" alt="" width="204" height="42" border="0"></a></td>
          </tr>
        </table>
		</td>
      </tr>
      <tr>
        <td><img src="images/h1.jpg" alt="" width="941" height="20"></td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="100%" valign="top" class="afterheader">
			<table width="100%" height="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="4%" height="20">&nbsp;</td>    
            </tr>
			<tr>
				<td height="230" width="900" align="center">
					<table>
						<tr align="center">
							<td><img height="50%" width="50%" class="reflection" src="images/teams/<?php echo $team1;?>.png"></td>
							<td class="abc"><h1><strong>&nbsp;VS&nbsp;<strong><h1></td>
							<td><img height="50%" width="50%" class="reflection" src="images/teams/<?php echo $team2;?>.png"></td>
						</tr>
					</table>
				</td>
			</tr>	
			</table>
		  </td>
        </tr>
    </table>    
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="images/hom.jpg" alt="" width="940" height="20"></td>
        </tr>
        <tr>
          <td height="280" align="center" valign="top" class="bodytal">
		  <table width="500"  border="0" cellspacing="0" cellpadding="0">
            <tr>
				<td align="center">
					<strong><?php echo $team1." vs ".$team2; ?></strong>
					<p><strong>Venue</strong> :<?php echo " ".$venue; ?> <strong>Date</strong> :<?php echo " ".$date; ?> <strong>Time</strong> :<?php echo " ".$time; ?></p>
					<p><strong>Toss Won by <?php echo $toss; ?> and Elected to <?php echo $choice; ?></strong></p>
					<strong><?php echo $abbr."  ".$score."/".$wickets; ?><br/>Overs <?php echo $overs.".".$balls; ?></strong><strong><?php if($innno==2){?><br/>Target <?php echo $target;}?></strong>
					</td>
			</tr>
             <tr>
			<td height="40">&nbsp;</td>
			</tr>
			<tr>
				<td align="left">
					<table width="700">
                    <tr><th align="center">Inning 1</th></tr>
						<tr>
						<th align="left">Batting Scorecard</th>
							
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
						</tr>
						<tr>
							<td>
							<table align="left" cellpadding="5" cellspacing="0">
							<tr class="bcdh">
							<th align="left " width="200">Batsman Name</th>
							<th align="left" width="300">How Out</th>
							<th align="left">Runs</th>
							<th align="left">Balls</th>
							<th align="left">4s</th>
							<th align="left">6s</th>
							</tr>
								<?php
	while($row=mysql_fetch_array($sql))
	{?>
		<tr class="bcd"><td width="250"><?php echo $row["PlayerName"];?></td><td width="500"><?php if($row["BallOut"]==Null){echo "Not Out";}
		else
{$ballout=$row["BallOut"];$sqlw=mysql_query("select * from wicketstats where MatchID=$matchid and BattingTeam='$team' and BallNo=$ballout");$roww=mysql_fetch_array($sqlw);
if($roww["HowOut"]=="Caught")
{
	echo " c ".$roww["Fielder"];
}
else if($roww["HowOut"]=='Run Out')
{
	echo "run out (".$roww["Fielder"].")";
}
if($roww["HowOut"]=='Bowled' || $roww["HowOut"]=='Caught')
{
	echo " b ".$roww["Bowler"];
}
else if( $roww["HowOut"]=='LBW' )
{
	echo " lbw ".$roww["Bowler"];
}
else if($roww["HowOut"]=='Stumped')
{
	echo " stumped b ".$roww["Bowler"];
}
}?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Balls"];?></td><td><?php echo $row["4s"];?></td><td><?php echo $row["6s"];?></td></tr>
	<?php }
	?>
							</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
             <tr>
			<td height="20">&nbsp;</td>
			</tr>
			<tr>	
				<td align="left">
					<table>
						<tr>
						<th align="left">Bowling Scorecard</th>	
						</tr>
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
						<tr>
							<td>
							<table align="left" cellpadding="5" cellspacing="0">
							<tr class="bcdh">
							<th align="left" width="200">Bowler Name</th>
							<th align="left">Overs</th>
							<th align="left">Maidens</th>
							<th align="left">Runs</th>
							<th align="left">Wickets</th>
							<th align="left">No Balls</th>
							<th align="left">Wides</th>
							</tr>
                             <?php
	                        while($row=mysql_fetch_array($sql))
	                        {?>
		                    <tr class="bcd">
							<td width="250"><?php echo $row["PlayerName"];?></td>
							<td><?php $over=$row["Balls"]; $rem=$over%6; $over=$over/6%1000;echo $over.".".$rem;?></td>
							<td><?php echo $row["Maidens"];?></td>
							<td><?php echo $row["Runs"];?></td>
							<td><?php echo $row["Wickets"];?></td>
							<td><?php echo $row["NoBalls"];?></td>
							<td><?php echo $row["Wides"];?></td>
							</tr>
	                        <?php }
	                        ?>
                            </table>
							</td>
						</tr>
					</table>
				</td>
            </tr>
			<tr>
			   <td align="Left">
			   <strong>Total Score</strong>
				<?php if($innno==1){ echo $score;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
				$rowl=mysql_fetch_array($sqll);echo $rowl["TeamAScore"];}?> 
				&nbsp;<strong> Total Wickets</strong>
				<?php if($innno==1){ echo $wickets;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
				$rowl=mysql_fetch_array($sqll);echo $rowl["TeamAWickets"];}?> 
				&nbsp; <strong>Overs</strong>
				<?php if($innno==1){ echo $overs.".".$balls;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
				$rowl=mysql_fetch_array($sqll);$over=$rowl["TeamABalls"];$rem=$over%6;$over=$over/6%1000;echo $over.".".$rem;}?>
			   </td>
			</tr>
			<tr>
			<td height="40">&nbsp;</td>
			</tr>
             <tr>
			<td height="40">&nbsp;</td>
			</tr>
			<tr>
			   <td align="left">
			      <table>
				  <?php if($innno==2){?>	
                  <tr><th align="center">Inning 2</th></tr>
				        <tr>
						<th align="left">
						Batting Scorecard
						</th>
						</tr>
						<?php $sql=mysql_query("select * from battingscorecard where TeamName='$team1' and MatchID=$matchid and BattingNumber!=0 order by BattingNumber");
	                    $team=$team2;
	                    ?>
					<tr>
						<td>
						<table align="left" cellpadding="5" cellspacing="0">
						<tr class="bcdh">
						<th align="left" width="300">Batsman Name</th>
						<th align="left" width="200">How Out</th>
						<th align="left">Runs</th>
						<th align="left">Balls</th>
						<th align="left">4s</th>
						<th align="left">6s</th>
						</tr>
                        <?php
	                    while($row=mysql_fetch_array($sql))
	                    {?>
		                <tr class="bcd"><td width="250"><?php echo $row["PlayerName"];?></td><td width="500"><?php if($row["BallOut"]==Null){echo "Not Out";}
		                else
                        {$ballout=$row["BallOut"];$sqlw=mysql_query("select * from wicketstats where MatchID=$matchid and BattingTeam='$team' and BallNo=$ballout");$roww=mysql_fetch_array($sqlw);
						if($roww["HowOut"]=="Caught")
						{
							echo " c ".$roww["Fielder"];
						}
						if($roww["HowOut"]=="Run Out")
						{
                            echo "run out (".$roww["Fielder"].")";						
						}
						if($roww["HowOut"]=='Bowled' || $roww["HowOut"]=='Caught')
						{
							echo " b ".$roww["Bowler"];
						}
						else if($roww["HowOut"]=='LBW')
						{
							echo " lbw ".$roww["Bowler"];
						}
						else if($roww["HowOut"]=='Stumped')
						{
							echo " stumped b ".$roww["Bowler"];
						}
						}?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Balls"];?></td><td><?php echo $row["4s"];?></td><td><?php echo $row["6s"];?></td></tr>
						<?php }
						?>
						</table>
						</td>
					</tr>
                    <tr>
			        <td height="20">&nbsp;</td>
			        </tr>
					<tr>
					   <th align="left">
					     Bowling Scorecard  
					   </th>
					</tr>
					<?php 
	                $sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and MatchID=$matchid and BowlingNumber!=0 order by BowlingNumber");
	                $team=$team2;
	                ?>
					<tr>
					   <td align="left">
					   <table align="left" cellpadding="5" cellspacing="0">
					   <tr><th align="left" width="200">Bowler Name</th>
					   <th align="left">Overs</th>
					   <th align="left">Maidens</th>
					   <th align="left">Runs</th>
					   <th align="left">Wickets</th>
					   <th align="left">No Balls</th>
					   <th align="left">Wides</th>
					   </tr>
                        <?php
	                   while($row=mysql_fetch_array($sql))
	                   {?>
		               <tr class="bcd"><td width="250"><?php echo $row["PlayerName"];?></td><td><?php $over=$row["Balls"]; $rem=$over%6; $over=$over/6%1000;echo $over.".".$rem;?></td><td><?php echo $row["Maidens"];?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Wickets"];?></td><td><?php echo $row["NoBalls"];?></td><td><?php echo $row["Wides"];?></td></tr>
	                   <?php }
	                   ?>
                       </table>
					   </td>
					</tr>
					<tr>
			           <td align="center">
					   <strong>Total Score</strong>
<?php if($innno==1){ echo $score;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);echo $rowl["TeamAScore"];}?> 
&nbsp;<strong> Total Wickets</strong>
<?php if($innno==1){ echo $wickets;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);echo $rowl["TeamAWickets"];}?> 
&nbsp; <strong>Overs</strong>
<?php if($innno==1){ echo $overs.".".$balls;} else{ $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);$over=$rowl["TeamABalls"];$rem=$over%6;$over=$over/6%1000;echo $over.".".$rem;}?>
                       </td>					  
					</tr>
				    <?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
				    if($sqll)
				    { 
				    $row=mysql_fetch_array($sqll);
				    ?>
					<tr>
					<td height="40">&nbsp;</td>
					</tr>
					<tr>
					   <td align="center">
					     <strong>Result : </strong><?php if($row["Result"]==Null){
			              echo "???";} else {echo $row["Result"];}?> Win<?php }?>  
					   </td>
					</tr>
					<tr>
					<td height="40">&nbsp;</td>
					</tr>
					<?php }?>
				  </table>
			   </td>
			</tr>
          </table>
		  </td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="top"><img src="images/footer.jpg" alt="" width="941" height="10"></td>
        </tr>
        <tr>
          <td height="40" align="right">&nbsp;</td>
        </tr>
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
<?php
}
else
{
	header("Location:RecentResults.php");
	?>
<h2><a href="Home.php">No Live Match Currently in Progress</a></h2>	
<?php }?>
</body>
</html>
