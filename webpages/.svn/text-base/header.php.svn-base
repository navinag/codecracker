<?php

/************Check if a user is logged in*************/
$user=$_COOKIE['userstats'];
$t=time();
if(isset($user))
{
	$tid=$user["tid"];
	$loggedin=$user["loggedin"];
	$logintime=$user["logintime"];
}
else
{
	$loggedin=0;
}
if($loggedin){
include "retrieve.php";
$t=time();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="GLUG NIT-DGP" content="lugcore@googlegroups.com" />
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>The Code Cracker 3.0</title>
	<link rel="shortcut icon" href="images/favicon.jpg">
</head>

<body>
<div class="content">
	<div class="header">
		<div class="logo">
			<h1><span class="code">Code</span> <span class="cracker">Cracker 3.0</span></h1>
		</div>
	</div>

<!-------- Display the following information if User in logged in ------------>
	<?php if($loggedin): ?>
	<div class="bar">
			<ul>
				<li><a href="home.php?t=<?php echo $t; ?>" title="Home">Home</a></li>
				<li><a href="score.php?t=<?php echo $t; ?>" title="Score Card">Score Card </a></li>
				<li><a href="status.php?t=<?php echo $t; ?>" title="Judge Status">Judge Status</a></li>
				<li><a href="teams.php?t=<?php echo $t; ?>" title="Coders">Coders</a></li>
				<li><a href="faq.php?t=<?php echo $t; ?>" title="FAQ">Rules</a></li>
				<li><a href="profile.php?t=<?php echo $t; ?>" title="Profile">Profile</a></li>
				<li><a href="contact.php?t=<?php echo $t; ?>" title="Contact us">Contact Us </a></li>
				<li><a href="chat.php?t=<?php echo $t; ?>" title="Chat Room">Chat Room </a></li>
				<li><a href="credits.php?t=<?php echo $t; ?>" title="Credits">Developers</a></li>
				<li><a href="logout.php?t=<?php echo $t; ?>" title="Log Out ">Log Out</a></li>
			</ul>
	</div>
	<?php else: ?>
	<div class="bar">
			<ul>
				<li><a href="index.php">Compete</a></li>
				<li><a href="score.php?t=<?php echo $t; ?>" title="Score Card">Score Card </a></li>
				<li><a href="status.php?t=<?php echo $t; ?>" title="Judge Status">Judge Status</a></li>
				<li><a href="faq.php?t=<?php echo $t; ?>" title="FAQ">FAQs</a></li>
				<li><a href="contact.php?t=<?php echo $t; ?>" title="Contact us">Contact Us </a></li>
				<li><a href="credits.php?t=<?php echo $t; ?>" title="Credits">Developers</a></li>
				<li><a href="register.php?t=<?php echo $t; ?>" title="Register Here">Registration</a></li>
			</ul>
		</div>
	<?php endif; ?>
