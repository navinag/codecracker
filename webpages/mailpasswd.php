<?php

/* script for generating password for forgotten users */
header("Cache-Control: no-cache, must-revalidate");
$t = time();
$user = $_COOKIE['userstats'];
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
	<form  method="POST" action="forgot_password.php?t=<?php echo $t; ?>">
		<table align="center" width="350px">
			<tr>
			<td colspan="1">Username:</td>
			<td colspan="1"><input type="text" name="username" id="username" /></td>
			</tr>
			<tr>
			<td colspan="1">Email:</td>
			<td colspan="1"><input type="text" name="emailid" id="emailid" /></td>
			</tr>
			<tr>
			<td align="center"><input type="submit" value="Send" /></td>
			<td align="center"><input type="reset" value="Clear" /></td>
			</tr>
			<tr>
			<td colspan="2"><p align="justify">Please enter your email and username. You will receive a notification mail with a temporary password subject to successful verification.</p></td>
			</tr>
		</table>
	</form>
</div>

<?php
include "footer.php";
?>

</body>
</html>
