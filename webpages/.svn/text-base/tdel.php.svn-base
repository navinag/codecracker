<?php

$key=$_GET['key'];

include "dbconnect.php";

$query="DELETE FROM team WHERE tname like '".$key."'";
mysql_query($query) or die(mysql_error());

$query="DELETE FROM score WHERE tname like '".$key."'";
mysql_query($query) or die(mysql_error());

$query="UPDATE user SET tname='' WHERE tname LIKE '".$key."'";
mysql_query($query) or die(mysql_error());

?>
