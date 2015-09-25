<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>CricketGURU</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<?php
session_start();
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$sql=mysql_query("select * from login");
$row=mysql_fetch_array($sql);
if(isset($_SESSION["Status"]))
{
   if($_SESSION["Status"]==1)
   {
	   $_SESSION["Status"]=0;
   }
}
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
				<td align="left"><img src="images/abv.png" width="60%" height="25%"></td>
				<td align="right" valign="bottom" width="30%">
						<form action="PlayerList.php" method="get">
						<input name="Player" type="text" value="Search Player" />
						<input name="" type="submit" value="GO" />
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
            <td width="21%"><a href="Scores.php"><img src="images/bt3.jpg" alt="" width="187" height="42" border="0"></a></td>
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
						<td align="left" valign="top" class="abc"></td>
						<td width="200">&nbsp;</td>
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
		  <table width="600"  border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td>
            <h2>Fixtures :</h2>
            </td>
			</tr>
            <tr>
    <td>
    
<form action="adminhome.php" method="post">
<table>
<tr>
<td>
Username:
</td>
<td>
<input name="username" type="text" />
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input name="password" type="password" />
</td>
<tr>
<td>&nbsp;

</td>
<td align="right">
<input type="submit" value="Login" />
</td>
</tr>
</table>
</form>
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
</body>
</html>
