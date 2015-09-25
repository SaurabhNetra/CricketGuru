<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CricketGURU</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<?php
if(isset($_GET['plName']))
{
$temp=$_GET['plName'];
$name= $temp;
$temp=explode(' ',$temp);
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$sql=mysql_query("select * from player where name='$name'");
$row=mysql_fetch_array($sql);
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
		   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="4%" height="20">&nbsp;</td>    
            </tr>
			<tr>
				<td height="230" width="900" align="center">
					<div>
					<table>
					<tr>
						<td align="left" valign="top" class="abc">
						<table align ="left">
							<tr>
							<th  class="abc"><h1><strong><font size="80"><?php echo $row["Name"]; ?></font></strong><h1></th>
							</tr>
							<tr>
							<th  class="abc" align="left"><?php echo $row["TeamName"]; ?></th>
							</tr>
							<tr>
							<th  class="abc"><?php echo $row["BattingStyle"]; ?></th>
							</tr >
							<tr>
							<th  class="abc"><?php echo $row["BowlingStyle"]; ?></th>
							</tr>
                            <tr>
							<th  class="abc"><?php echo "Matches: ".$row["Matches"]; ?></th>
							</tr>
						</table>
						
						</td>
						<td width="125">&nbsp;</td>
						<td align ="Right" valign="top">
                        <img src="images/players/<?php echo $temp[0].$temp[1]?>.png" height="60%" width="60%" class="reflection"
                        onerror='this.src="images/players/bat.png"' >
                        </td>
					 </tr>	
					</table>
					</div>
				</td>
			</tr>
          </table>
		  </td>
        </tr>
    </table>    
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="images/hom.jpg" alt="" width="941" height="20"></td>
        </tr>
        <tr>
          <td height="280" align="center" valign="top" class="bodytal">
		  <table width="500"  border="0" cellspacing="0" cellpadding="0">
            <tr>
				<td valign="top">
					<table align="left" cellpadding="5">
					<tr><th align="left"><h3>Batting Career</h3></th></tr>
					<tr>
						<td>
						<?php $sql=mysql_query("select * from battingcareer where PlayerName='$name'");
						$row=mysql_fetch_array($sql); ?>
						<table class="cde">
							<tr>
								<th>Innings</th><td width="15"></td><td><?php echo $row["Innings"]; ?></td>
							</tr>
							<tr>
								<th>Runs</th><td width="15"></td><td><?php echo $row["Runs"]; ?></td>
							</tr>
							<tr>
								<th>Balls Faced</th><td width="15"></td><td><?php echo $row["Balls"]; ?></td>
							</tr>
							<tr>
								<th>50s</th><td width="15"></td><td><?php echo $row["50s"]; ?></td>
							</tr>
							<tr>
								<th>100s</th><td width="15"></td><td><?php echo $row["100s"]; ?></td>
							</tr>
							<tr>
								<th>4s</th><td width="15"></td><td><?php echo $row["4s"]; ?></td>
							</tr>
							<tr>
								<th>6s</th><td width="15"></td><td><?php echo $row["6s"]; ?></td>
							</tr>
                            <tr>
								<th>Not Outs</th><td width="15"></td><td><?php 
								$notouts=$row["Innings"]-$row["Outs"];
								echo $notouts; ?>
                                </td>
							</tr>
                            <tr>
								<th>Average</th><td width="15"></td><td><?php 
								if($row["Outs"]!=0){
									$avg=$row["Runs"]/$row["Outs"];
									$avg=round($avg,2); echo $avg;
									}
								else
								echo "-";?></td>
							</tr>
                            <tr>
								<th>Strike Rate</th><td width="15"></td><td><?php 
								if($row["Balls"]!=0){
									$str=$row["Runs"]/$row["Balls"]*100;
									$str=round($str,2); echo $str;
									}
								else
								echo "-";?></td>
							</tr>
						</table>
						</td>
					</tr>
					</table>
				</td>
				<td valign="top">
					<table align="right" cellpadding="5">
					<tr><th align="left"><h3>Bowling Career<h3></th></tr>
					<tr>
						<td>
							<?php $sql=mysql_query("select * from bowlingcareer where PlayerName='$name'");
							$row=mysql_fetch_array($sql); ?>
						<table class="cde">
								<tr>
									<th>Innings</th><td width="15"></td><td><?php echo $row["Innings"]; ?></td>
								</tr>
								<tr>
									<th>Runs</th><td width="15"></td><td><?php echo $row["Runs"]; ?></td>
								</tr>
								<tr>
									<th>Overs</th><td width="15"></td><td><?php $balls=$row["Balls"]; $rem=$balls%6; $overs=$balls/6%1000; echo $overs.".".$rem;?></td>
								</tr>
								<tr>
									<th>Wickets</th><td width="15"></td><td><?php echo $row["Wickets"]; ?></td>
								</tr>
								<tr>
									<th>Maidens</th><td width="15"></td><td><?php echo $row["Maidens"]; ?></td>
								</tr>
								<tr>
									<th>5WKT Hauls</th><td width="15"></td><td><?php echo $row["5WktHauls"]; ?></td>
								</tr>
                                <tr>
								<th>Economy Rate</th><td width="15"></td><td><?php 
								if($row["Balls"]!=0){
									$str=$row["Runs"]/$row["Balls"]*6;
									$str=round($str,2); echo $str;
									}
								else
								echo "-";?></td>
							</tr>
                            <tr>
								<th>Strike Rate</th><td width="15"></td><td><?php 
								if($row["Wickets"]!=0){
									$str=$row["Runs"]/$row["Wickets"];
									$str=round($str,2); echo $str;
									}
								else
								echo "-";?></td>
							</tr>
						</table>
						</td>
					</tr>
					</table>
				</td>
			</tr>
            <tr height="30"></tr>
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
<?php }
else
{?>
	<h2><a href="SearchForm.php">Click here to choose which Player's Stats you want to view</a></h2>	
<?php }?>
</body>
</html>
