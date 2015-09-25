<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CricketGURU</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<?php
if(isset($_GET['TeamName']))
{
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$team=$_GET['TeamName'];
$sql=mysql_query("select * from team where name='$team'");
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
						<td align="left" valign="top" class="abc"><h1><strong><font size="80">
						<?php echo $row["Name"];?></font></strong><h1></td>
						<td width="200">&nbsp</td>
						<td align ="Right" valign="top"><img src="images/teams/<?php echo $row["Name"];?>.png" height="60%" width="60%" class="reflection"></td>
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
					<table>
					<tr><th><h3>Statistics</h3></th></tr>
					<tr>
						<td>
						<table cellpadding="5" align="left">
						<tr><th align="left">Matches</th><td width="15"></td><td><?php echo $row["Matches"];?></td></tr>
						<tr><th align="left">Abbreviation</th><td width="15"></td><td><?php echo $row["Abbreviation"];?></td></tr>
						<tr><th align="left">Won</th><td width="15"></td><td><?php echo $row["Won"];?></td></tr>
						<tr><th align="left">Lost</th><td width="15"></td><td><?php echo $row["Lost"];?></td></tr>
						<tr><th align="left">Tied</th><td width="15"></td><td><?php echo $row["Tied"];?></td></tr>
						<tr><th align="left">Drawn</th><td width="15"></td><td><?php echo $row["Drawn"];?></td></tr>
                        <tr><th align="left">Success Rate</th><td width="15"></td><td><?php if($row["Matches"]!=0)
						{$percent=$row["Won"]/$row["Matches"]*100;
						 $percent=round($percent,2);
						 echo $percent;}
						 else
						 echo "-";?></td></tr>
						</table>
						</td>
					</tr>
					</table>
				</td>
				<td>
					<table align="Right">
					<?php
					$sql=mysql_query("select * from player where TeamName='$team'");
					?>
					<tr><th><h3>Player List</h3></th></tr>
					<tr>
						<td>
						<table cellpadding="5">
						<?php while($row=mysql_fetch_array($sql)){?>
						<tr><td><?php echo "<a href='players.php?plName=".$row["Name"]."'>".$row["Name"]."</a>";?></td></tr>
						<?php }?>
						</table>
						</td>
					</tr>
					</table>
				</td>
			</tr>
            <tr height="40"></tr>
          </table>
		  </td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td valign="bottom"  class="footer"  width="950" height="120" align="center">
          	<a href="Home.php">Home</a> | <a href="bottom/aboutus.php">About us</a> | <a href="bottom/privacypolicy.php">Privacy Policy </a>| <a href="bottom/tandc.php">General T&amp;C</a><br><br>
            Copyright © 2011 Maximus Media. All Rights Reserved.<br>&nbsp;<br>&nbsp;
          </td>
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
	header("Location:TeamList.php");	
}?>
</body>
</html>
