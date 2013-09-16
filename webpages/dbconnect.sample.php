<?php

$user='dbuser';
$password='dbpass';
$database='dbname';
$host='localhost';

$conn=mysql_connect($host,$user,$password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

?>
