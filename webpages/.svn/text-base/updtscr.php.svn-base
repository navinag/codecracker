<?php

$tname=$_GET['team'];
$amt=$_GET['amt'];
$operation=$_GET['op'];

include "dbconnect.php";

if($operation=="increase")
{
        $query="update score set score=score+".$amt." WHERE tname='".$tname."'";
        mysql_query($query) or die(mysql_error());
}
else
{
        $query="update score set score=score-".$amt." WHERE tname='".$tname."'";
        mysql_query($query) or die(mysql_error());
}
echo "Score Modification Successfully done!<br>";
?>
