<?php
include('config.php');



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
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="images/hom.jpg" alt="" width="940" height="20"></td>
        </tr>
        <tr>
          <td height="280" align="left" valign="top" class="bodytal">
		  <table width="940"  border="0" cellspacing="0" cellpadding="0">
            <tr>
				<td align="center">
					<strong><?php echo $team1." vs ".$team2; ?></strong>
					<p><strong>Venue</strong> :<?php echo " ".$venue; ?> <strong>Date</strong> :<?php echo " ".$date; ?> <strong>Time</strong> :<?php echo " ".$time; ?></p>
					<p><strong>Toss Won by <?php echo $toss; ?> and Elected to <?php echo $choice; ?></strong></p>
					<strong><?php echo $abbr."  ".$score."/".$wickets; ?><br/>Overs <?php echo $overs.".".$balls; ?></strong><strong><?php if($innno==2){?><br/>Target <?php echo $target;}?></strong>
					</td>
			</tr>
			<tr>
				<td align="center">
					<table>
                    <tr><td align="center">Inning 1</td></tr>
						<tr>
						<td align="center">Batting Scorecard</td>
							
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
							<table align="left" cellpadding="5"><tr><th>Batsman Name</th><th>How Out</th><th>Runs</th><th>Balls</th><th>4s</th><th>6s</th></tr>
    <?php
	while($row=mysql_fetch_array($sql))
	{?>
		<tr><td><?php echo $row["PlayerName"];?></td><td><?php if($row["BallOut"]==Null){echo "Not Out";}
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
				<td align="center">
					<table>
						<tr>
						<td align="center">Bowling Scorecard</td>	
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
							<table align="left" cellpadding="5"><tr><th>Bowler Name</th><th>Overs</th><th>Maidens</th><th>Runs</th><th>Wickets</th><th>No Balls</th><th>Wides</th></tr>
                            <?php
	                        while($row=mysql_fetch_array($sql))
	                        {?>
		                    <tr><td><?php echo $row["PlayerName"];?></td><td><?php $over=$row["Balls"]; $rem=$over%6; $over=$over/6%1000;echo $over.".".$rem;?></td><td><?php echo $row["Maidens"];?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Wickets"];?></td><td><?php echo $row["NoBalls"];?></td><td><?php echo $row["Wides"];?></td></tr>
	                        <?php }
	                        ?>
                            </table>
							</td>
						</tr>
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
			<tr>
			   <td align="center">
			      <table>
				  <?php if($innno==2){?>
                  <tr><td align="center">Inning 2</td></tr>	
				        <tr>
						<td align="center">
						Batting Scorecard
						</td>
						</tr>
						<?php $sql=mysql_query("select * from battingscorecard where TeamName='$team1' and MatchID=$matchid and BattingNumber!=0 order by BattingNumber");
	                    $team=$team1;
	                    ?>
					<tr>
						<td>
						<table align="center" cellpadding="5"><tr><th>Batsman Name</th><th>How Out</th><th>Runs</th><th>Balls</th><th>4s</th><th>6s</th></tr>
                        <?php
	                    while($row=mysql_fetch_array($sql))
	                    {?>
		                <tr><td><?php echo $row["PlayerName"];?></td><td><?php if($row["BallOut"]==Null){echo "Not Out";}
		                else
                        {$ballout=$row["BallOut"];$sqlw=mysql_query("select * from wicketstats where MatchID=$matchid and BattingTeam='$team' and BallNo=$ballout");$roww=mysql_fetch_array($sqlw);
						echo $roww["HowOut"];
						if($roww["HowOut"]=="Caught")
						{
							echo " c ".$roww["Fielder"];
						}
						if($roww["HowOut"]=="Run Out")
						{
                            echo " (".$roww["Fielder"].")";						
						}
						if($roww["HowOut"]=='Bowled' || $roww["HowOut"]=='LBW' || $roww["HowOut"]=='Stumped' || $roww["HowOut"]=='Caught')
						{
							echo " b ".$roww["Bowler"];
						}
						}?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Balls"];?></td><td><?php echo $row["4s"];?></td><td><?php echo $row["6s"];?></td></tr>
						<?php }
						?>
						</table>
						</td>
					</tr>
					<tr>
					   <td align="center">
					     Bowling Scorecard  
					   </td>
					</tr>
					<?php 
	                $sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and MatchID=$matchid and BowlingNumber!=0 order by BowlingNumber");
	                $team=$team2;
	                ?>
					<tr>
					   <td align="center">
					   <table align="left" cellpadding="5"><tr><th>Bowler Name</th><th>Overs</th><th>Maidens</th><th>Runs</th><th>Wickets</th><th>No Balls</th><th>Wides</th></tr>
                       <?php
	                   while($row=mysql_fetch_array($sql))
	                   {?>
		               <tr><td><?php echo $row["PlayerName"];?></td><td><?php $over=$row["Balls"]; $rem=$over%6; $over=$over/6%1000;echo $over.".".$rem;?></td><td><?php echo $row["Maidens"];?></td><td><?php echo $row["Runs"];?></td><td><?php echo $row["Wickets"];?></td><td><?php echo $row["NoBalls"];?></td><td><?php echo $row["Wides"];?></td></tr>
	                   <?php }
	                   ?>
                       </table>
					   </td>
					</tr>
					<tr>
			           <td align="center">
					   <strong>Total Score</strong>
                       <?php echo $score;?> 
					   &nbsp;<strong> Total Wickets</strong>
					   <?php echo $wickets;?> 
					   &nbsp; <strong>Overs</strong> 
					   <?php echo $overs.".".$balls;?>
                       </td>					  
					</tr>
				    <?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
				    if($sqll)
				    { 
				    $row=mysql_fetch_array($sqll);
				    ?>
					<tr>
					   <td align="center">
					      <strong>Result : </strong><?php if($row["Result"]==Null){
			              echo "???";} else {echo $row["Result"];}?> Win<?php }?>  
					   </td>
					</tr>
					<?php }?>
				  </table>
			   </td>
			</tr>
          </table>
		  </td>
        </tr>
      </table>