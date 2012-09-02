<html>
<head>
<link rel="stylesheet" type="text/css" href="orestyle.css" media="screen" />
<title>EtriaCraft Ore Count</title>
</head>

<div class="footer">
<p>EtriaCraft Ore Count<br>v1.0</p>
</div>

<center>
<?php
require ('survivalconfig.php');
$handle = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($connect_error);
mysql_select_db($mysql_db, $handle) or die ($connect_error);
// Player Search
$pid1 = $_POST['playername'];
$pid2 = mysql_query("SELECT playerid FROM `lb-players` WHERE playername = '$pid1'");
$pid3 = mysql_fetch_array($pid2);
$pid4 = '$pid3';

// Ore IDs
$coal = '16';
$iron = '15';
$gold = '14';
$rs = '73';
$ll = '21';
$diamond = '56';
$emerald = '129';

// Initial Ore Queries / Variables
$coal1 = mysql_query("SELECT COUNT(replaced) FROM lb_world WHERE replaced = $coal AND playerid = '$pid3[0]'");
$iron1 = mysql_query("SELECT COUNT(replaced) FROM lb_world WHERE replaced = $iron AND playerid = '$pid3[0]'");
$gold1 = mysql_query("SELECT COUNT(replaced) FROM lb_world WHERE replaced = $gold AND playerid = '$pid3[0]'");
$rs1 = mysql_query("SELECT COUNT(replaced) FROM lb_world WHERE replaced = $rs AND playerid = '$pid3[0]'");
$ll1 = mysql_query("SELECT COUNT(replaced) FROM lb_world WHERE replaced = $ll AND playerid = '$pid3[0]'");
$diamond1 = mysql_query("SELECT COUNT(replaced) FROM lb_world WHERE replaced = $diamond AND playerid = '$pid3[0]'");
$emerald1 = mysql_query("SELECT COUNT(replaced) FROM lb_world WHERe replaced = $emerald AND playerid = '$pid3[0]'");

// Arrays
$coal2 = mysql_fetch_array($coal1);
$iron2 = mysql_fetch_array($iron1);
$gold2 = mysql_fetch_array($gold1);
$rs2 = mysql_fetch_array($rs1);
$ll2 = mysql_fetch_array($ll1);
$diamond2 = mysql_fetch_array($diamond1);
$emerald2 = mysql_fetch_array($emerald1);

?>
<h1>EtriaCraft Ore Count</h1>
<form name="form" method="post" action="">
Name: <input type="text" name="playername">
<input type="submit" value="Look Up" name="submit" /> <br />
</form>

<table border="0" cellpadding="3" cellspacing="12" id="minimalist">
<tr>
<td width="30"><img src="images/core.png" /></td>
<td width="30"><img src="images/iore.png" /></td>
<td width="30"><img src="images/gore.png" /></td>
<td width="30"><img src="images/rore.png" /></td>
<td width="30"><img src="images/llore.png" /></td>
<td width="30"><img src="images/dore.png" /></td>
<td width="30"><img src="images/eore.png" width="120" height="120" /></td>
</tr>
<tr>
<?php
echo "<td><font size='6'><strong><center>$coal2[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$iron2[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$gold2[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$rs2[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$ll2[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$diamond2[0]</center></strong></font></td>";
echo "<td><font size='6'><strong><center>$emerald2[0]</center></strong></font></td>";
?>
</center></table>