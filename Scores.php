<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CricketGURU</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<script type="text/javascript">
function showhide1()
{
	if(document.getElementById("inn11").style.display=='none')
	{
		document.getElementById("inn11").style.display="";
		document.getElementById("inn12").style.display="";
		document.getElementById("inn13").style.display="";
		document.getElementById("inn14").style.display="";
		document.getElementById("inn15").style.display="";
		document.getElementById("inn16").style.display="";
		document.getElementById("inn17").style.display="";
	}
	else
	{
		document.getElementById("inn11").style.display='none';
		document.getElementById("inn12").style.display='none';
		document.getElementById("inn13").style.display='none';
		document.getElementById("inn14").style.display='none';
		document.getElementById("inn15").style.display='none';
		document.getElementById("inn16").style.display='none';
		document.getElementById("inn17").style.display='none';
	}
}
function showhide2()
{
	if(document.getElementById("inn21").style.display=='none')
	{
		document.getElementById("inn21").style.display="";
		document.getElementById("inn22").style.display="";
		document.getElementById("inn23").style.display="";
		document.getElementById("inn24").style.display="";
		document.getElementById("inn25").style.display="";
	}
	else
	{
		document.getElementById("inn21").style.display='none';
		document.getElementById("inn22").style.display='none';
		document.getElementById("inn23").style.display='none';
		document.getElementById("inn24").style.display='none';
		document.getElementById("inn25").style.display='none';
	}
}
</script>
<body>
<div id="r1">
<?php
if(isset($_GET['Choice']))
{
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$id=$_GET['Choice'];
$sql=mysql_query("Select * from schedule where Status=0 and SID=$id");
$row=mysql_fetch_array($sql);
$matchid=$row["MatchID"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$venue=$row["Venue"];
$date=$row["Date"];
$time=$row["Time"];
$sql=mysql_query("Select * from livematch where MatchID=$matchid");
$row=mysql_fetch_array($sql);
$score1=$row["TeamAScore"];
$score2=$row["TeamBScore"];
$wickets1=$row["TeamAWickets"];
$wickets2=$row["TeamBWickets"];
$balls1=$row["TeamABalls"];
$balls2=$row["TeamBBalls"];
$extras1=$row["TeamAExtras"];
$extras2=$row["TeamBExtras"];
$toss=$row["Toss"];
$choice=$row["Election"];
$result=$row["Result"];
$sql=mysql_query("select * from team where Name='$team1'");
$row=mysql_fetch_array($sql);
$abbr1=$row["Abbreviation"];
$sql=mysql_query("select * from team where Name='$team2'");
$row=mysql_fetch_array($sql);
$abbr2=$row["Abbreviation"];
$sql=mysql_query("Select * from current");
$row=mysql_fetch_array($sql);
$innno=$row["InnNo"];
?>
</div>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top">
    <td height="658" align="right">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="610" class="bkg_left">&nbsp;</td>
      </tr>
    </table>
	</td>
    <td width="21%">
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
	  <td>
      <table height="150" width="900" align="center">
			<tr height="150" width="900" align="center">
				<td align="left"><img src="images/abv.png" width="60%" height="20%"></td>
				<td align="right" valign="bottom" width="30%">
						<form action="PlayerList.php" method="get">
						<input name="Player" type="text" value="Search Player" />
						<input type="submit" value="GO" />
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
            <td width="21%"><a href="ScoresList.php"><img src="images/bt3.jpg" alt="" width="187" height="42" border="0"></a></td>
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
		  <table width="700"  border="0" cellspacing="0" cellpadding="0">
            <tr>
				<td align="center">
					<div id="r2"><strong><?php echo $team1." vs ".$team2; ?></strong>
					<p><strong>Venue</strong> :<?php echo " ".$venue; ?> <strong>Date</strong> :<?php echo " ".$date; ?> <strong>Time</strong> :<?php echo " ".$time; ?></p>
					<p><strong>Toss Won by <?php if($toss!=""){echo $toss;} else {echo "???";} ?> and Elected to <?php if($choice!=""){echo $choice;} else {echo "???";}?></strong></p>
<p><strong><?php if($innno!=""){echo $abbr1." ".$score1."/".$wickets1." Overs ".($balls1/6%1000).".".($balls1%6)." Extras ".$extras1;}?></strong></p>  
<p><strong><?php if($innno==2){echo $abbr2." ".$score2."/".$wickets2." Overs ".($balls2/6%1000).".".($balls2%6)." Extras ".$extras2;}?></strong></p>
<p> <strong>Result : <?php if($result!=""){echo $result;} else{echo "???";}?> Win </strong></p>                    </div>
					</td>
			</tr>
             <tr>
			<td height="40">&nbsp;</td>
			</tr>
			<tr>
				<td align="center">
					<table width="700">
                    <tr><th align="center">
					<?php if($innno!=""){?>
                    <a href="javascript:showhide1()"><img src="images/inning1.png"></a>
					<?php }?></th>
                    </tr>
						<tr>
						<th align="left" id="inn11" style="display:none" colspan="2">Batting Scorecard</th>
							<div id="r3">
							<?php 
									$sql=mysql_query("select * from battingscorecard where TeamName='$team1' 
									and MatchID=$matchid and BattingNumber!=0 order by BattingNumber");
									$team=$team1;
							?>
                            </div>
						</tr>
						<tr>
                        	
							<td id="inn12" style="display:none">
							<table align="center" width="700" cellpadding="5" cellspacing="0">
							<tr  class="bcdh">
							<th align="left " width="200">Batsman Name</th>
							<th align="left" width="300">How Out</th>
							<th align="left">Runs</th>
							<th align="left">Balls</th>
                            <th align="left" width="100">Strike Rate</th>
                            <th align="left">4s</th>
							<th align="left">6s</th>
							</tr>
                            <div id="r4">
								<?php
									while($row=mysql_fetch_array($sql))
									{?>
									<tr class="bcd"><td width="150"><?php echo $row["PlayerName"];?></td>
                                    <td width="150"><?php if($row["BallOut"]==Null){echo "Not Out";}
									else
									{$ballout=$row["BallOut"];
									$sqlw=mysql_query("select * from wicketstats where MatchID=$matchid and BattingTeam='$team' 
									and BallNo=$ballout");$roww=mysql_fetch_array($sqlw);
									if($roww["HowOut"]=="Caught")
									{
									echo " c ".$roww["Fielder"];
									}
									else if($roww["HowOut"]=='Run Out')
									{
										echo " run out (".$roww["Fielder"].")";
									}
									if($roww["HowOut"]=='Bowled' || $roww["HowOut"]=='Caught')
									{
									echo " b ".$roww["Bowler"];
									}
									else if($roww["HowOut"]=='Stumped')
									{
										echo " stumped b ".$roww["Bowler"];
									}
									else if($roww["HowOut"]=='LBW')
									{
										echo " lbw ".$roww["Bowler"];
									}
									if($roww["HowOut"]=='Hit Wicket')
									{
										echo " (Hit Wicket) b ".$roww["Bowler"];
									}
									}?></td><td><?php echo $row["Runs"];?></td>
									<td><?php echo $row["Balls"];?></td>
                                    <td>
                                    <?php 
								if($row["Balls"]!=0){
									$str=$row["Runs"]/$row["Balls"]*100;
									$str=round($str,2); echo $str;
									}
								else
								echo "-";?>
                                    </td>
									<td><?php echo $row["4s"];?></td>
									<td><?php echo $row["6s"];?></td>
									</tr>
									<?php }
									?>
                                    </div>
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
						<th align="left" id="inn13" style="display:none">Bowling Scorecard</th>	
						</tr>
                        <div id="r5">
						 <?php 
	                     $sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and MatchID=$matchid and BowlingNumber!=0 order by BowlingNumber");
	                     $team=$team2;
                       	 ?>
                         </div>
						<tr>
							<td  id="inn14" style="display:none">
							<table align="left" cellpadding="5" cellspacing="0">
							<tr class="bcdh" >
							<th align="left" width="200">Bowler Name</th>
							<th align="left">Overs</th>
							<th align="left">Maidens</th>
							<th align="left">Runs</th>
							<th align="left">Wickets</th>
                            <th align="left">Economy Rate</th>
							<th align="left">No Balls</th>
							<th align="left">Wides</th>
						    </tr>
                            <div id="r6">
                            <?php
	                        while($row=mysql_fetch_array($sql))
	                        {?>
		                <tr class="bcd">
							<td>
							<?php echo $row["PlayerName"];?>
							</td>
							<td><?php $over=$row["Balls"]; $rem=$over%6; $over=$over/6%1000;echo $over.".".$rem;?></td>
							<td><?php echo $row["Maidens"];?></td><td><?php echo $row["Runs"];?></td>
							<td><?php echo $row["Wickets"];?></td>
                            <td>
                            <?php 
								if($row["Balls"]!=0){
									$str=$row["Runs"]/$row["Balls"]*6;
									$str=round($str,2); echo $str;
									}
								else
								echo "-";?>
                            </td>
                            <td><?php echo $row["NoBalls"];?></td>
							<td><?php echo $row["Wides"];?></td></tr>
	                        <?php }
	                        ?>
                            </div>
                            </table>
							</td>
						</tr>
					</table>
				</td>
            </tr>
			<tr><td height="15"></td></tr>
			<tr>
			   <td align="Left" id="inn15" style="display:none">
               <div id="r7">
			   <strong>Total Score</strong>
<?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);echo $rowl["TeamAScore"];?> 
&nbsp;<strong> Total Wickets</strong>
<?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);echo $rowl["TeamAWickets"];?> 
&nbsp; <strong>Overs</strong>
<?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);$over=$rowl["TeamABalls"];$rem=$over%6;$over=$over/6%1000;echo $over.".".$rem;?>
    </div>
			   </td>
			</tr>
			<tr>
			<td height="40" id="inn16" style="display:none">&nbsp;</td>

			</tr>
             <tr>
			<td height="40" id="inn17" style="display:none">&nbsp;</td>
			</tr>
			<tr>
			   <td align="center">
			      <table>
				  <?php ?>	
                  <tr><th align="center" >
				  <?php if($innno==2){?>
                  <a href="javascript:showhide2()" ><img src="images/inning2.png"></a>
				  <?php }?></th>
                  </tr>
				  <div>
				        <tr>
						<th align="left" id="inn21" style="display:none">
						Batting Scorecard
						</th>
						</tr>
						<?php $sql=mysql_query("select * from battingscorecard where TeamName='$team2' and MatchID=$matchid and BattingNumber!=0 order by BattingNumber");
	                    $team=$team2;
	                    ?>
					<tr>
						<td id="inn22" style="display:none">
						<table align="center" width="700" cellpadding="5" cellspacing="0">
						<tr class="bcdh">
							<th align="left" width="200">Batsman Name</th>
							<th align="left" width="300">How Out</th><th align="left">Runs</th>
							<th align="left">Balls</th>
                            <th align="left" width="100">Strike Rate</th>
                            <th align="left">4s</th>
							<th align="left">6s</th>
						</tr>
                        <?php
	                    while($row=mysql_fetch_array($sql))
	                    {?>
		                <tr class="bcd">
						<td width="150"><?php echo $row["PlayerName"];?></td>
						<td width="150"><?php if($row["BallOut"]==Null){echo "Not Out";}
		                else
                        {$ballout=$row["BallOut"];$sqlw=mysql_query("select * from wicketstats where MatchID=$matchid and BattingTeam='$team' and BallNo=$ballout");$roww=mysql_fetch_array($sqlw);
						if($roww["HowOut"]=="Caught")
						{
							echo " c ".$roww["Fielder"];
						}
						else if($roww["HowOut"]=="Run Out")
						{
                            echo " run out (".$roww["Fielder"].")";						
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
						if($roww["HowOut"]=='Hit Wicket')
						{
							echo " (Hit Wicket) b ".$roww["Bowler"];
						}
						}?>
						</td>
						<td><?php echo $row["Runs"];?></td>
						<td><?php echo $row["Balls"];?></td>
                        <td>
                        <?php 
								if($row["Balls"]!=0){
									$str=$row["Runs"]/$row["Balls"]*100;
									$str=round($str,2); echo $str;
									}
								else
								echo "-";?>
                        </td>
						<td><?php echo $row["4s"];?></td>
						<td><?php echo $row["6s"];?></td>
						</tr>
						<?php 
						}
						?>
						</table>
						</td>
					</tr>
					</div>
                    <tr>
			        <td height="20">&nbsp;</td>
			        </tr>
					<div>
					<tr>
					   <th align="left" id="inn23" style="display:none">
					     Bowling Scorecard  
					   </th>
					</tr>
					<?php 
	                $sql=mysql_query("select * from bowlingscorecard where TeamName='$team1' 
					and MatchID=$matchid and BowlingNumber!=0 order by BowlingNumber");
	                $team=$team1;
	                ?>
					<tr>
					   <td align="left" id="inn24" style="display:none">
					   <table align="left" cellpadding="5" cellspacing="0">
					   <tr class="bcdh">
					   <th align="left" width="200">Bowler Name</th>
					   <th align="left">Overs</th>
					   <th align="left">Maidens</th>
					   <th align="left">Runs</th>
					   <th align="left">Wickets</th>
                       <th align="left">Economy Rate</th>
					   <th align="left">No Balls</th>
					   <th align="left">Wides</th></tr>
                       <?php
	                   while($row=mysql_fetch_array($sql))
	                   {?>
		               <tr class="bcd">
					   <td width="200">
					   <?php echo $row["PlayerName"];?></td>
					   <td><?php $over=$row["Balls"]; $rem=$over%6; $over=$over/6%1000;echo $over.".".$rem;?></td>
					   <td><?php echo $row["Maidens"];?></td>
					   <td><?php echo $row["Runs"];?></td>
					   <td><?php echo $row["Wickets"];?></td>
                       <td>
                        <?php 
								if($row["Balls"]!=0){
									$str=$row["Runs"]/$row["Balls"]*6;
									$str=round($str,2); echo $str;
									}
								else
								echo "-";?>
                       </td>
					   <td><?php echo $row["NoBalls"];?></td>
					   <td><?php echo $row["Wides"];?></td>
					   </tr>
	                   <?php }
	                   ?>
                       </table>
					   </td>
					</tr>
					</div>
					<tr><td height="15"></td></tr>
					<div>
					<tr>
			           <td align="left" id="inn25" style="display:none">
					   <strong>Total Score</strong>
                       <?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);echo $rowl["TeamBScore"];?> 
					   &nbsp;<strong> Total Wickets</strong>
					   <?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);echo $rowl["TeamBWickets"];?> 
					   &nbsp; <strong>Overs</strong> 
					   <?php $sqll=mysql_query("select * from livematch where MatchId=$matchid");
	$rowl=mysql_fetch_array($sqll);$over=$rowl["TeamBBalls"];$rem=$over%6;$over=$over/6%1000;echo $over.".".$rem;?>
                       </td>					  
					</tr>
					</div>
                    <tr>
                    <td>
                    </td>
                    </tr>
					<tr>
					<td height="40">&nbsp;</td>
					</tr>
					<tr>
					   <td align="center"> 
					   </td>
					</tr>
					<tr>
					<td height="40">&nbsp;</td>
					</tr>
				  </table>
			   </td>
			</tr>
          </table>
		  </td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr align="center">
         <td valign="bottom"  class="footer"  width="950" height="120">
          	<a href="Home.php">Home</a> | <a href="bottom/aboutus.php">About us</a> | <a href="bottom/privacypolicy.php">Privacy Policy </a>| <a href="bottom/tandc.php">General T&amp;C</a><br><br>
            Copyright © 2011 Maximus Media. All Rights Reserved.<br>&nbsp;<br>&nbsp;
          </td>
        </tr>
        <tr>
          <td height="50">&nbsp;</td>
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
	header("Location:ScoresList.php");
}
?>
</body>
</html>
