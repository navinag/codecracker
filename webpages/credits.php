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
<div class="main_content">
	<?php if ($loggedin){
		include "leftwidget.php";
		echo "<div class=\"center\">";
		
			include "rankcard.php"; 
		}?>		

		<p align="center">&nbsp;</p>


		<p align="center"><strong><u>PRESENT MAINTAINERS</u></strong></p>
		<p align="center"><strong> <a href="http://kumar-pravin.blogspot.com">Praveen Kumar</a></strong></p>
		<p align="center"><strong> <a href="index.php?=<?php echo $t;?>">Tushar Ghosh</a></strong></p>
		<p align="center"><strong> <a href="http://navinag.blogspot.com/">Navin Agarwal</a></strong></p><br />
		<p align="center"><strong><u>PAST DEVELOPERS</u></strong></p>
		<table align="center" width="50%">
		<tr align="center">
			<td>
				<a href="http://www.orkut.com/Profile.aspx?uid=11445320287654690959">
					
				</a>
			</td>
			<td align="left" width="30%">
				<strong>
				Rajat Kansal <br />
				Amazon India <br />
				IT '09
				</strong>
			</td>
			<td rowspan="3">
				<img src="images/watermark.png" width="70%" height="50%" />
			</td>
			<td align="right" width="30%">
				<strong>
				Shreyank Gupta <br />
				Red Hat India <br />
				CSE '09
				</strong>
			</td>
			<td>
				<a href="http://www.orkut.com/Profile.aspx?uid=3052717252172189359">
					
				</a>
			</td>
		</tr>
		<tr align="center">
			<td>
				<a href="http://www.orkut.com/Profile.aspx?uid=2736031792875277139">
					
				</a>
			</td>
			<td align="left" width="30%">
				<strong>
				Debayan Banerjee <br />
				Nivio India<br />
				IT '09
				</strong>
			</td>
			<td align="right" width="30%">
				<strong>
				Swapnil Sonawane <br />
				Amazon India <br />
				CSE '09
				</strong>
			</td>
			<td>
				<a href="http://www.orkut.com/Profile.aspx?uid=11893354354920089462">
					
				</a>
			</td>
		</tr>
		
		<tr align="center">
			<td>
				<a href="http://www.orkut.com/Profile.aspx?uid=2736031792875277139">
					
				</a>
			</td>
			<td align="left" width="30%">
				<strong>
				Roshan Singh <br />
				Zynga Inc.<br />
				IT '10
				</strong>
			</td>
			<td align="right" width="30%">
				<strong>
				Abhishek Gupta <br />
				TCS <br />
				CSE '10
				</strong>
			</td>
			<td>
				<a href="http://www.orkut.com/Profile.aspx?uid=11893354354920089462">
					
				</a>
			</td>
		</tr>
		</table>
		<p align="center"><strong><u>PROBLEM SETTERS</u></strong></p>
		<p align="center"><strong><a href="http://lug.nitdgp.ac.in/codecracker/archives/">Archives</a></strong></p>
		<br />
		<?php if($loggedin)
			echo "</div>";
		?>
</div>

<?php include "footer.php"; ?> 
</body>
</html>

