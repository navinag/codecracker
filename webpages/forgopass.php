<?php
	$username = $_POST['username'];
	$emailid = $_POST['emailid'];
	
	include "dbconnect.php";
	$sql1 = "SELECT * FROM user where email='$emailid'";
	$result1 = mysql_query($sql1) or die(mysql_error());
	$row1 = mysql_fetch_array($result1);
	$username1 = $row1['username'];
	if($username == $username1)
	{
		$randts = fmod(Time(),100000);
		$username=substr($name, 0, 4)."codecraker".$randts;
		function password($len = 10)
		{
		    $r = '';
		    for($i=0; $i<$len; $i++)
		    { 
		        $r .= chr(rand(0, 25) + ord('a'));
		    } 
		    return $r;
		}
		$password=password();
		mysql_query("update user set password='$npassword' where username='$username'") or die(mysql_error());
		$name = $row1['fname'];
		$to = "$emailid";
		$subject = "CodeCracker Password Recovery";
		$message = "Your user is $username and password $password, please change your password after login.
		\nFor any details contact :
		\n\nTushar Ghosh (2shar007@gmail.com)
		\nNavin Agarwal (navin0706@gmail.com)
		";
		$Bcc = "navin0706@gmail.com";
		$from = "CodeCracker team";
		$headers = "From: $from". "\r\n" ."Bcc: $Bcc";
		mail($to,$subject,$message,$headers);
	}
	else
	{
		echo "Please check your email id and username again";
	}		
?>
