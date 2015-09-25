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
		  <tr><td><h1>General Terms and Conditions</h1>
         
          </td></tr>
          <tr>
		  		<td width="550">
		  			   <p>
                       Your access to and use of this site is subject to these terms and conditions, and the Privacy Policy. Prior to using this site you should read and understand these terms and condition and the Privacy Policy and, by entering this site, you accept and agree to abide by these terms and conditions and the Privacy Policy.
These terms and conditions and the Privacy Policy are subject to change at any time, and it is your responsibility to check regularly in case there are any changes. Continuing to use the site after a change has been made is your acceptance of the changes.
If you are under 18 you must obtain a parent/guardian's consent to access this site.

                       </p>
                       <p><strong>1. Limitation on Use</strong><br>
                       In accessing this site, you agree that you will access the content solely for your own personal use. Any other use requires the prior written permission of Maximus Media. By using or accessing the site you agree to comply with the copyright, trademark, and all other applicable laws that govern this site. You agree to use this site only for lawful purposes, and in a manner which does not infringe the rights of, or restrict or inhibit the use and enjoyment of this site by any third party. You will not use the site to promote, conduct or contribute to fraudulent, obscene, pornographic and/or illegal activities. You will not use the site to violate anyone's privacy, harass or defame others, or to promote hatred towards any individual or group of people. You will not alter, modify, delete, or otherwise interfere with or in any manner compromise any content, service, advertising, or features on this site.
                       </p>
                       <p><strong>2. Intellectual property</strong><br>
                       This site, the material on it, the software, design, text and graphics comprised in it are owned or licensed by Nimbus, its affiliate or associated companies, and protected by copyright under the laws of India and other countries. The content on this site may not be copied, reproduced, republished, downloaded, uploaded, linked to, stored in any medium (including in any other website), distributed in any way, posted, shown or played in public, broadcast, transmitted or re-transmitted in any way. You agree not to edit, modify, adapt, reverse engineer, change in any way, alter or create any derivative work from any of the content contained in this site or streamed to you. You may view this site and its contents using your web browser and save an electronic copy of the website solely in the usual operation of your web browser in visiting the site. You may not use our trade marks or the names "Nimbus ", "CricketNirvana" or the name of any of our related companies without our prior written consent.
                       </p>
                       <p><strong>3. Third party sites and services</strong><br>
                       This site contains links to third party sites. The links are provided solely for your convenience and do not indicate, expressly or impliedly, any endorsement by Maximus Media of the site or the products or services provided at those sites. You access those sites and use the products and services made available at those sites solely at your own risk. Some of the products and services advertised and much of the information provided via the site are the products, services and information of third parties. Such third party products, services and information are not provided or endorsed by us save where expressly stated. Where it is apparent that products, services and information are not provided by us, your legal relationship in respect of those products, services and that information is with the third party supplier. We have not checked the accuracy or completeness of the information or the suitability or quality of the products and services of the third parties. You must make your own enquiries with the relevant third party supplier direct before relying on the third party information or entering into a transaction in relation to the third party products and services. You should check with the third party supplier whether there are additional charges and terms which may apply. We may receive fees and/or commissions from third parties for goods and services of such third parties displayed or made available on this site or accessible through a hyperlink. You acknowledge and consent to us receiving the fees.
                       </p>
                       <p><strong>4. Disclaimer</strong><br>
                       
This site and the information, names, moving and still images, pictures, logos and icons is provided "as is" and on an "is available" basis without any representation or endorsement made and without warranty of any kind whether express or implied, including but not limited to the implied warranties of satisfactory quality, fitness for a particular purpose, non-infringement, compatibility, security and accuracy. In no event will Maximus Media be liable for any damages including, without limitation, indirect or consequential damages, or any damages whatsoever arising from use or loss of use, data, or profits, whether in action of contract, negligence or other tortious action, arising out of or in connection with the use of this site. 
Maximus Media does not warrant that the functions contained in this site will be uninterrupted or error free, that defects will be corrected, or that this site, the server that makes it available or emails sent by us are free of viruses or bugs nor represents the full functionality, accuracy or reliability of any content. We recommend that you use up-to-date anti-virus software.

                       </p>
                       <p><strong>5. Indemnification</strong><br>
                       
You agree, at your own expense, to indemnify, defend, and hold harmless Maximus Media, its employees, agents, and representatives against any claim, alleged claim, suit, action, or administrative proceeding arising out of, or related to use of or access to this site, or violation of these terms and conditions by you or, when due to your cooperation or negligence, by someone else using your information.

                       </p>
                       <p><strong>6. Personal Information</strong><br>
                       Please see our "Privacy Policy" section for more details. Maximus Media agrees to protect your personal information as described in the Privacy Policy published on this site.
                       </p>
                       <p><strong>7. General matters</strong><br>
                       
7.1 These terms and conditions and the Privacy Policy are governed by the laws of India, and the parties irrevocably submit to the exclusive jurisdiction of the courts of Mumbai, India, for determining any dispute concerning these terms and condition and/or Privacy Policy.<br>
7.2 If any of these terms and conditions are invalid or unenforceable, it/they will be struck out and the remaining terms will remain in force.<br>
7.3 If we do not act in relation to a breach by you of these terms and conditions, this does not waive our right to act with respect to subsequent or similar breaches.<br>
7.4 You may not assign or transfer your rights or benefits under these terms and conditions to any other person or entity without our prior consent.<br>
7.5 Maximus Media may suspend, terminate or limit your access to this site if you are in breach of these terms and conditions, in our sole discretion.<br>

                       </p>
                       <p><strong>11. </strong>
                        Views expressed by each writer whether employee of CricketGURU or contributing free lancer/columnist are their own and are not necessarily endorsed by CricketGURU or any of its associates/affiliates.
                       </p>
                       <p><strong>12. </strong>
                        While reasonable effort has been made to verify the accuracy of news, scores, statistics etc that are published on this site, cricketnirvana.com will not be responsible for any errors or inaccuracies that may creep in, except that when such error or inaccuracy is discovered, where practical it will attempt to rectify the error or inaccuracy.
                       </p>
                       <p><strong>13. Acceptance of Terms</strong><br>
                       Your access to this site is subject to full acceptance of these terms and conditions.
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
