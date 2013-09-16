<?php

$key=$_GET['key'];

include "dbconnect.php";

$query="DELETE FROM user WHERE username like '".$key."'";
mysql_query($query) or die(mysql_error());

$query="UPDATE team SET user2='' WHERE user2 LIKE '".$key."'";
mysql_query($query) or die(mysql_error());

$query="UPDATE team SET user1='' WHERE user1 LIKE '".$key."'";
mysql_query($query) or die(mysql_error());

$query="UPDATE team SET user1=user2 WHERE user1=''";
mysql_query($query) or die(mysql_error());

$query="UPDATE team SET user2='' WHERE user1=user2";
mysql_query($query) or die(mysql_error());

?>
