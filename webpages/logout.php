<?php
session_start();

$tname=$_SESSION['tname'];
include "dbconnect.php";

$query="delete from online where username='$tname'";
mysql_query($query) or die(mysql_error());

header("Cache-Control: no-cache, must-revalidate");

setcookie("userstats[loggedin]", 0);
$t=time();
header("Location:index.php?t=$t");

//$tname=$_POST['tname'];echo $tname;


?>
