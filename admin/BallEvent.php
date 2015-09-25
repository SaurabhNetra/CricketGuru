<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<script type="text/javascript" language="JavaScript">

function extradone() {
	 document.forms[0].extra.disabled = true;
	 document.forms[0].wicket.disabled = false;
	 if(document.getElementById("extra").value!="None")
	 {
		 document.getElementById("Bowled").disabled=true;
		 document.getElementById("Caught").disabled=true;
		 document.getElementById("LBW").disabled=true;
		 document.getElementById("Hit Wicket").disabled=true;
		 if(document.getElementById("extra").value=="Leg Byes" || document.getElementById("extra").value=="Byes" || document.getElementById("extra").value=="No Ball,Leg Byes" || document.getElementById("extra").value=="No Ball,Byes")
		 {
			 document.getElementById("Stumped").disabled=true;
		 }
	 }
}
function wicketdone() {
	 document.forms[0].wicket.disabled = true;
	 if(document.getElementById("wicket").value=="None" || document.getElementById("wicket").value=="Run Out")
	 {
		 document.forms[0].runs.disabled = false;
	 }
	 else
	 {
		 document.getElementById("batsmanout").disabled = false;
		 document.getElementById("batsmanin").disabled = false;
		 document.getElementById("bi0").selected=true;
		 document.getElementById("binone").disabled=true;
		 document.getElementById("striker").selected=true;
		 document.getElementById("bonone").disabled=true;
		 document.getElementById("nonstriker").disabled=true;
	 }
}
function runsdone() {
	 document.forms[0].runs.disabled = true;
	 if(document.getElementById("wicket").value!="None")
	 {
		 document.getElementById("batsmanout").disabled = false;
		 document.getElementById("batsmanin").disabled = false;
		 document.getElementById("bi0").selected=true;
		 document.getElementById("striker").selected=true;
		 document.getElementById("binone").disabled=true;
		 document.getElementById("bonone").disabled=true;
		 if(document.getElementById("wicket").value=="Run Out" || document.getElementById("wicket").value=="Caught")
		 {
			 document.getElementById("fielder").disabled=false;
			 document.getElementById("f0").selected=true;
			 document.getElementById("fnone").disabled=true;
		 }
		 if(document.getElementById("wicket").value!="Run Out")
		 {
			 document.getElementById("nonstriker").disabled=true;
		 }
	 }	
}
function enableall(){
	document.getElementById("extra").disabled=false;
	document.getElementById("runs").disabled=false;
	document.getElementById("wicket").disabled=false;
	document.getElementById("fielder").disabled=false;
	document.getElementById("batsmanin").disabled=false;
	document.getElementById("batsmanout").disabled=false;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css">
<title>Ball Event</title>
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
$ball=$row["BallsBowled"];
$matchid=$row["MatchID"];
$team1=$row["Team1"];
$team2=$row["Team2"];
$batno=$row["BatNo"];
$bowlno=$row["BowlNo"];
$score=$row["Score"];
$wicketsfallen=$row["WicketsFallen"];
$target=$row["Target"];
$lballs=$row["LegalBallsBowled"];
if($ball==0)
{
	if($_POST["striker"]==$_POST["nonstriker"])
	{
		header("Location:InningBegin.php");
	}
	else 
	{
	$batno++;
	$striker=$_POST["striker"];
	$nonstriker=$_POST["nonstriker"];
	$bowler=$_POST["bowler"];
	mysql_query("update battingscorecard set BattingNumber=$batno where MatchID='$matchid' and PlayerName='$striker' and TeamName='$team1'");
	$batno++;
	mysql_query("update battingscorecard set BattingNumber=$batno where MatchID='$matchid' and PlayerName='$nonstriker' and TeamName='$team1'");
	mysql_query("update current set BatNo=$batno");
	$bowlno++;
	mysql_query("update bowlingscorecard set BowlingNumber=$bowlno where MatchID='$matchid' and PlayerName='$bowler' and TeamName='$team2'");
	mysql_query("update current set BowlNo=$bowlno");
	$sql=mysql_query("select * from battingcareer where PlayerName='$striker'");
	$row=mysql_fetch_array($sql);
	$inn=$row["Innings"];
	$inn++;
	mysql_query("update battingcareer set Innings=$inn where PlayerName='$striker'");
	$sql=mysql_query("select * from battingcareer where PlayerName='$nonstriker'");
	$row=mysql_fetch_array($sql);
	$inn=$row["Innings"];
	$inn++;
	mysql_query("update battingcareer set Innings=$inn where PlayerName='$nonstriker'");
	$sql=mysql_query("select * from bowlingcareer where PlayerName='$bowler'");
	$row=mysql_fetch_array($sql);
	$inn=$row["Innings"];
	$inn++;
	mysql_query("update bowlingcareer set Innings=$inn where PlayerName='$bowler'");
	mysql_query("update current set Striker='$striker',NonStriker='$nonstriker',Bowler='$bowler'");
	}
}
	$sql=mysql_query("select * from current");
    $row=mysql_fetch_array($sql);
	$striker=$row["Striker"];
    $nonstriker=$row["NonStriker"];
    $bowler=$row["Bowler"];
	$ball++;
?>	
<form action="EventEvaluate.php" method="post">
<table>
<tr>
<td>
Striker :
</td>
<td> 
<?php echo $striker;?>
</td>
</tr>
<tr>
<td>
Non-Striker : 
</td>
<td>
<?php echo $nonstriker;?>
</td>
</tr>
<tr>
<td>
Bowler : 
</td>
<td>
<?php echo $bowler;?>
</td>
</tr>
<tr>
<td>
<?php echo $team1;?>
</td>
<td>
<?php echo $score;?>
/
<?php echo $wicketsfallen;?>
</td>
<?php if($target!=-1)
{?>
<td>
Target :
</td>
<td>
<?php echo $target;?>
</td>
<?php }?>
</tr>
<tr>
<td>
Ball No.
</td>
<td>
<?php echo $ball;?>
</td>
</tr>
<tr>
<td>
Runs : 
</td>
<td>
<select name="runs" id="runs" disabled onBlur="runsdone()">
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
</select>
</td>
<td>
Wicket :
</td>
<td>
<select name="wicket" id="wicket" disabled onBlur="wicketdone()">
<option id="WNone">None</option>
<option id="Bowled">Bowled</option>
<option id="LBW">LBW</option>
<option id="Caught">Caught</option>
<option id="Run Out">Run Out</option>
<option id="Stumped">Stumped</option>
<option id="Hit Wicket">Hit Wicket</option>
</select>
</td>
<td>
Extra : 
</td>
<td>
<select name="extra" id="extra" onBlur="extradone()">
<option>None</option>
<option>No Ball</option>
<option>Wide</option>
<option>Byes</option>
<option>Leg Byes</option>
<option>No Ball,Byes</option>
<option>No Ball,Leg Byes</option>
</select>
</td>
</tr>
<tr>
<td> 
Batsman Out :
</td>
<td>
<select name="batsmanout" id="batsmanout" disabled>
<option id="bonone" selected>None</option>
<option id="striker"><?php echo $striker;?></option>
<option id="nonstriker"><?php echo $nonstriker;?></option>
</select>
</td>
<td>
New Batsman :
</td>
<td>
<?php
$sql=mysql_query("select *from battingscorecard where BattingNumber=0 and TeamName='$team1' and MatchID=$matchid");?>
<select name="batsmanin" id="batsmanin" disabled>
<option id="binone" selected>None</option>
<?php
$i=0;
while($row=mysql_fetch_array($sql))
{?>
	<option id="<?php echo "bi".$i;?>"><?php echo $row["PlayerName"];?></option>
<?php
}?>
</select>
</td>
<td>
Fielder Involved in the Wicket : 
</td>
<td>
<?php
$sql=mysql_query("select *from bowlingscorecard where TeamName='$team2' and MatchID=$matchid");
?>
<select name="fielder" id="fielder" disabled>
<option id="fnone" selected>None</option>
<?php
$i=0;
while($row=mysql_fetch_array($sql))
{?>
	<option id="<?php echo "f".$i; ?>"><?php echo $row["PlayerName"];?></option>
<?php
$i++;
}?>
</select>
</td>
</tr>
<tr>
<td>
<input type="submit" value="Confirm" onClick="enableall()"/>
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
        <tr>
          <td valign="bottom"  class="footer"  width="950" height="120" align="center">
            Copyright © 2011 Maximus Media. All Rights Reserved.<br>&nbsp;<br>&nbsp;<br>&nbsp;
          </td>
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
