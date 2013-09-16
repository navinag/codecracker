<?php include "header.php"; ?> 
	<div class="registration">
		<div class="registration-top">
			<p>New User Registration</p>
		</div>
			
		<form action="reg_user.php" method="POST" enctype="application/x-www-form-urlencoded" name="regform" onsubmit="return validate('user','pass','repass','mail','fname')">
    
		<table width="800" bgcolor="#f6f6f6" align="center">
			<tbody>
			<tr>
				<td colspan="2"><br/>
			</td>
			</tr>
<?php
/* <!--			<tr>
			<td width="30%">Team Handle :</td>
			<td width="50%">
				<input maxlength="16" name="tname" id="team" type="text"> &nbsp;*
			</td>
			<td width="20%">
				<input name="button" onclick="checkTeamName()" value="Check Availability" type="button">
	</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td width="30%">Team Password : </td>
			<td width="50%">
				<input maxlength="16" name="tpass1" id="tpass" type="password"> &nbsp;*
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>(Do not use passwords that you use for orkut etc..)</td>
		</tr>
		<tr>
			<td width="30%">Re-type Password :</td>
			<td width="50%">
				<input maxlength="16" name="tpass2" id="trepass" type="password"> &nbsp;*
			</td>
		</tr>
		<tr>
			<td colspan="2"> </td>
			<td width="50%">&nbsp;</td>
		</tr> --> */ ?>
			<tr>
				<td width="30%">Username :</td>
				<td width="50%">
					<input maxlength="16" name="username" id="user" type="text">&nbsp;*
				</td>
	    
				<td width="20%">
					<input name="button" onclick="check_availability()" value="Check Availability" type="button">
			    </td>
        	</tr>
        	<tr>
				<td colspan="2"></td>
				<td width="50%">&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">User Password :</td>
				<td width="50%">
					<input maxlength="16" name="pass1" id="pass" type="password">&nbsp;*
				</td>
				<td><font color="red" size=-3>Username/password should contain atleast 5 alphanumeric characters</font></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">Re-type Password :</td>
				<td width="50%">
					<input maxlength="16" name="pass2" id="repass" type="password">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">Email ID :</td>
				<td width="50%">
					<input name="email" id="mail" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">First Name :</td>
				<td width="50%">
					<input maxlength="20" name="firstname" id="fname" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">Last Name :</td>
				<td width="50%">
					<input maxlength="20" name="lastname" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">Sex :</td>
				<td width="50%">
					<input checked="checked" name="sex" value="M" selected="selected" type="radio">
					Male&nbsp;&nbsp;
					<input name="sex" value="F" type="radio">
					Female
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">College :</td>
				<td width="50%">
				<input maxlength="50" name="college" id="college" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">Roll No :</td>
				<td width="50%">
				<input maxlength="10" name="roll" id="rno" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">Department :</td>
				<td width="50%">
				<select name="dep">
								<option selected="selected" value="">-Select-</option>
								<option value="BT">BT</option>
								<option value="CSE">CSE</option>
								<option value="CE">CE</option>
								<option value="CHE">CHE</option>
								<option value="EE">EE</option>
								<option value="ECE">ECE</option>
								<option value="IT">IT</option>
								<option value="ME">ME</option>
								<option value="MME">MME</option>
								<option value="MCA">MCA</option>
								<option value="MBA">MBA</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="30%">Year :</td>
				<td width="70%">
					<select name="year" id="yr">
						<option selected="selected" value="">-Select-</option>
						<option value="First">First</option>
						<option value="Second">Second</option>
						<option value="Third">Third</option>
						<option value="Fourth">Fourth</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Mobile No : </td>
				<td><input maxlength="20" name="mobile" type="text"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>Enter text shown:</td>
				<td align="left"><img src="patterns/D6V5Y.gif" id="secImg" height="60" width="120"/>
				<div style="position:absolute; margin-top:13px;display:inline;padding-left:10px;">
					<input size="8px" maxlength="20" name="imgno" id="imgNo" type="text"/>&nbsp;*
				</div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><font color="green" size=-3>(Letters are not case sensitive)</font></td>
			</tr>
			<tr>
				<td></td>
				<td>By clicking on 'Register' below, you are agreeing to the Terms of Service of the Program as well as the Privacy Policy. <br>All Rights Reserved - &copy; Copyleft <?php echo date("Y");?> GNU/Linux User's Group, NIT Durgapur.
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="50%" align="right">
					<input name="reg_page" value="true" type="hidden">
					<input name="Reset" value="Reset" type="reset">
				</td>
				<td align="left">
					<input name="submit" value="Register" type="submit">
					</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			</tbody>
		</table>
    
		</form>
	</div>
	<br>

<?php include "footer.php"; ?>

</body>
</html>
