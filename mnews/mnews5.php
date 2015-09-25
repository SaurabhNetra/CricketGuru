<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CricketGURU</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../style2.css" />
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
				<td align="left"><img src="../images/abv.png" width="60%" height="20%"></td>
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
            <td width="20%"><a href="../Home.php"><img src="../images/bt1.jpg" alt="" width="189" height		="42" border="0"></a></td>
            <td width="19%"><a href="../TeamList.php"><img src="../images/bt2.jpg" alt="" width="179" height="42" border="0"></a></td>
            <td width="21%"><a href="../ScoresList.php"><img src="../images/bt3.jpg" alt="" width="187" height="42" border="0"></a></td>
            <td width="23%"><a href="../RecentResults.php"><img src="../images/bt4.jpg" alt="" width="182" height="42" border="0"></a></td>
            <td width="17%"><a href="../Fixures.php"><img src="../images/bt5.jpg" alt="" width="204" height="42" border="0"></a></td>
          </tr>
        </table>
		</td>
      </tr>
      <tr>
        <td><img src="../images/h1.jpg" alt="" width="941" height="20"></td>
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
                                <img src="../images/image1-small.jpg" alt=""  width="70" height="45"/>
                                <span>Gayle, Kohli power Bangalore into CLT20 final</span></a></li>
                                <li class="ui-tabs-nav-item" id="nav-fragment-2">
                                <a href="#fragment-2">
                                <img src="../images/image2-small.jpg" alt="" width="70" height="45"/>
                                <span>Champions League T20 2nd SF: Mumbai Indians vs Somerset</span></a></li>
                                <li class="ui-tabs-nav-item" id="nav-fragment-3">
                                <a href="#fragment-3">
                                <img src="../images/image3-small.jpg" alt="" width="70" height="45"/>
                                <span>Shoaib sells the drama</span></a></li>
                                <li class="ui-tabs-nav-item" id="nav-fragment-4">
                                <a href="#fragment-4">
                                <img src="../images/image4-small.jpg" alt="" width="70" height="45"/>
                                 <span>Pietersen targets next World Cup</span></a></li>
                              </ul>
                    
                            <!-- First Content -->
                            <div id="fragment-1" class="ui-tabs-panel" style="">
                                <img src="../images/image1.png" alt="" height="230"  width="500" />
                                 <div class="info" >
                                    <h2><a href="../snews/snews1.php" >Gayle, Kohli power Bangalore into CLT20 final</a></h2>
                                    <p>Royal Challengers Bangalore 204 for 4 (Gayle 92, Kolhi 84*, Cummins 4-45) 
                                    beat New South Wales 203 for 2 (Warner 123*, D Smith 62) by six wickets ....
                                    <a href="../snews/snews1.php" >read more</a></p>
                                 </div>
                            </div>
                    
                            <!-- Second Content -->
                            <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide" style="">
                                <img src="../images/image2.jpg" alt="" height="230"  width="500"/>
                                 <div class="info" >
                                    <h2><a href="../snews/snews2.php" >ClT20 2nd SF: Mumbai Indians vs Somerset</a></h2>
                                    <p>Mumbai Indians will play Somerset in the second semifinal of the CLT20 2011 here 
                                    at MA Chidambaram Stadium, Chepauk in Chennai on Saturday evening.
                                    <a href="../snews/snews2.php" >read more</a></p>
                                 </div>
                            </div>
                    
                            <!-- Third Content -->
                            <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide" style="">
                                <img src="../images/image3.jpg" alt="" height="230"  width="500"/>
                                 <div class="info" >
                                    <h2><a href="../snews/snews3.php" >Shoaib sells the drama</a></h2>
                                    <p>The furores artfully drummed up to hawk this book might obscure
                                     that it's a cracking read. More's the pity....
                                     <a href="../snews/snews3.php">read more</a></p>
                                 </div>
                            </div>
                    
                            <!-- Fourth Content -->
                            <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide" style="">
                                <img src="../images/image4.jpg" alt=""  height="230"  width="500"/>
                                 <div class="info" >
                                    <h2><a href="../snews/snews4.php">Pietersen targets next World Cup</a></h2>
                                    <p>Kevin Pietersen has tried to put to bed talk about his future 
                                    in one-day cricket by insisting that he wants to play for England 
                                    until at least the 2015 World Cup in Australia and New Zealand....
                                    <a href="../snews/snews4.php" >read more</a></p>
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
          <td><img src="../images/hom.jpg" alt="" width="941" height="20"></td>
        </tr>
        <tr>
          <td height="280" align="center" valign="top" class="bodytal">
		  <table width="900"  border="0" cellspacing="0" cellpadding="0">
		  <tr>
          <td width="200" valign="top">&nbsp;</td>
          <td>
          <table width="500">
		  <tr><td><h1>Good to come off hardened competition - White</h1>
          <i>
          Firdose Moonda October 7, 2011</i>
          </td></tr>
          <tr>
		  		<td width="550">
		  			  <p><img src="images/5.jpg" align="right" hspace="10" vspace="5" width="250" height="360">
                      Cameron White, Australia's Twenty20 captain, had every reason to be smug as he walked into his arrival press conference in Cape Town. He appeared in front of the media minutes after his country's national rugby union team knocked South Africa's defending champion Springboks out of the World Cup by 11 points to nine and, in so doing, qualified for the semi-finals.
                      </p>
                      <p>Instead, he was gracious and chirpy. "It sounds like the referee didn't have a great game," White joked.

