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
document.title=document.title + " | Contact";
</script>


<div class="main_content">
	<?php if ($loggedin){
		include "leftwidget.php";
		echo "<div class=\"center\">";
		
			include "rankcard.php"; 
		}?>		
			<div class="contact">
			<p>If you have any queries regarding the format of the competition, or some technical issues contact:-</p>
			<br/>
			<table width="700" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#000000">
			<tr>
				<td><b>NAME</b></td>
				<td><b>PHONE NO</b></td>
				<td><b>GTALK ID</b></td>
				<td><b>Hall &amp; Room</b></td>
			</tr>  
			<tr>
				<td>Tushar Ghosh</td>
				<td>+91 9903891603</td>
				<td>2shar007</td>
				<td>Hall 5, Room 378</td>
			</tr> 
			<tr>
				<td>Praveen Kumar</td>
				<td>+91 9232575381</td>
				<td>kumarpraveen.nitdgp</td>
				<td>Hall 5, Room 207</td>
			</tr>
			<tr>
				<td>Navin Agarwal</td>
				<td>+91 9832637705</td>
				<td>navin0706</td>
				<td>Hall 2, Room 304</td>
			</tr>
			</table>
			<p>&nbsp;</p>
			<p><strong>To get yourself registered with GLUG contact (Registration fees Rs. 90/-)</strong></p>
			
			<table width="700" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#000000">
			<tr>
				<td>NAME</td>
				<td>PHONE NO</td>
				<td>GTALK ID</td>
				<td>HALL &amp;ROOM</td>
			</tr>
			<tr>
				<td>Kushagra Udai </td>
				<td>+91 9432106455</td>
				<td>kushagra.udai</td>
				<td>Hall 4, Room 317</td>
			</tr>
			<tr>
                                <td>Praveen Kumar</td>
                                <td>+91 9232575381</td>
                                <td>kumarpraveen.nitdgp</td>
                                <td>Hall 5, Room 207</td>
                        </tr>

   			</table>
			</div>
			
		<?php if($loggedin)
			echo "</div>";
		?>
</div>

<?php include "footer.php"; ?> 
</body>
</html>

