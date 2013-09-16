<?php
header("Cache-Control: no-cache, must-revalidate");
$user=$_COOKIE['userstats'];
$t=time();
$tid=0;
if(isset($user))
{
	
	$tid=$user["tid"];
	$loggedin=$user["loggedin"];
	$logintime=$user["logintime"];
	include "dbconnect.php";
	$query="select count(*) from team where tid='$tid'";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	if(!($loggedin) || ($row[0]==0))
	{
		header("Location:index.php?t=$t");
	}
}
else
{
	header("Location:index.php?t=$t");
}
?>