That one-liner would have immediately endeared him to the South African public, who are reeling from seeing their rugby team suffer the same fate their cricket team did six months ago in Dhaka, and have already earmarked the upcoming cricket series as a way to take revenge over Australia.
                      </p>
                      <p>With public pressure mounting, South Africa's cricketers will have to hit the right spots immediately after coming off their longest winter break in 14 years. They will only have three days to plot the downfall of Australia because of the timing of the Champions League. But, their opposition have had the same concern, with two Australian franchises having played in the competition.
                      </p>
                      <p>White sees their participation in that tournament as a plus. "It's a good thing coming off real match time and hardened competition, rather than coming out of Australia with a bit of net preparation," he said. "It's probably not ideal that we are coming from all over the place but at least we've been playing some matches."
                      </p>
                      <p>David Warner is the Australia player who best used the Champions League to make a statement, with his two centuries for New South Wales underlining his status as danger batsman in Twenty20. White said Warner was probably "the star of the series" and is hoping he can repeat some of the "good success against the Proteas, like the one memorable game at the MCG a couple of years ago". Warner scored 89 off 43 balls on debut for Australia against South Africa in January 2009.
                      </p>
                      <p>Young fast bowler Patrick Cummins, who is new to the Australian side, also impressed with seven wickets at an average of 19.42. White admitted that he does not know Cummins very well, either on or off the field, but hopes to integrate him into the side. "I saw him bowl in a couple of games on TV, anyone who bowls 150 [kph] is really good to watch," he said. "I actually haven't played with Pat before, but I am looking forward to seeing him in the flesh. Clearly he's got some very, very good pace."
                      </p>
                      <p>Although White indicated that Australia will be experimenting to some degree with combinations, he hopes they can find ones that work early on as they look ahead to next year's World Twenty20. "Every game is like gold to us," he said. "There are not many Twenty20 internationals going into that World Cup, so every one of these games is vitally important for our preparation for that tournament."
                      </p>
                      <p>With Australia focussed on building a stable XI and establishing continuity in the shortest format of the game, South Africa may see it as the ideal opportunity to pounce. They will turn to their new look outfit, with Gary Kirsten as coach, and Hashim Amla captaining in AB de Villiers' absence through injury, to restore national sporting pride.
                      </p>
                      <p>White is not reading too much into South Africa's claims of starting a new era and feels both teams are in an equal stage of transition. "We know they are missing a couple of players and they have a new coach, so do we," he said. "Actually we don't even have a coach at the moment, we've got an interim coach, so we're in a similar position."
                      </p> 
                      <p>With Troy Cooley standing after Tim Nielsen stepped down last month, the absence of a head coach does not worry White, who said it's up to the players to do their bit. "You can have the best coach in the world, but we've played quite a lot of Twenty20 cricket as individuals, so we know how to play the game. There's only so much a coach can do in Twenty20 cricket."
                      </p> 
                                    
		  		</td>	
		  </tr>
          <tr height="50"></tr>
          </table>
          </td>
          <td width="200" valign="top">
          			<table><tr>
                	<td>
                	<img id="gill" src="../images/adds/gillette1.jpg" 
                    align="right" width="202" height="169">
                    </td>
                    </tr>
                    <tr height="20"></tr>
                    <tr><td>
                    <img id="dish" src="../images/adds/4.jpg" border="1" 
                    onMouseOver="document.getElementById('dish').src='../images/adds/3.jpg'" 
                    onMouseOut="document.getElementById('dish').src='../images/adds/4.jpg'"
                    align="right">
                    </td></tr>
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
