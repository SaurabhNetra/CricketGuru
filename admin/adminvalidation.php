<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css">
<title>Admin Validation</title>
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
          <td height="280" align="center" valign="top" class="bodytal">
		  <table width="940"  border="0" cellspacing="0" cellpadding="0">
            <tr ="center" width="600">
				<td align=center>
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
