<?php

/************Check if a user is logged in*************/
header("Cache-Control: no-cache, must-revalidate");
$user=$_COOKIE['userstats'];
$t=time();
if(isset($user))
{
	$tname=$user["tname"];
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
include "header.php";
?>
<script type="text/javascript">
document.title=document.title + " | Sponsor Us";
</script>


<div class="main_content">
	<?php if ($loggedin){
		include "leftwidget.php";
		echo "<div class=\"center\">";
		
			include "rankcard.php"; 
		}?>		
			<div class="faq">
				<div class="faq-head"><h3>Sponsor Us</h3></div>
				
				<p align="justify"><b>We are all aware of the pitiable state of things when it comes to hiring talented employees for start-ups</b><br /> The problem is far more acute in a market like India because of the mind-set - the typical employee who chooses to stick to a big brand company because of the security and the social status attached to being an employee of a household name. The rarer breed of talented coders who would trade that for the challenges of working on cutting edge technology and the thrill of working for a start-up, however, end up being far more ambitious and attempt to add to the already populated list of such start-up and in the process, further accentuate the problem because of the increase in opportunities. This, coupled with the severe shortage of people to satisfy the growing opportunities has led to the aforementioned state of affairs.   
				<br/> <br/>
				<b>We, however, have a proposition for companies in such states to tide over this difficulty</b><br/> We, the GNU/Linux Users Group at NIT Durgapur have always attempted to foster development and coding alongside our primary motive of popularizing FOSS. To that end, we created CodeCracker - a fully functional online judge open to everyone that was developed in-house from scratch. Having been in existence for three years now, we have gathered a set of regulars among enthusiastic coders all over India who participate in all the competitions we conduct. We have been striving to create a top-coder like experience where the competitors are known and recognized only by their nicks. As such, we have seen tremendous growth. We started off with page views and visitors from literally ALL over the world back in 2008. Since then, we had those page views slowly but surely convert into participation - we had over a hundred teams from India participate in 2009. This shot up all the way to nearly 200, with international participants joining the mix! Looking at the graph of teams participating in CodeCracker, on a year-by-year basis, we see a doubling of participation each year - and since each team has 2 members, we might be looking at over 800 participants this year! </p>
				<br/>
				<div class="left"><div class="featured_events">
				<h3><b>CodeCracker will be conducted in the first week of February, 2011 this year.</b></h3>
				
				<br/>
				<p align="justify">In that light, if companies would like to advertise with us, as sponsors, we would be delighted to offer them advertisement space on our website so that coders who participate could contact you for employment. Alongside this, we could link some of the top competitors of CodeCracker with our sponsors that they could be contacted for job offers if they are interested. The upside to this will be the fact that most such participants would be final year students who will be finishing their degrees in two more months and hence would be available for joining fresh out of college. </p>
				<p align="justify"><b>To know more about CodeCracker and see the relevant user statistics from the past</b>, please visit <a href="#" onClick="javascript:window.open('stats.php?t=<?php echo $t;?>','Statistics','width=1100,height=800');return false">http://codecracker.in/stats.php</a></p>
<p align="justify">You can find out more about our club, <b>GLUG-NITD</b> at <a href="http://lug.nitdgp.ac.in/">http://lug.nitdgp.ac.in</a>. More information on MUKTI, the FOSS Technological Symposium of which CodeCracker is a part, can be found at <a href="http://mkti,in/">http://mkti.in</a>. Some of <b>MUKTI's past sponsors</b> can be found at <a href="http://mkti.in/sponsors">http://mkti.in/sponsors</a></p>
</div></div>
				<div class="right">
					<div class="site_traffic">
						<center><img src="images/status.png" width="350"></center>
					</div>
				</div>
<b>No. of participants with year of conducting event</b><br/>
<p>If you are <b>interested in sponsoring us</b>, drop a mail at:<br/>
<b>Praveen Kumar</b> - <a href="mailto:kumarpraveen@codecracker.in">kumarpraveen@codecracker.in</a> or <a href="mailto:praveen@mkti.in">praveen@mkti.in</a><br/>
<b>Kushagra Udai</b> - <a href="mailto:kushagra@codecracker.in">kushagra@codecracker.in</a> or <a href="mailto:kushagra@mkti.in">kushagra@mkti.in</a></p>
			</div>
		<?php if($loggedin)
			echo "</div>";
		?>
</div>

<?php include "footer.php"; ?> 
</body>
</html>
