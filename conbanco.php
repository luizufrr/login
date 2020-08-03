<?php
$host = "localhost";
$user = "root";
$pass = "";
$pass = "root";
$banco = "cmbv";

$mysql = mysql_connect($host, $user, $pass, $banco) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
