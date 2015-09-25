<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<?php
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$sql=mysql_query("select * from login");
$row=mysql_fetch_array($sql);
session_start();
if(isset($_POST["username"]) && isset($_POST["password"]))
{
	$pass=$_POST["password"];
	$i=substr($row["Password"],0,1);
	$j=0;
	while($j<$i)
	{
		$pass=md5($pass);
		$j++;
	}
	$pass=$i.substr($pass,0,31);
	if($_POST["username"]==$row["Username"] && $row["Password"]==$pass)
	{
		$_SESSION["Status"]=1;
	}
}
if(!isset($_SESSION["Status"]))
{
	$_SESSION["Status"]=0;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css">
<title>Admin Home</title>
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
            <tr><td align="center"><h1>Administrator</h1></td></tr>
            <tr align="center" width="600">
				<td align=center>
								<?php if($_SESSION["Status"]==1)
                                {?>
                                <table>
                                <form action='TeamNames.php' method='post'>
                                <tr>
                                <td>
                                <input type='submit' value='Schedule' />
                                </td>
                                </tr>
                                </form>
                                <form action="TeamSelect.php" method="post">
                                <tr>
                                <td>
                                <select name="startmatch">
                                <?php
                                $sql=mysql_query("select * from schedule where Status=1");
                                $sid=1;
                                while($row=mysql_fetch_array($sql))
                                {
                                    $id=$row["MatchID"];?>
                                    <option>
                                    <?php echo $sid." . ".$row["Team1"].' vs '.$row["Team2"].' on '.$row['Date'];?>
                                    </option>
                                    <?php
                                    mysql_query("update schedule set SID=$sid where MatchID=$id");
                                    $sid++;
                                }
                                if($sid==1)
                                {?>
                                <option>No Matches Scheduled</option>
                                <?php	
                                }
                                ?>
                                </select>
                                </td>
                                <td>
                                <input type="submit" value="Go" />
                                </td>
                                </tr>
                                </form>
                                <form action='adminvalidation.php' method='post'>
                                <tr>
                                <td>
                                <input type='submit' value='Log Out'/>
                                </td>
                                </tr>
                                </form>
                                </table>
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
