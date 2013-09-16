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
document.title=document.title + " | CREDITS";
</script>
<div class="main_content">
	<?php if ($loggedin){
		include "leftwidget.php";
		echo "<div class=\"center\">";
		
			include "rankcard.php"; 
		}?>		

		<p align="center"><strong><u>CONCEPT</u></strong></p>
		<p align="center"><strong> <a href="http://www.orkut.com/Profile.aspx?uid=2729739825278822284">Souvik Ray</a></strong></p>
		<p align="center">&nbsp;</p>


		<p align="center"><strong><u>PRESENT DEVELOPERS</u></strong></p>
		<p align="center"><strong> <a href="http://roshansingh.wordpress.com">Roshan Kumar Singh</a></strong></p>
		<p align="center"><strong> <a href="http://abhishektheone.blogspot.com">Abhishek Gupta</a></strong></p>
		<p align="center"><strong> <a href="http://kumar-pravin.blogspot.com">Praveen Kumar</a></strong></p>
		<p align="center"><strong> <a href="http://rucrazy.wordpress.com">Tushar Ghosh</a></strong></p><br />
		<p align="center"><strong><u>PAST DEVELOPERS</u></strong></p>
		<p align="center"><strong><a href="http://www.orkut.com/Profile.aspx?uid=3052717252172189359">Shreyank Gupta</a></strong></p>
		<p align="center"><strong><a href="http://www.orkut.com/Profile.aspx?uid=2736031792875277139">Debayan Banerjee</a></strong></p>
		<p align="center"><strong> <a href="http://www.orkut.com/Profile.aspx?uid=11445320287654690959">Rajat Kansal</a></strong></p>
		<p align="center"><strong><a href="http://www.orkut.com/Profile.aspx?uid=11893354354920089462">Swapnil Sonawane</a></strong></p><br>
		<p align="center"><strong><u>PROBLEM SETTERS</u></strong></p>
		<p align="center"><strong><a href="#">Archives</a></strong></p>
		<br />
		<?php if($loggedin)
			echo "</div>";
		?>
</div>

<?php include "footer.php"; ?> 
</body>
</html>

