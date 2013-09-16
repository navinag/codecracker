<?php

$tname=$_GET['tname'];
$tpass=$_GET['tpass'];

header("Cache-Control: no-cache, must-revalidate");

include "dbconnect.php";
$query="SELECT * FROM team ".
	"WHERE tname=\"$tname\"";
$result = stripSlashes($query) ;
$result = mysql_query($query) or die(mysql_error());

$exists=mysql_num_rows($result);
if(!$exists)
{
	echo "Team Name is Available";
}
else
{
	$row=mysql_fetch_array($result);
	$pass=$row['tpass'];
	if($tpass == $pass)
	{
		$user2=$row['user2'];
		if($user2=="")
		{
			echo "You can join this team!";
		}
		else
		{
			echo "Sorry, this team already has two members!";
		}
	}
	else
	{
		echo "The Team Password is invalid!";
	}
}
?>
