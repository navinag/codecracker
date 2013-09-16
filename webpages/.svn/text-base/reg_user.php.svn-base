<?php


$reg_page=$_POST['reg_page'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$sex=$_POST['sex'];
$college=$_POST['college'];
$roll=$_POST['roll'];
$year=$_POST['year'];
$username=$_POST['username'];
$passwd=$_POST['pass1'];
$dept=$_POST['dep'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$tname=$_POST['tname'];
$tpass=$_POST['tpass1'];
$roomno=$_POST['roomno'];
$hallno=$_POST['hallno'];
$regno=$_POST['regno'];


$flag = 0;
  
  
  /*$doc = new DOMDocument();
  $doc->load( 'http://mukti09.in/admin/regn.xml' );
  
  $regnd = $doc->getElementsByTagName( "data" );
  foreach( $regnd as $data )
  {
  $regnids = $data->getElementsByTagName( "regnid" );
  $regnid = $regnids->item(0)->nodeValue;
   $emails = $data->getElementsByTagName( "email" );
   $emailx = $emails->item(0)->nodeValue;
   
   if(($regnid == $regno )&& ($emailx == $email))
   {
     $flag = 1;
	 break;
   }
  
  } 
   if($flag==0)
   {
    header('Location: ./register.php?q=notreg');
   
   }*/



header("Cache-Control: no-cache, must-revalidate");
include "header.php";

?>
<script type="text/javascript">
document.title=document.title + " New User Registration";
</script>


<?php if($reg_page): /////Came from register.html/////<!---------Registration processing begins----------> ?>


<?php










$t=time();
include "dbconnect.php";

$query="SELECT count(*) FROM user ".
	"WHERE username=\"$username\"";
$result = stripSlashes($query) ;
$result = mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result);
mysql_free_result($result);

if($row[0]==0)
{
	$flag=1;
}
else
{
	echo "<center><h3>Error 203: Username already exists.<br> Please <a href=\"register.php?t="; echo $t; echo "\">Register</a> again with a different username!!!</h3></center>";
	$flag=0;
}


if($flag)
{
	$query="SELECT * FROM team ".
		"WHERE tname=\"$tname\"";
	$result = stripSlashes($query) ;
	$result = mysql_query($query) or die(mysql_error());

	$exists_team=mysql_num_rows($result);
	if(!$exists_team)
	{
		$flag=1;
	}
	else
	{
		$row=mysql_fetch_array($result);
		$pass=$row['tpass'];
		if($tpass == $pass)
		{
			$user2=$row['user2'];
			if($user2=="")
			{
				$flag=1;
				$user1=$row['user1'];
			}
			else
			{
				echo ("Sorry, this team already has two members!");
				$flag=0;
			}
		}
		else
		{
			echo "The Team Password is invalid!";
			$flag=0;
		}
	}
}

mysql_free_result($result);

if($flag)
{
	$query = "insert into user
    	    (fname,lname,sex,college,roll,dep,year,email,mobile,username,password,tname,regno) values
        	('$fname','$lname','$sex','$college','$roll','$dept','$year','$email','$mobile','$username','$passwd','$tname',' ')";
	$result = stripSlashes($query);
	mysql_query($query) or die('Could not update DB \'user\':'.mysql_error());
	
	$query="SELECT * FROM score ".
		"WHERE tname=\"$tname\"";
	$result = stripSlashes($query) ;
	$result = mysql_query($query) or die(mysql_error());
	$exists_score=mysql_num_rows($result);
	mysql_free_result($result);
	
	$query="SELECT * FROM score ";
	$result = mysql_query($query) or die(mysql_error());
	$no_of_teams = mysql_num_rows($result);
	mysql_free_result($result);

	if(!$exists_score)
	{
		$query = "INSERT INTO score ".
			"VALUES('$tname',0,0,0,0,$no_of_teams+1)";
		$result = stripSlashes($query) ;
		mysql_query($query) or die('SQL error:'.mysql_error());
	}
	
	if(!($exists_team))
	{
		$tid=time()%1000;
		$len=strlen($tname);
		for($i=1;$i<=$len;$i++)
		{
			$tid=($tid + 3 + ($tid + $i)) % 100000;
		}
		$query = "insert into team ".
			"(tname,tpass,user1,user2,tid) ".
			"values('$tname','$tpass','$username','','$tid')";
	}
	else
	{
		$query = "update team ".
			"set user2='$username'".
			"where tname='$tname'";
	}
	$result = stripSlashes($query) ;
	mysql_query($query) or die('SQL error:'.mysql_error());

	echo "<center><h3>You have been successfully registered !!!";
	echo "<br>Click here to <a href=\"index.php?t=$t"; echo $t; echo "\">compete</a></h3></center>";
}

///////Processed page since came from register.html
?>

<?php else: //////////Opened this page by typing in the URL directly into address bar of web-browser!//////////  ?>

<p align="center"><b><h3>Looks like the Penguin has learnt flying!!! <br>Error 503: Bad bad Server</h3>
<?php echo date("d-m-Y H:i:s", mktime()); ?></b></p>

<?php endif; ?>

<!------Inserted this $reg_page feature as someone would try to insert blank entries into the MySQL table by opening this script through typing the URL directly into the address bar.----------->

<!-- -------End of Processing----------------------- --></div>
<div class="footer" style="position: relative;top: 20px">
		  <p><a href="#">RSS Feed</a> | <a href="#">Contact Us</a> | <a href="#">Sponsor Us</a> | <a href="#">About Us</a> | <a href="#">Disclaimer</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> and <a href="http://validator.w3.org/check?uri=referer">XHTML</a><br />
			&copy; Copyleft 2009 <a href="http://www.lug.nitdgp.ac.in/">GNU/Linux Users Group, NIT Durgapur</a></p>
		</div>
	</div>
</body>
</html>
