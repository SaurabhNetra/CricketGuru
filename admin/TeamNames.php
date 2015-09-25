<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<?php 
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
session_start();
if(!isset($_SESSION["Status"]))
{
	$_SESSION["Status"]=0;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css">
<title>Team Names</title>
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
          <td height="320" align="center" valign="top" class="bodytal">
		  <table width="940"  border="0" cellspacing="0" cellpadding="0">
            <tr ="center" width="600">
				<td align=center>
								<?php if($_SESSION["Status"]==1)
                                { 
                                ?>
                                <h1>Select the Two Competing Teams</h1>
                                <body>
                                <?php
                                $sql=mysql_query("Select name from team");
                                ?>
                                <table>
                                <form action='Scheduled.php' method='post'>
                                <tr>
                                <td>
                                <select name='Team1'>
                                <?php
                                while($row=mysql_fetch_array($sql))
                                  {?>
                                     <option><?php echo $row["name"];?></option>
                                <?php
                                  }?>
                                 </select>
                                </td>
                                <td align="center">
                                vs 
                                </td>
                                <td>
                                <select name='Team2'>
                                <?php 
                                $sql=mysql_query("Select name from team");
                                while($row=mysql_fetch_array($sql))
                                  {?>
                                     <option><?php echo $row["name"];?></option>
                                  <?php 
                                  }?> 
                                </select>
                                </td>
                                </tr>
                                <tr>
                                <td align="center">
                                Venue 
                                </td>
                                <td>
                                <select name="venue">
                                <option>Oval</option>
                                <option>Lords</option>
                                <option>Wankhede</option>
                                <option>Eden Gardens</option>
                                </select>
                                </td>
                                <td align="center">
                                Date 
                                </td>
                                <td>
                                <input name='date' type='text'/>
                                </td>
                                <td align="center">
                                Time
                                </td>
                                <td> 
                                <input name='time' type='text'/>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                <input type='submit' value='Confirm' />
                                </td>
                                </tr>
                                <tr>
                                <td align="right" colspan="6">
                                <a href="adminhome.php">Back</a>
                                </td>
                                </tr>
                                </table>
                                </form>
                                <?php
                                }
                                else
                                {?>
                                <a href='adminvalidation.php'>Click Here to Login</a>
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
