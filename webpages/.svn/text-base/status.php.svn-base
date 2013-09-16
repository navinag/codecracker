<?php

/************Check if a user is logged in*************/
header("Cache-Control: no-cache, must-revalidate");
$user=$_COOKIE['userstats'];
$t=time();
if(isset($user))
{
	$tname=$user["username"];
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
include "dbconnect.php";
?>

<script type="text/javascript">
	document.title=document.title + "| Judge Status";
</script>


<div class="main_content">
	<?php include "leftwidget.php"; ?>
	<div class="center">
		<?php include "rankcard.php"; ?>
		
		<div class="statusboard">
			<table class="statustable" cellpadding="0" cellspacing="0" border="1">
			<tr>
			<td colspan="6" class="status-header">
				Current Judge Status as on <?php $t = time(); echo date("G:i:s A",$t); ?>
			</td>
			</tr>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			<tr>
				<th width="80" align="center">CID</th>
				<th width="180" align="center">Time</th>
				<th width="120" align="center">Username</th>
				<th width="130" align="center">Problem no</th>
				<th width="150" align="center">Result</th>
				<th width="140" align="center">Running Time</th>
			</tr>
			<tr><td colspan="6">&nbsp;</td>
			</tr>
			<?php
			$query="select * from compiler order by cid desc";
			$result=mysql_query($query) or die(mysql_error());
			$row = mysql_fetch_array($result);
			do
			{
				echo "<tr>\n";
				echo "<td align=\"center\" width=\"\">".$row["cid"]."</td>\n";
				echo "<td align=\"center\" width=\"\">".$row["time"]."</td>\n";
				echo "<td align=\"center\" width=\"\">".$row["tname"]."</td>\n";
				echo "<td align=\"center\" width=\"\">".$row["problemid"]."</td>\n";
				echo "<td align=\"center\" width=\"\">".$row["result"]."</td>\n";
				echo "<td align=\"center\" width=\"\">".$row["runningtime"]."</td>\n";
				echo "</tr>\n";
			}while($row = mysql_fetch_array($result));
			echo "<tr><td align=\"center\" colspan=\"6\" border=\"0\">&nbsp;</td></tr>";
			?>
			</table>	
		</div>
	</div>
</div>

<?php include "footer.php"; ?> 
</body>
</html>
