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

include "header.php";

?>

		<div class="main_content">
		<div class="left">
			<h3>What is CodeCracker ? </h3>
			<div class="left_box">
				<img src="images/bigimage.gif" class="image" alt="Big Image" />
				<h2>Codecracker 3.0 -- New and Improved </h2>
				<p align="justify">CodeCracker is a fully automated online programming contest judge system designed and implemented by GLUG members of NIT Durgapur.The main drive and motivation behind this project is to inculcate the culture of programming among students, helping them understand the importance of algorithms as a problem solving tool, and making them recognise the power of GNU/Linux as a powerful programming platform.The judge is built using opensource technologies and tools. So come, code, challenge yourself... prove your intelligence and win recognition for yourself and your college. Click <a href="#" onClick="javascript:window.open('stats.php?=<?php echo $t;?>')">here</a> to know more.</p>
		  	</div>
			<div class="featured_events">
				<h3>Featured Events </h3>
				<div class="left_box">
				<img src="images/ad.gif" class="image" alt="Big Image" />
				<p align="justify">The new year starts and so does the jest for improving your Programming Karma. Team Codecracker promises a double delight this Spring. Two back to back events in the biggest fests of NIT Durgapur. So come on, buckle up and get your cash registers ringing:</b><br><br>
2<sup>nd</sup> February '11: <i>Codecracker Legacy</i> during <a href="http://mkti.in/">Mukti</a> @ <a href="http://www.timeanddate.com/worldclock/fixedtime.html?day=2&month=2&year=2011&hour=22&min=0&sec=0&p1=54">22:00-00:30 IST</a><br>
12<sup>th</sup> February '11: <i>OLPC</i> hosted on Codecracker during <a href="http://arhn.in/">Aarohan</a> @ <a href="http://www.timeanddate.com/worldclock/fixedtime.html?day=12&month=2&year=2011&hour=20&min=30&sec=0&p1=54">20:30-00:00 IST</a></p>
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
							<td colspan="2"><a href="register.php?=<?php echo $t;?>" >Register</a></td>
							<td colspan="2"><a href="mailpasswd.php?=<?php echo $t;?>">Forgot?</a></td:w
>
						</tr>
					</table>
				</form>
				<p>&nbsp;</p>
			</div>
			<div class="site_traffic">
				<h3>Site Traffic</h3>
				
				<div class="user_bar" style="position:absolute;top: 400px;left:900px">
					<a target="_blank" href="http://twitter.com/codecrackernitd"><img height="38" width="38" src="images/twitter-logo.png"/></a>
					<a target="_blank" href="http://www.facebook.com/home.php#!/pages/CodeCracker-30/296319540596"><img height="38" width="38" src="images/facebook-logo.gif"/></a>
					<a target="_blank" type="application/rss+xml" rel="alternate" title="Subscribe to the Let Me Know RSS feed" href="http://feeds.feedburner.com/letmeknow/all"><img height="38" width="38" src="images/rss-logo.gif"/></a>
				</div>
			</div>
			
		</div>
	</div>	
	<?php include "footer.php"; ?>
	
</body>
</html>
