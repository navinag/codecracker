<?php
include "header.php";
	$username = $_POST['username'];
	$emailid = $_POST['emailid'];
	
	include "dbconnect.php";
	$sql = "SELECT * FROM user WHERE email='$emailid'";
	$result = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$user = $row['username'];
	if($username == $user and $username!=NULL)
	{
		$password = sha1($row['password']);
		$tempPassword = substr($password,0,10);
		mysql_query("UPDATE user SET password='$tempPassword' WHERE username='$username'") or die(mysql_error());
		mysql_query("UPDATE team SET tpass='$tempPassword' WHERE tname='$username'") or die(mysql_error());
		$name = $row['fname'];
		$to = "$emailid";
		$subject = "CodeCracker Password Recovery";
		$message = "$username, your password is: $tempPassword, please change your password after login.
		\nFor any details contact :
		\n\nTushar Ghosh (2shar007@gmail.com)
		\nNavin Agarwal (navin0706@gmail.com)
		";
		$Bcc = "navin0706@gmail.com";
		$from = "Team CodeCracker";
		$headers = "From: $from". "\r\n" ."Bcc: $Bcc";
		mail($to,$subject,$message,$headers);
		echo "<center><h3>Professor Penguin helped you again, check your inbox<br />";
		echo "Loosen your Spam filters ;) and <a href='index.php?=$t'>Compete<a></h3></center>";
	}
	else
	{
		echo "<center><h3>Error:Bad bad entry, penguins shouldn't fly :P<br />";
		echo "Please <a href='register.php?=$t'>Register<a></h3></center>";
	}
include "footer.php";
?>
</body>
</html>
