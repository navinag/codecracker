<?php

include "dbconnect.php";
$query="select tname from team where tid='$tid'";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result);
$tname=$row[0];
$query="select * from score ".
		"where tname=\"$tname\"";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result);
mysql_free_result($result);

$rank=$row['rank'];
$score=$row['score'];
$sub=$row['sub'];

mysql_close($conn);

?>
