<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CricketGURU</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style2.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>
</head>

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
    <td width="20%">
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
            <td width="20%"><a href="Home.php"><img src="images/bt1.jpg" alt="" width="189" height		="42" border="0"></a></td>
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
				<td height="230" width="900" align="center">
					
					<table>
					 <tr>
					   <td align="left" valign="top" class="abc"></td>
						<td width="600" valign="middle">             
                        <div id="featured" >
                              <ul class="ui-tabs-nav"  >
                                <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1">
                                <img src="images/image1-small.jpg" alt=""  width="70" height="45"/>
                                <span>Gayle, Kohli power Bangalore into CLT20 final</span></a></li>
                                <li class="ui-tabs-nav-item" id="nav-fragment-2">
                                <a href="#fragment-2">
                                <img src="images/image2-small.jpg" alt="" width="70" height="45"/>
                                <span>Champions League T20 2nd SF: Mumbai Indians vs Somerset</span></a></li>
                                <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3">
                                <img src="images/image3-small.jpg" alt="" width="70" height="45"/>
                                <span>Shoaib sells the drama</span></a></li>
                                <li class="ui-tabs-nav-item" id="nav-fragment-4">
                                <a href="#fragment-4"><img src="images/image4-small.jpg" alt="" width="70" height="45"/>
                                 <span>Pietersen targets next World Cup</span></a></li>
                              </ul>
                    
                            <!-- First Content -->
                            <div id="fragment-1" class="ui-tabs-panel" style="">
                                <img src="images/image1.png" alt="" height="230"  width="500" />
                                 <div class="info" >
                                    <h2><a href="snews/snews1.php" >Gayle, Kohli power Bangalore into CLT20 final</a></h2>
                                    <p>Royal Challengers Bangalore 204 for 4 (Gayle 92, Kolhi 84*, Cummins 4-45) 
                                    beat New South Wales 203 for 2 (Warner 123*, D Smith 62) by six wickets ....
                                    <a href="snews/snews1.php" >read more</a></p>
                                 </div>
                            </div>
                    
                            <!-- Second Content -->
                            <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
                                <img src="images/image2.jpg" alt="" height="230"  width="500"/>
                                 <div class="info" >
                                    <h2><a href="snews/snews2.php" >ClT20 2nd SF: Mumbai Indians vs Somerset</a></h2>
                                    <p>Mumbai Indians will play Somerset in the second semifinal of the CLT20 2011 here 
                                    at MA Chidambaram Stadium, Chepauk in Chennai on Saturday evening.
                                    <a href="snews/snews2.php" >read more</a></p>
                                 </div>
                            </div>
                    
                            <!-- Third Content -->
                            <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
                                <img src="images/image3.jpg" alt="" height="230"  width="500"/>
                                 <div class="info" >
                                    <h2><a href="snews/snews3.php" >Shoaib sells the drama</a></h2>
                                    <p>The furores artfully drummed up to hawk this book might obscure
                                     that it's a cracking read. More's the pity....<a href="snews/snews3.php" >read more</a></p>
                                 </div>
                            </div>
                    
                            <!-- Fourth Content -->
                            <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
                                <img src="images/image4.jpg" alt=""  height="230"  width="500"/>
                                 <div class="info" >
                                    <h2><a href="snews/snews4.php" >Pietersen targets next World Cup</a></h2>
                                    <p>Kevin Pietersen has tried to put to bed talk about his future 
                                    in one-day cricket by insisting that he wants to play for England 
                                    until at least the 2015 World Cup in Australia and New Zealand....
                                    <a href="snews/snews4.php" >read more</a></p>
                                 </div>
                            </div>
                            
                    
                            </div>
                        </div>	</td>
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
          <td><img src="images/hom.jpg" alt="" width="941" height="20"></td>
        </tr>
        <tr>
          <td height="280" align="center" valign="top" class="bodytal">
		  <table width="900"  border="0" cellspacing="0" cellpadding="0">
		  <tr>
		  <td width="20%" align="left">&nbsp;
				<?php
				$con = mysql_connect("localhost","root");
				mysql_select_db("cricketstats", $con);
				$sql=mysql_query("Select * from schedule where Status=0");
				$row=mysql_fetch_array($sql);
				$matchid=$row["MatchID"];
				$team1=$row["Team1"];
				$team2=$row["Team2"];
				$venue=$row["Venue"];
				$date=$row["Date"];
				$time=$row["Time"];
				if($matchid!="")
				{
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
				<strong><?php echo $team1." vs ".$team2; ?></strong>
				<p><strong><?php if($innno!=""){echo $abbr1." ".$score1."/".$wickets1." Overs ".($balls1/6%1000).".".($balls1%6)." Extras ".$extras1;}?></strong></p>  
				<p><strong><?php if($innno==2){echo $abbr2." ".$score2."/".$wickets2." Overs ".($balls2/6%1000).".".($balls2%6);}?></strong></p>
				<?php }
				else
				{
					echo "No Live Match in progress";
				}?>
		  </td>
         <td width="50%">&nbsp;
		  
		  </td>
          
          <td width="30%" align="right">
		  		
                	<img id="gill" src="images/adds/gilette1.jpg" 
                    onMouseOver="document.getElementById('gill').src='images/adds/gillette2.jpg'" 
                    onMouseOut="document.getElementById('gill').src='images/adds/gilette1.jpg'">
          
		  </td>
		  </tr>
          </table>
		  </td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        
        <tr align="center">
          <td valign="bottom"  class="footer"  width="950" height="120">
          	<a href="#">Home</a> | <a href="#">About us</a> | <a href="#">Contact us</a><br><br>
            Copyright © 2011 Maximus Designs. All Rights Reserved.<br>&nbsp;<br>&nbsp;
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
</body>
</html>
