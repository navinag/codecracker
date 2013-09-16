<?php
session_start();
header("Cache-Control: no-cache, must-revalidate");

$tname=$_POST['tname'];
$tpass=$_POST['tpass'];
include "dbconnect.php";
$t=time();

$query="SELECT * FROM team ".
	"WHERE tname=\"$tname\"";
$result = stripSlashes($query) ;
$result = mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result);
$unixtime = date('l dS \of F Y h:i:s A');
if($tname!='' && tpass!='')
{
    
	if($tpass == $row['tpass'])
	{
		setcookie("userstats[tid]", $row['tid']);
		setcookie("userstats[loggedin]", 1);
		setcookie("userstats[logintime]", date("d-m-Y H:i:s", mktime()));
		header("Location:redirect.php?t=$t");
	}
}
$_SESSION['tname']=$tname;
include "header.php";
?>
<script type="text/javascript">
document.title=document.title + " VerifyLogin";
</script>
<?php
	
	echo "<center><br><b>Error 403:</b> Invalid Login! Either your Username and/or Password is incorrect.<br>";
	echo "If you have not registered yet, please <a href=\"register.php?t="; echo $t; echo "\">Register</a> first and then Sign In.<br>";
	echo "<br><a href=\"index.php?t=$t\">Click here to go back to Login page</a></center>";
	echo "<br><br><div class=\"footer\">
		  <p><a href=\"#\">RSS Feed</a> | <a href=\"#\">Contact Us</a> | <a href=\"#\">Sponsor Us</a> | <a href=\"#\">About Us</a> | <a href=\"#\">Disclaimer</a> | <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">CSS</a> and <a href=\"http://validator.w3.org/check?uri=referer\">XHTML</a><br />
			&copy; Copyleft 2009 <a href=\"http://www.lug.nitdgp.ac.in/\">GNU/Linux Users Group, NIT Durgapur</a></p>
		</div></div></body></html>";
mysql_free_result($result);
mysql_close($conn);
?>
<?php
include 'dbconnect.php';

//$conn=mysql_connect($host,$user,$password) or die(mysql_error());
//mysql_select_db($database) or die(mysql_error());
$query1="insert into online (username) values('$tname')";
mysql_query($query1);
mysql_close($conn);
?>
