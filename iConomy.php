<html>
<head>
<link rel="stylesheet" type="text/css" href="icostyle.css" media="screen" />
<title>EtriaCraft iConomy Ranks</title>
</head>

<div class="footer">
<p>EtriaCraft iConomy Stats<br>v1.0</p>
</div>

<center>
<?php
require ('survivalconfig.php');
$handle = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($connect_error);
mysql_select_db($mysql_db, $handle) or die ($connect_error);

$query = mysql_query("SELECT username, balance FROM iConomy ORDER BY balance DESC");
$sum = mysql_query("SELECT SUM(balance) FROM iConomy");
// First Rank
$rank = 1;
// Total Array
$sum2 = mysql_fetch_array($sum);
?>

<center>
<h1><u><font style="color:white">EtriaCraft iConomy Stats</font></u></h1>
<?php
echo "<strong><font style='color:white'>Total Coins in Circulation</strong>: $sum2[0]</font>"; ?>
<table border="0" cellpadding="3" cellspacing="10" id="minimalist">
<tr>
<td width="30"><strong>Rank</strong></td>
<td width="30"><strong>Username</strong></td>
<td width="30"><strong>Coins</strong></td>
</tr>
<?php
while($data = mysql_fetch_assoc($query)) {
// Table
echo '<tr>';
echo '<td><strong>'.$rank++.'</strong></td>';
echo '<td><strong>'.$data['username'].'</strong></td>';
echo '<td><strong>'.$data["balance"].'</strong></td></tr>';
}
?>
</table></center>