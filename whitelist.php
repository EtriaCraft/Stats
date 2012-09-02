<html>
<head>
<link rel="stylesheet" type="text/css" href="wlstyle.css" media="screen" />
<title>EtriaCraft Whitelist</title>
</head>

<div class="footer">
<p>EtriaCraft Whitelist</br>v1.0</p>
</div>
<?php
require ('survivalconfig.php');
$handle = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($connect_error);
mysql_select_db($mysql_db, $handle) or die ($connect_error);

$query = mysql_query("SELECT PID, playername FROM whitelist ORDER BY PID ASC");
?>
<center>
<h1><u><font style="color:white">EtriaCraft Whitelist</font></u></h1>
<p>If you are looking to apply, click <a href="http://etriacraft.com/apply">here</a>
<table border="0" cellpadding="3" cellspacing="10" id="minimalist">
<tr>
<td width='30'><strong>ID</strong></td>
<td width='30'><strong>Name</strong></td>
<td width='50'><strong>Avatar</strong></td></tr>
<?php
while($data = mysql_fetch_assoc($query)) {
// Table
echo '<tr>';
echo '<td><strong>'.$data['PID'].'</strong></td>';
echo '<td><strong>'.$data['playername'].'</strong></td>';
echo '<td><strong>'.'<img src=http://minotar.net/avatar/'.$data['playername'].'/50.png />'.'</strong></td>';
}
?>
</table></center>