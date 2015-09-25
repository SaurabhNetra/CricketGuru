<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css">
<title>Team Select</title>
</head>
<?php
session_start();
if(!isset($_SESSION["Status"]))
{
	$_SESSION["Status"]=0;
}
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$proceed=1;
if(isset($_POST['startmatch']))
{
	if($_POST['startmatch']=='No Matches Scheduled')
	{
		header("Location:adminhome.php");
	}
}
if(isset($_POST['startmatch']))
{
$id=substr($_POST['startmatch'],0,1);
mysql_query("update schedule set Status=0 where SID=$id and Status=1");
$sql=mysql_query("select * from schedule where SID=$id and Status=0");
$row=mysql_fetch_array($sql);
}
else
{
$sql=mysql_query("select * from current");
$row=mysql_fetch_array($sql);
$matchid=$row["MatchID"];
$sql=mysql_query("select * from schedule where MatchID=$matchid");
$row=mysql_fetch_array($sql);	
}
$matchid=$row["MatchID"];
$team1=$row['Team1'];
$team2=$row['Team2'];
mysql_query("update current set Team1='$team1',Team2='$team2',MatchID=$matchid");
$sql=mysql_query("Select name from player where teamname='$team1'");?>
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
                                {?>
                                <form action="Toss.php" method="post">
                                <table>
                                <tr>
                                <td valign="top">
                                <table>
                                <tr>
                                <td>
                                <?php echo $team1;?>
                                </td>
                                </tr>
                                <?php
                                $c=100;
                                $d=1000;
                                while($row=mysql_fetch_array($sql))
                                  {
                                     $i=$row['name'];?>
                                <tr>
                                <td>
                                <input name="<?php echo $d;?>" type="checkbox" <?php if($c<111){?>checked<?php }?>/>
                                </td>
                                <td>
                                <input name="<?php echo $c;?>" type="text" readonly value="<?php echo $i;?>"/>
                                </td>
                                </tr>
                                <?php
                                     $c++;
                                     $d++;
                                  } 
                                 ?>
                                </table>
                                </td>
                                <td valign="top">
                                <table>
                                <tr>
                                <td>
                                <?php echo $team2;?>
                                </td>
                                </tr>
                                <?php
                                $sql=mysql_query("Select name from player where teamname='$team2'");
                                $c=200;
                                $d=2000;
                                 while($row=mysql_fetch_array($sql))
                                  {
                                      $i=$row['name'];?>
                                <tr>
                                <td>
                                <input name="<?php echo $d;?>" type="checkbox" <?php if($c<211){?>checked<?php }?>/>
                                </td>
                                <td>
                                <input name="<?php echo $c;?>" type="text" readonly value="<?php echo $i;?>"/>
                                </td>
                                </tr>
                                <?php
                                     $c++;
                                     $d++;
                                  } 
                                ?>
                                </table>
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
