<?php
	include "authenticate.php";
	include "retrieve.php";
	$t=time();

	$subj=$_GET['sub'];
	$action=$_GET['act'];
	include "header.php";
	/****Link to both tables: team, user*****/
	include "dbconnect.php";

	$query="select * from team ".
			"where tname=\"$tname\"";
	$result=mysql_query($query) or die(mysql_error());
	$row=mysql_fetch_array($result);
	mysql_free_result($result);

	$user1=$row['user1'];
	$user2=$row['user2'];

	$query="select * from user ".
			"where username=\"$user1\"";
	$result=mysql_query($query) or die(mysql_error());
	$row_user1=mysql_fetch_array($result);
	mysql_free_result($result);

	if($user2!='')
	{
		$query="select * from user ".
				"where username=\"$user2\"";
		$result=mysql_query($query) or die(mysql_error());
		$row_user2=mysql_fetch_array($result);
		mysql_free_result($result);
	}

	mysql_close($conn);

?>

<script type="text/javascript">
document.title=document.title + " Change Password";
</script>

<div class="main_content">
	<?php include "leftwidget.php"; ?>
	<div class="center_table">
<?php
	if($action=='change')
	{
		changepass();
	}
	else
	{
?>
		<form action="chpasswd.php?sub=<?php echo $subj; ?>&act=change&t=<?php echo $t; ?>" onSubmit="return passwdmatch()" method="post">
			<table width="600" border="0" cellspacing="0" cellpadding="0">
				<?php if($subj == 'team'): ?>
				<tr>
					<th colspan="2" scope="col">Change Team Password</th>
				</tr>
				<tr>
					<th width="60%" scope="row">&nbsp;</th>
					<td width="40%">&nbsp;</td>
				</tr>
				<tr>
					<th width="60%" scope="row">
						<div align="left">New Team Password : 
						</div>
					</th>
					<td width="40%">
						<input type="password" name="pass" id="pass">
					</td>
				</tr>
				<tr>
				  <th width="60%" scope="row">&nbsp;</th>
				  <td width="40%">&nbsp;</td>
				</tr>
				<tr>
					<th width="60%" scope="row">
						<div align="left">Re-type New Team Password : 
						</div>
					</th>
					<td width="40%">
						<input type="password" name="repass" id="repass">
					</td>
				</tr>
				<tr>
					<th width="60%" scope="row">&nbsp;</th>
					<td width="40%">&nbsp;</td>
				</tr>
				<tr>
					<th width="60%" scope="row">
						<div align="left">User <?php echo $user1; ?>'s Password :
						</div>
					</th>
					<td width="40%"><input type="password" name="u1pass" id="u1pass"></td>
				</tr>
				<tr>
					<th width="60%" scope="row">&nbsp;</th>
					<td width="40%">&nbsp;</td>
				</tr>
				<?php if($user2!=''): ?>
				<tr>
					<th width="60%" scope="row">
						<div align="left">User <?php echo $user2; ?>'s Password :
						</div>
					</th>
					<td width="40%"><input type="password" name="u2pass" id="u2pass"></td>
				</tr>
				<tr>
				  <th width="60%" scope="row">&nbsp;</th>
				  <td width="40%">&nbsp;</td>
				</tr>
				<?php endif; ?>
				<?php else: ?>
				<tr>
					<th colspan="2" scope="col">Change User Password</th>
				</tr>
				<tr>
					<th width="60%" scope="row">&nbsp;</th>
					<td width="40%">&nbsp;</td>
				</tr>
				<tr>
					<th width="60%" scope="row">
						<div align="left">Old Password :
						</div>
					</th>
					<td width="40%">
						<input type="password" name="opass" id="opass">
					</td>
				</tr>
				<tr>
					<th width="60%" scope="row">&nbsp;</th>
					<td width="40%">&nbsp;</td>
				</tr>
				<tr>
					<th width="60%" scope="row">
						<div align="left">New Password :
						</div>
					</th>
				  <td width="40%">
					<input type="password" name="pass" id="pass">
				  </td>
				</tr>
				<tr>
					<th width="60%" scope="row">&nbsp;</th>
					<td width="40%">&nbsp;</td>
				</tr>
				<tr>
					<th width="60%" scope="row">
						<div align="left">Re-type New Password : 
						</div>
					</th>
					<td width="40%">
						<input type="password" name="repass" id="repass">
					</td>
				</tr>
				<tr>
					<th width="60%" scope="row">&nbsp;</th>
					<td width="40%">&nbsp;</td>
				</tr>
				<?php endif; ?>
				<tr>
					<th width="60%" scope="row">&nbsp;</th>
					<td width="40%"><input type="submit" value="Change Password"></td>
				</tr>
			</table>
		</form>
		<?php
	}

	function changepass()
	{
		global $subj, $user2;
		if($subj=='team')
		{
			global $row_user1;
			$u1pass=$_POST['u1pass'];
			$tpass=$_POST['pass'];
			
			$user1chk=($u1pass==$row_user1['password']);
			$user2chk=true;
			
			if($user2!='')
			{
				global $row_user2;
				$u2pass=$_POST['u2pass'];
				$user2chk=($u2pass==$row_user2['password']);
			}
			
			if($user1chk && $user2chk)
			{
				global $tname;
				include "dbconnect.php";
		
				$query="update team ".
						"set tpass='$tpass' ".
						"where tname=\"$tname\"";
				mysql_query($query) or die(mysql_error());
				mysql_close($conn);
				
				echo "<p>Your team password has been changed successfully!</p>";
			}
			else
			{
				echo "<p>Either of the team members' password is incorrect. Your team password could not be changed!</p>";
			}
		}
		else
		{
			global $user1, $user2;
			$username=${$subj};
			
			$pass=$_POST['pass'];
			$opass=$_POST['opass'];
			
			if($subj == 'user1')
			{
				global $row_user1;
				$row=$row_user1;
			}
			else
			{
				global $row_user2;
				$row=$row_user2;
			}
					
			if($opass == $row['password'])
			{
				include "dbconnect.php";
			
				$query="update user ".
						"set password='$pass' ".
						"where username=\"$username\"";
				mysql_query($query) or die(mysql_error());
				mysql_close($conn);
				
				echo "<p>Your password has been changed successfully!</p>";
			}
			else
			{
				echo "<p>Old password is incorrect. Your password could not be changed!</p>";
			}
		}
	}
?>
	</div>
</div>
<?php include"footer.php"; ?>
</body>
</html>
