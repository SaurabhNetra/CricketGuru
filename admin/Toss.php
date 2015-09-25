<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css">
<title>Toss</title>
</head>
<?php
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
session_start();
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
                                $count1=0;
                                for($d=1000;$d<=1014;$d++)
                                {
                                    if(isset($_POST[$d]))
                                        $count1++;
                                }
                                $count2=0;
                                for($d=2000;$d<=2014;$d++)
                                {
                                    if(isset($_POST[$d]))
                                        $count2++;
                                }
                                if($count1!=11 || $count2!=11)
                                {
                                    header("Location:TeamSelect.php");
                                }
                                else
                                {
                                $sql=mysql_query("select * from current");
                                $row=mysql_fetch_array($sql);
                                $matchid=$row["MatchID"];
                                $team1=$row["Team1"];
                                $team2=$row["Team2"];
                                $sql=mysql_query("select * from team where Name='$team1'");
                                $row=mysql_fetch_array($sql);
                                $temp=$row["Matches"];
                                $temp++;
                                mysql_query("update team set Matches=$temp where Name='$team1'");
                                $sql=mysql_query("select * from team where Name='$team2'");
                                $row=mysql_fetch_array($sql);
                                $temp=$row["Matches"];
                                $temp++;
                                mysql_query("update team set Matches=$temp where Name='$team2'");
                                mysql_query("update current set InnNo=1");
                                $c=100;
                                for($d=1000;$d<=1014;$d++)
                                {
                                if(isset($_POST[$d]))
                                {
                                $temp=$_POST[$c];
                                $sql=mysql_query("select * from player where Name='$temp'");
                                $row=mysql_fetch_array($sql);
                                $temp2=$row["Matches"];
                                $temp2++;
                                mysql_query("update player set Matches=$temp2 where Name='$temp'");
                                mysql_query("insert into battingscorecard(MatchID,PlayerName,TeamName) values($matchid,'$temp','$team1')");
                                mysql_query("insert into bowlingscorecard(MatchID,PlayerName,TeamName) values($matchid,'$temp','$team1')");				
                                }
                                $c++;
                                }
                                $c=200;
                                for($d=2000;$d<=2014;$d++)
                                {
                                if(isset($_POST[$d]))
                                {
                                $temp=$_POST[$c];
                                $sql=mysql_query("select * from player where Name='$temp'");
                                $row=mysql_fetch_array($sql);
                                $temp2=$row["Matches"];
                                $temp2++;
                                mysql_query("update player set Matches=$temp2 where Name='$temp'");
                                mysql_query("insert into battingscorecard(MatchID,PlayerName,TeamName) values($matchid,'$temp','$team2')");
                                mysql_query("insert into bowlingscorecard(MatchID,PlayerName,TeamName) values($matchid,'$temp','$team2')");					
                                }
                                $c++;
                                }
                                ?>
                                <form action="InningBegin.php" method="post">
                                <table>
                                <tr>
                                <td>
                                Toss Won By 
                                </td>
                                <td>
                                <select name="Team">
                                <option><?php echo $team1;?></option>
                                <option><?php echo $team2;?></option>
                                </select>
                                </td>
                                <td>
                                and elected to 
                                </td>
                                <td>
                                <select name="Choice">
                                <option>Bat</option>
                                <option>Field</option>
                                </select>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <input type="submit" value="Confirm" />
                                </td>
                                </tr>
                                </table>
                                </form>
                                <?php
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
