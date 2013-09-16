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

$fileName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

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
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/java.js"></script>
	<?php //include_once("analytics.php"); ?>
</head>

<body onload="getImg()">
<div class="content">
	<div class="header">
		<div class="logo">
			<h1><span class="code">Code</span> <span class="cracker">Cracker 3.0</span></h1>
		</div>
	</div>


	<?php
	/*Display info if user is logged in*/ 
	if($loggedin): ?>
	<div class="bar">
		<ul>
			<li class="<?php if($fileName=="home.php"){echo 'active';} ?>"><a href="home.php?t=<?php echo $t; ?>" title="Home">Home</a></li>
			<li class="<?php if($fileName=="score.php"){echo 'active';} ?>"><a href="score.php?t=<?php echo $t; ?>" title="Score Card">Score Card </a></li>
			<li class="<?php if($fileName=="status.php"){echo 'active';} ?>"><a href="status.php?t=<?php echo $t; ?>" title="Judge Status">Judge Status</a></li>
			<li class="<?php if($fileName=="teams.php"){echo 'active';} ?>"><a href="teams.php?t=<?php echo $t; ?>" title="Coders">Coders</a></li>
			<li class="<?php if($fileName=="faq.php"){echo 'active';} ?>"><a href="faq.php?t=<?php echo $t; ?>" title="FAQ">Rules</a></li>
			<li class="<?php if($fileName=="profile.php"){echo 'active';} ?>"><a href="profile.php?t=<?php echo $t; ?>" title="Profile">Profile</a></li>
			<li class="<?php if($fileName=="contact.php"){echo 'active';} ?>"><a href="contact.php?t=<?php echo $t; ?>" title="Contact us">Contact Us </a></li>
			<li class="<?php if($fileName=="chat.php"){echo 'active';} ?>"><a href="chat.php?t=<?php echo $t; ?>" title="Chat Room">Chat Room </a></li>
			<li class="<?php if($fileName=="credits.php"){echo 'active';} ?>"><a href="credits.php?t=<?php echo $t; ?>" title="Credits">Developers</a></li>
			<li class="<?php if($fileName=="logout.php"){echo 'active';} ?>"><a href="logout.php?t=<?php echo $t; ?>" title="Log Out ">Log Out</a></li>
		</ul>
	</div>
	<?php else: ?>
	<div class="bar">
		<ul>
			<li class="<?php if($fileName=="index.php"){echo 'active';} ?>"><a href="index.php?t=<?php echo $t; ?>" title="Compete">Compete</a></li>
			<li class="<?php if($fileName=="score.php"){echo 'active';} ?>"><a href="score.php?t=<?php echo $t; ?>" title="Score Card">Score Card </a></li>
			<li class="<?php if($fileName=="status.php"){echo 'active';} ?>"><a href="status.php?t=<?php echo $t; ?>" title="Judge Status">Judge Status</a></li>
			<li class="<?php if($fileName=="faq.php"){echo 'active';} ?>"><a href="faq.php?t=<?php echo $t; ?>" title="FAQ">FAQs</a></li>
			<li class="<?php if($fileName=="contact.php"){echo 'active';} ?>"><a href="contact.php?t=<?php echo $t; ?>" title="Contact us">Contact Us </a></li>
			<li class="<?php if($fileName=="credits.php"){echo 'active';} ?>"><a href="credits.php?t=<?php echo $t; ?>" title="Credits">Developers</a></li>
			<!-- <li class="<?php if($fileName=="stats.php"){echo 'active';} ?>"><a href="stats.php?t=<?php echo $t; ?>" title="Statistics">Statistics</a></li> -->
			<li class="<?php if($fileName=="register.php"){echo 'active';} ?>"><a href="register.php?t=<?php echo $t; ?>" title="Register Here">Registration</a></li>
			<li class="<?php if($fileName=="sponsor.php"){echo 'active';} ?>"><a href="sponsor.php?t=<?php echo $t; ?>" title="Sponsor Us">Sponsor Us</a></li>
		</ul>
	</div>
	<?php endif; 
	/*another </div> to be added in the file which uses "header.php" */ ?>
