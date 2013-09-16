<?php
  	include "dbconnect.php";
	$query="select * from online order by id desc";
	$result=mysql_query($query) or die(mysql_error());

?>	 
<div class="leftwidget">
	<table class="online">
		<tr>
		<td class="online-header">Now Online</td>
		</tr>
		<?php 
			$i=0;
			while($row = mysql_fetch_array($result) and $i < 5)
			{	$i++;
				echo "<tr>";
				echo "<td>" . $row['username'] . "</td>";
				echo "</tr>";
	
			}
		?>

	</table>
</div>
