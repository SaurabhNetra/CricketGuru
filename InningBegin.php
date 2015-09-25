<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css">
<title>Inning Begin</title>
</head>
<?php
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
		<td height="159"></td>
	  </tr>
      <tr>
        <td><img src="images/h1.jpg" alt="" width="941" height="20"></td>
      </tr>
    </table>
          
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img src="images/hom.jpg" alt="" width="941" height="20"></td>
        </tr>
        <tr>
          <td height="280" align="center" valign="top" class="bodytal">
		  <table width="940"  border="0" cellspacing="0" cellpadding="0">
            <tr ="center" width="600">
				<td align=center>
								<?php if($_SESSION["Status"]==1)
                                {
                                $sql=mysql_query("select * from current");
                                $row=mysql_fetch_array($sql);
                                $matchid=$row["MatchID"];
                                $team1=$row["Team1"];
                                $team2=$row["Team2"];
                                $inno=$row["InnNo"];
                                if($inno==1)
                                {
                                if(isset($_POST["Team"]) && isset($_POST["Choice"]))
                                {
                                    mysql_query("update current set Target=-1");
                                    $team=$_POST["Team"];
                                    $choice=$_POST["Choice"];
                                if(($team==$team2 && $choice=='Bat') || ($team==$team1 && $choice=='Field'))
                                {
                                    mysql_query("update current set Team1='$team2',Team2='$team1'");
                                    $temp=$team1;
                                    $team1=$team2;
                                    $team2=$temp;
                                }
                                mysql_query("insert into livematch(MatchID,TeamA,TeamB,Toss,Election) values($matchid,'$team1','$team2','$team','$choice')");
                                }
                                }
                                if($inno==2)
                                {
                                    mysql_query("update current set Team1='$team2',Team2='$team1'");
                                    $temp=$team1;
                                    $team1=$team2;
                                    $team2=$temp;
                                }?>
                                <form action="BallEvent.php" method="post">
                                <table>
                                <tr>
                                <td>
                                Striker
                                </td>
                                <td>
                                <select name="striker">
                                <?php
                                $sql=mysql_query("select * from battingscorecard where TeamName='$team1' and MatchID=$matchid");
                                while($row=mysql_fetch_array($sql))
                                {?>
                                    <option><?php echo $row["PlayerName"];?></option>
                                <?php
                                } ?>
                                </select>
                                </td>
                                <td>
                                Non-Striker
                                </td>
                                <td>
                                <select name="nonstriker">
                                <?php
                                $sql=mysql_query("select * from battingscorecard where TeamName='$team1' and MatchId=$matchid");
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
                                Bowler
                                </td>
                                <td> 
                                <select name="bowler">
                                <?php
                                $sql=mysql_query("select * from bowlingscorecard where TeamName='$team2' and MatchID=$matchid");
                                while($row=mysql_fetch_array($sql))
                                {?>
                                    <option><?php echo $row["PlayerName"];?></option>
                                <?php
                                }?>
                                </select>
                                </td>
                                <td>
                                <input type="submit" value="Confirm" />
                                </td>
                                </tr>
                                </table>
                                </form>
                                <?php
                                mysql_query("update current set BallsBowled=0,LegalBallsBowled=0,TotalBalls=24,WicketsFallen=0,Score=0,BatNo=0,BowlNo=0,Extras=0,OverRuns=0");
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
        <tr>
          <td valign="top"><img src="images/footer.jpg" alt="" width="941" height="10"></td>
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
</body>
</html>
