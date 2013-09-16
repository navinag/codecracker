<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="GLUG NIT-DGP" content="">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>The Code Cracker 3.0 - User Registration</title>
<link rel="shortcut icon" href="logo.jpg">

<script type="text/javascript" src="js/java.js"> </script>
<script type="text/javascript">
	document.title=document.title + " | User Registration";
</script>
</head>

<body onload="getImg()">
<div class="content">
	<div class="header">
		  <div class="logo">
				<h1><a href="#" title="Code On">
				<span class="dark">Code</span>
				<span style="font-weight: normal; color: rgb(255, 102, 0);">Cracker 3.0</span>
				</a></h1>
		  </div>
	</div>

	<div class="bar">
		<ul>
			<li><a href="index.php?t=1255265506" title="Home">Compete</a></li>
			<li><a href="score.php?t=1255265506" title="Score Card">Score Card </a></li>
			<li><a href="compiler_stat.php?t=1255265506" title="Judge Status">Judge Status</a></li>
			<li><a href="htdocs/faq.php?t=1255265506" title="FAQ">FAQs</a></li>
			<li><a href="contact.php?t=1255265506" title="Contact us">Contact Us </a></li>
			<li><a href="credits.php?t=1255265506" title="Credits">Developers</a></li>
			<li class="active"><a href="#">Registration</a></li>
		</ul>
	</div>
	<div class="registration">
		<div class="registration-top">
			<p>New User Registration</p>
		</div>
			
		<form action="reg_user.php" method="POST" enctype="application/x-www-form-urlencoded" name="regform" onsubmit="return validate('user','pass','repass','mail','fname','team','tpass','trepass')">
    
		<table width="800" bgcolor="#f6f6f6" align="center">
			<tbody>
			<tr>
				<td colspan="2"><br/>
			</td>
			</tr>
			<tr>
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
			</tr>
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
				<td>(Letters are not case sensitive)</td>
			</tr>
			<tr>
				<td></td>
				<td>By clicking on 'Register' below, you are agreeing to the Terms of Service of the Program as well as the Privacy Policy. <br>All Rights Reserved - © Copyleft 2009 GNU/Linux User's Group, NIT Durgapur.
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
</div>
<div class="footer">
	<p><a href="#">RSS Feed</a> | <a href="#">Contact Us</a> | <a href="#">Sponsor Us</a> | <a href="#">About Us</a> | <a href="#">Disclaimer</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> and <a href="http://validator.w3.org/check?uri=referer">XHTML</a><br>
			© Copyleft 2009 <a href="http://www.lug.nitdgp.ac.in/">GNU/Linux Users Group, NIT Durgapur</a></p>
</div>

</body>
</html>
