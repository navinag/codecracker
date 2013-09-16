<?php
	/**********Connect to MySQL - score table***********/
	include "header.php";
	include "dbconnect.php";
?>

<script type="text/javascript">
	document.title=document.title + " | Score";
</script>


<div class="main_content">
	<?php include "leftwidget.php"; ?>
	<div class="center">
		<?php include "rankcard.php"; ?>
		
		<div class="scoreboard">
			<table cellpadding="0" cellspacing="0" border="1" class="scoretable">
			<tr>
			<td colspan="6" class="score-header">
			CodeBoard at <?php $t = time(); echo  date("m/d/y G:i:s A",$t);?>
			</td>
			</tr>
			
			<tr><td colspan="6" >&nbsp;</td>
			</tr>
			<tr>
			<th width="80" align="center">Rank</th>

			<th width="100" align="center">Username</th>
			<th width="100" align="center">Score</th>
			<th width="120" align="center">Submissions</th>
			<th width="200" align="center">Problems Solved</th>
			<th width="200" align="center">Latest Correct Submission</th>
			</tr>
			<tr><td colspan="6">&nbsp;</td>
			</tr>
			<?php
			
			$query="select * from score order by rank";
			$result=mysql_query($query) or die(mysql_error());
			$row = mysql_fetch_array($result);
			do
			{	
				$prob_solved=substr($row["solved"],1);
				if($prob_solved=='')
				{
					$prob_solved='-';
				}
				echo "<tr>\n";
				echo "<td align=\"center\">".$row["rank"]."</td>\n";
				echo "<td align=\"center\">".$row["tname"]."</td>\n";
				echo "<td align=\"center\">".$row["score"]."</td>\n";
				echo "<td align=\"center\">".$row["sub"]."</td>\n";
				echo "<td align=\"center\">".$prob_solved."</td>\n";
				echo "<td align=\"center\">".$row["timestmp"]."</td>\n";
				echo "</tr>\n";
			}while($row = mysql_fetch_array($result));
			echo "<tr><td align=\"center\" colspan=\"6\" border=\"0\">
			&nbsp;
			</td>
			</tr>";
			?>
			</table>
		</div>
	</div>
</div>

<?php include "footer.php"; ?> 
</body>
</html>

