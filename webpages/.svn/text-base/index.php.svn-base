<?php
header("Cache-Control: no-cache, must-revalidate");
$user=$_COOKIE['userstats'];
$t=time();
if(isset($user))
{
	if($user["loggedin"])
	{
		header("Location:home.php?t=$t");
	}
}
?>



<!-- html starts here -->

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
		
		<div class="bar">
			<ul>
				<li class="active"><a href="#">Compete</a></li>
				<li><a href="score.php?t=<?php echo $t; ?>" title="Score Card">Score Card </a></li>
				<li><a href="status.php?t=<?php echo $t; ?>" title="Judge Status">Judge Status</a></li>
				<li><a href="faq.php?t=<?php echo $t; ?>" title="FAQ">FAQs</a></li>
				<li><a href="contact.php?t=<?php echo $t; ?>" title="Contact us">Contact Us </a></li>
				<li><a href="credits.php?t=<?php echo $t; ?>" title="Credits">Developers</a></li>
				<li><a href="register.php?t=<?php echo $t; ?>" title="Register Here">Registration</a></li>
			</ul>
		</div>
		<div class="main_content">
		<div class="left">
			<h3>What is CodeCracker ? </h3>
			<div class="left_box">
				<img src="images/bigimage.gif" class="image" alt="Big Image" />
				<h2>Codecracker 3.0 -- New and Improved </h2>
				<p>CodeCracker is a fully automated online programming contest judge system designed and implemented by GLUG members of NIT Durgapur.The main drive and motivation behind this project is to inculcate the culture of programming among students, helping them understand the importance of algorithms as a problem solving tool, and making them recognise the power of GNU/Linux as a powerful programming platform.The judge is built using opensource technologies and tools. So come, code, challenge yourself... prove your intelligence and win recognition for yourself and your college.</p>
		  	</div>
			<div class="featured_events">
				<h3>Featured Events </h3>
				<div class="left_box">
				<img src="images/ad.gif" class="image" alt="Big Image" />
				<p>There are helluva lots of events and competitions coming up for this session of CodeCracker and the best news is that your beloved CodeCracker is going <b>24x7</b>. So guys lubricate your coding cells and get ready for some serious stuff.</p>
				<p>Coming Soon ......</p>
				<p>&nbsp;</p>
				</div>
			</div>
		</div>	
		<div class="right">
			<h3>Login To The Arena </h3>
			<div class="right_login">
				<form name="loginform" action="verify.php?t=<?php echo $t; ?>" method="POST">
					<table>
						<tr>
							<td>Handle</td>
							<td><input name="tname" type="text" id="tname"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input name="tpass" type="password" id="tpass"></td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input name="submit"  type="submit" value="Login"></td>
						</tr>
						<tr>
							<td colspan="2"><a href="register.php" >Register</a></td>
						</tr>
					</table>
				</form>				<p>&nbsp;</p>
			</div>
			<div class="site_traffic">
				<h3>Site Traffic</h3>
				
				<div class="user_bar" style="position:absolute;top: 400px;left:900px">
					<a target="_blank" href="http://twitter.com/letmeknowupdate"><img height="38" width="38" src="images/twitter-logo.png"/></a>
					<a target="_blank" href="http://friendfeed.com/lmk"><img height="38" width="38" src="images/friendfeed.png"/></a>
					<a target="_blank" href="http://www.facebook.com/pages/Let-Me-Know/36910814229/"><img height="38" width="38" src="images/facebook-logo.gif"/></a>
					<a target="_blank" type="application/rss+xml" rel="alternate" title="Subscribe to the Let Me Know RSS feed" href="http://feeds.feedburner.com/letmeknow/all"><img height="38" width="38" src="images/rss-logo.gif"/></a>
				</div>
			</div>
			
		</div>
	</div>	
	<div class="footer">
	  <p><a href="#">RSS Feed</a> | <a href="#">Contact Us</a> | <a href="#">Sponsor Us</a> | <a href="#">About Us</a> | <a href="#">Disclaimer</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> and <a href="http://validator.w3.org/check?uri=referer">XHTML</a><br />
			&copy; Copyleft 2009 <a href="http://www.lug.nitdgp.ac.in/">GNU/Linux Users Group, NIT Durgapur</a></p>
	</div>
	
</body>
</html>
