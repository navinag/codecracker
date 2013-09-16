<?php
$username=$_GET['user'];

header("Cache-Control: no-cache, must-revalidate");

include "dbconnect.php";

$query="SELECT count(*) FROM user ".
	"WHERE username=\"$username\"";
$result = stripSlashes($query) ;
$result = mysql_query($query) or die(mysql_error());
$row=mysql_fetch_row($result);
mysql_free_result($result);
mysql_close($conn);
if($row[0]==0)
{
echo "The username $username is available !";
}
else
{
echo "The username $username is not available !";
}
?>
