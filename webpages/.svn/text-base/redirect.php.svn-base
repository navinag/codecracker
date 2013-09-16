<?php
header("Cache-Control: no-cache, must-revalidate");

$user=$_COOKIE['userstats'];
$t=time();
if(isset($user))
{
	$tname=$user["tname"];
	$loggedin=$user["loggedin"];
	$logintime=$user["logintime"];
	
	if(isset($loggedin) && isset($tname) && isset($logintime))
	{
		//echo "Redirecting to arena..";
		//$i=0;
		//while($i++<1000);
		header("Location:home.php?t=$t");
	}
	else
	{
		//echo "There was a problem with the cookies in your system. Please delete all cookies and try again!";
		//echo "<br>Redirecting to Login page..";
		//$i=0;
		//while($i++<1000);
		header("Location:index.php?t=$t");
	}
}
else
{
	//echo "Please enable cookies to prove your mettle in coding!<br>";
	//echo "Redirecting to Login page..";
	//$i=0;
	//while($i++<1000);
	header("Location:index.php?t=$t");
}

?>
