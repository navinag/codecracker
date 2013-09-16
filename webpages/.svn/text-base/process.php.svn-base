<?php
include "authenticate.php";
include "retrieve.php";
$t=time();

$code=$_POST['code'];
$choice = $_POST['language'];
$unixtime = date("d-m-Y H:i:s",mktime());

/********************** OBTAINING SUBMITTED PROBLEM ID ****************************/
$problem_arr = array(
'1' => 'Problem 1',
'2' => 'Problem 2',
'3' => 'Problem 3',
'4' => 'Problem 4'
);
$problem_id=$_POST['ProblemNo'];
$problem_str=$problem_arr[$problem_id];
include "header.php";
?>


<script type="text/javascript">
document.title=document.title + " | Compilation Result";
</script>

<div class="main_content">
	<?php include "leftwidget.php"; ?>
	<div class="center">
		<?php include "rankcard.php"; ?>
		<div class="result">
		<?php
		/****************************** STORING CODE TO MYSQL *********************************/
		include "dbconnect.php";


		$q="SELECT * FROM score where tname='$tname'";
		$result=mysql_query($q) or die(mysql_error());
		$res=mysql_fetch_row($result);

		print"<BR>$unixtime";
		print"<BR>You submitted solution for '$problem_id'";
		//////////////if there are bad words fine em 100 points and move on/////////////////
		if((strstr($code,"fork(")!="") || (strstr($code,"exec(")!="") || (strstr($code,"fopen(")!="") ||(strstr($code,"freopen(")!="") || (strstr($code,"kill(")!="") || (strstr($code,"popen(")!="") || (strstr($code,"unistd")!="") || (strstr($code,"system(")!="") || (strstr($code,"wait.h")!="") || (strstr($code,"pid(")!=""))
		{print "<BR> <b>We found you using system calls in your program. We recognise this as an act of malicious intent and you are thus fined 100 points. </b>";
		$q="UPDATE score SET score=score-100 WHERE tname='$tname'";	 
		if(!($t=mysql_query($q)))
		print mysql_error()."<BR>Could not insert the values into the table";
 
		$filetime=time()%10000;
		$penaltyfilename="./penalty/".$tname."_".$problem_id."_".$filetime.".txt";
		file_put_contents($penaltyfilename,$code);
 

		}
		else
		{  
		/************************ LIMIT THE NO OF SUBMISSIONS *********************************/
		if($res[3]>=75)
		print "<BR> <b> Number of submissions limit (75) has already been reached OR You have been disqualified.</b>";
		else 
		{
			$solved = $res[2];
			$substring = "/".$problem_id ."/";
			//print "<BR>substring = $substring";
			//$test = strstr($solved,$substring);
			//print "<BR>here we are: $test";
			if(strstr($solved,$substring)!="")
			{	
				print "<BR> <b>You have already submitted a correct solution to this problem. Don't try to be oversmart:-).</b>";
			}
			else if($tname==""){print "<BR> <b>Your teamname was found to be null. We cant process your code.</b>";}
			else if($problem_id == NULL)
			{
				print "<BR> <b>You have tried to submit solution for an unidentified problem. Don't try to be oversmart:-).</b>";
			}	
			else
			{
				//print "<BR>$solved";
				$q="UPDATE score SET sub=sub+1 WHERE tname='$tname'";	 
				$result=mysql_query($q);

				$query=sprintf("INSERT INTO queue VALUES ('$tname','%s',0,'$unixtime','$problem_id','$choice')",mysql_real_escape_string($code));
				if(!($t=mysql_query($query)))
				print mysql_error()."<BR>Could not insert the values into the table";
				$query="SELECT min(cid) AS cid FROM queue WHERE tname='$tname'";
				$result=mysql_query($query);
				$res=mysql_fetch_row($result);
				$cid=$res[0];
				// print"<BR> Code Id of the earliest submitted code is :$cid";

				$q="SELECT running FROM daemonstatus";
				$result=mysql_query($q) or die(mysql_error());
				$res=mysql_fetch_row($result);
				$daemonstatus=$res[0];
				$count=0;
				if($daemonstatus=='n')
				{print "<BR> <b>The online judge is taking some rest. Your code has been stored and will be processed soon. Look in the compiler status table for the result.</b>";}
				else
				{

					while(1)
					{
						$query="SELECT * from status WHERE cid='$cid'";
						$result=mysql_query($query);
						if($count==8)
							{print "<BR> <b>The online judge looks very busy. Your code has been stored and will be processed soon. Look in the compiler status table for the result.</b>";break;}
						if(!($res=mysql_fetch_row($result)))
							{usleep(2000000);$count++;}
	
						else
						{
							$status=$res[1];
							$query="delete from status where cid='$cid'";
							$result=mysql_query($query);
							$query="delete from status where cid='$cid'";
							$result=mysql_query($query);
							break;
						}

					}//end of infinite while


				}//end of else
				print "<BR><B>$status</B>"; 
			}
		}
		}
	?>
	</div>
</div>
</body>
</html>
