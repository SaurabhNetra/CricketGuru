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
		  <tr><td><h1>It's a cut-throat business - Bopara</h1>
          <i>
          Saurabh Netravalkar October 7, 2011</i>
          		</td></tr>
          <tr>
		  		<td width="500">
		  			<p><img src="images/2.jpg" align="right" hspace="10" vspace="5" height="250" width="260">
                    After a couple of important innings for England during their home ODI 
                    series against India, Ravi Bopara started the tour of India with a score
                     of 73 against Hyderabad, which was crucial to the England XI winning the game.
                      However, Bopara, who has been in and out of the England side during his career, 
                      is not taking anything for granted.
					</p><p>
                        "It's a cut-throat business," he said. "You've just got to keep playing well whenever things
                         are in your favour, and make sure you nail it."
                     </p><p>   
                        England dominated India at home, winning the Test series 4-0 and 
                        the five-match ODI series 3-0, but the challenge for them will be to adapt to 
                        conditions in the subcontinent, where they struggled during the World Cup.
                         Bopara said singles would be important since sometimes it was difficult to
                          go through with your shots on Indian pitches.
                     </p><p>   
                        "You've always got to look for boundaries; you've got to keep hitting the ball
                         very hard. But it is a lot more difficult in India because you do know that
                          if the pitch is not playing quite right you can't go through with all your
                           shots. There is the worry of chipping it to the infield.
                       </p><p> 
                        "You've got to have that in mind. You don't then hit the ball quite as hard
                         or freely as you would like to. On those sorts of pitches, the singles do
                          become very important - you don't want to be tied up with too many dot
                           balls and put yourself under pressure, and have to look for a big shot
                            on a pitch that is not quite suited to the batters."
                       </p><p> 
                        England's batsmen had a tough time of it against Hyderabad, losing four 
                        wickets in the first 15 overs before Bopara and Chris Woakes took them to
                         a score of 219. "It was a little bit of a difficult pitch, especially up
                          front," Bopara said. "With the new ball, it was quite tough. But once 
                          the ball got older, it got better.
                        </p><p>
                        "It was hard to get the ball away, and quite a soft outfield. It was one 
                        of those where we thought we should be scoring a lot quicker, but in 
                        reality I thought 240 would have been a good score, and as it proved 
                        220 was a good score."
                        </p><p>
                        Bopara recently put in a surprising performance with the ball, taking 
                        4 for 10 to help England beat West Indies in a Twenty20 international 
                        at The Oval. He said he expected his bowling to be called upon against
                         India as well.
                        </p><p>
                        "I think it's important for me to get my bowling right on this tour. 
                        At some stage my bowling is going to be called upon and I'm going to 
                        have to do a good job because, as we know, this Indian side have a very, 
                        very good batting line-up; they are playing in their own conditions too." 
                        He said he hoped to kick on from the positive start to the tour.
                        </p><p>
                        Meanwhile, wicketkeeper-batsman Craig Kieswetter is set to join England
                         at practice for the first time on October 10, after Somerset were eliminated 
                         from the Champions League T20 at the semi-final stage. Kisewetter suffered a 
                         bruised arm during the semi-final against Mumbai Indians, when he was
                          struck by a smash down the ground from his batting partner Jos Buttler. 
                          England will assess the injury as soon as possible.
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
