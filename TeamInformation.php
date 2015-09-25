<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Team Information</title>
<style type="text/css">
.CountryName {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 36px;
}
</style>
</head>

<body>
<?php
$con = mysql_connect("localhost","root");
mysql_select_db("cricketstats", $con);
$sql=mysql_query("select * from team where name='India'");
$row=mysql_fetch_array($sql);
?>
<table>
<tr>
<td height="195" align="center" valign="middle" class="CountryName"><?php echo $row["Name"];?></td>
<td rowspan="2"><img src="india-flag.jpg"/></td>
</tr>
<tr>
<td>
<table>
<tr><th>Matches</th><th>Abbreviation</th><th>Won</th><th>Lost</th><th>Tied</th><th>Drawn</th></tr>
<tr><td><?php echo $row["Matches"];?></td><td><?php echo $row["Abbreviation"];?></td><td><?php echo $row["Won"];?></td><td><?php echo $row["Lost"];?></td><td><?php echo $row["Tied"];?></td><td><?php echo $row["Drawn"];?></td></tr>
</table>
</td></tr>
</table>
</body>
</html>