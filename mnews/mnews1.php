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
          <tr><td><h1>India take title in low-scoring thriller</h1>
          <i>
          Pooja Pai October 7, 2011</i></td>
          <tr>
		  		<td width="550">
                <p>
                			<img src="images/1.jpg" align="right" hspace="10" vspace="5" height="200" width="270">
                            In a low-scoring final, the new-ball pair of Sandeep Sharma and Rush 
                            Kalaria bowled India Under-19s to a thrilling five-run win over Sri Lanka 
                            Under-19s in Visakhapatnam. Sandeep and Kalaria took seven wickets for 57 
                            runs between them as Sri Lanka were dismissed for 163 chasing India's 168 
                            despite Lahiru Madushanka following up his 4 for 17 with the ball with 63,
                             the highest score of the game.
        		</p><p>
                            Sandeep and Kalaria had run through the Sri Lanka top order, reducing the
                             visitors to 27 for 5 in the ninth over. Madushanka came in at No. 7 and 
                             revived the chase with a 75-run partnership with Duleeka Thissakuttige. 
                             When Thissakuttige fell to the series' leading wicket-taker B Aparajith
                              for a slow 29, Madushanka found enough support from the lower order to
                               take Sri Lanka within 19 runs of victory with three wickets in hand.
                                Kalaria, however, brought India back, catching Madushanka off his own
                                 bowling in the 44th over. Amila Aponso was not giving up though and
                                  his patient 21 put Sri Lanka on the verge of a win. Sandeep had 
                                  Aponso caught before bowling last man Dilshan Dhanushka first ball
                                   to end the Sri Lanka innings in the 47th over.
                  </p><p>          
                            India had earlier recovered from a top-order slump as well after being put
                             in, with a 67-run sixth-wicket stand between Akshdeep Nath (55) and 
                             wicketkeeper Smit Patel (31) lifting them from 37 for 5. Nath was the 
                             eighth wicket to fall - like Madushanka - with the score on 146. 
                             What helped India in the end was that they managed to bat out their 50
                             overs while Sri Lanka were dismissed with 19 balls to spare. India won 
                             all their seven games in the tournament.
                </p><p>            
                            In the third-place play-off, West Indies Under-19s hammered 365 before 
                            keeping Australia Under-19s 16 runs short. West Indies captain Kraigg 
                            Brathwaite set up the highest total of the tournament with his second 
                            century in seven matches. Brathwaite added 162 for the second wicket
                             with Anthony Alleyne after John Campbell fell for a duck. Alleyne was
                              more aggressive, hitting 12 fours and three sixes in his 90 off 77
                               deliveries. Brathwaite continued to anchor the innings after Alleyne
                                fell in the 26th over and put on another 87 with Kavem Hodge. 
                                Hodge and wicketkeeper Sunil Ambris ensured West Indies would go 
                                well past 350 with frenetic fifties. Hodge's 62 came off 37 balls
                                 while Ambris' 50 took just 24. Though Alex Pyecroft and Shane 
                                 Cassell took four wickets apiece, no Australia bowler went for 
                                 less than a run a ball.
                  </p><p>          
                            Derone Davis struck with his first two deliveries in the second over 
                            to have Australia in trouble at 11 for 2. Australia were steadied by 
                            Cameron Bancroft (63) and Sam Truloff (39). William Bosisto joined 
                            Bancroft in the 12th over with the score on 87 and settled in to put 
                            Australia on course. Though wickets continued to fall at the other 
                            end, No. 9 Cassell joined Bosisto in an 88-run stand off 61 deliveries. 
                            Bosisto finally fell for 107 with the score on 297 in the 44th over
                             but Cassell hustled his way to a fifty in 29 balls, keeping Australia
                              in with a chance. His run-out in the 47th over effectively ended 
                              Australia's chances. In a game where no bowler went for less than
                               six an over, Davies finished with 3 for 30. 
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
          	<a href="../Home.php">Home</a> | <a href="aboutus.php">About us</a> | <a href="privacypolicy.php">Privacy Policy </a>| <a href="tandc.php">General T&amp;C</a><br><br>
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
</body>
</html>
