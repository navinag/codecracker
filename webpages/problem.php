<?php
include "authenticate.php";
include "retrieve.php";
$t=time();

$probid=$_GET['probid'];

$prob_filename="/usr/local/codecracker/questionnaire/prob".$probid.".txt";
$prob_statement="";
if(file_exists($prob_filename))
{
	$fp=fopen($prob_filename,"r");
	while(!feof($fp))
	{
		$prob_statement=$prob_statement.fgetc($fp);
	}
	fclose($fp);
}
else
{
	$prob_statement="Question not found in the Database!";
}
include "header.php";
?>
<script type="text/javascript">
document.title=document.title + " | Problem Statement";
</script>

<div class="main_content">
	<?php include "leftwidget.php"; ?>
	<div class="center">
		<?php include "rankcard.php"; ?>
		
		<div class="problemtext">
			<form name="form" method="post" action="process.php?t=<?php echo $t; ?>">
			
			<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<p>Problem Statement: (If this is the first time you are submitting your code, please <a href="faq.php" target="_blank">Read Me</a>)</p>
				</td>
			</tr>
			<tr>
				<td>
					<textarea name="probstatement" readonly="readonly" cols="98" rows="25" style="background:#FFFFFF;"><?php echo($prob_statement); ?>
					</textarea>
				</td>
			</tr>
			</table>
			<br/>
			
			<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
				<th scope="col">
                  <p>Write Your Code Here:</p>
                </th>
            </tr>
            <tr>
                <td><textarea name="code" cols="98" rows="30"></textarea></td>
            </tr>
			</table>
			<br/>
			<table width="500" align="center">
			<tr>
				<td><input type="radio" name="language" value="c" checked="checked"/>C/C++</td>
				<td><input type="radio" name="language" value="python" />Python</td>
				<td><input type="radio" name="language" value="java" />Java</td>
			</tr>
			</table>
			<br/>
			<input type="hidden" name="ProblemNo" value="<?php echo $probid; ?>" />
			<input name="Submit" type="submit" id="Submit" value="Submit"/>
			</form>
			<br/>
		</div>
    </div>
</div>

<?php include "footer.php"; ?> 
</body>
</html>
