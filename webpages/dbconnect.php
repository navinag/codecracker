<?php

$user='root';
$password='mysql';
$database='codecracker';
$host='localhost';

$conn=mysql_connect($host,$user,$password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

?>
