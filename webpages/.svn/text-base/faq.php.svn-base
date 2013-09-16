<?php

/************Check if a user is logged in*************/
header("Cache-Control: no-cache, must-revalidate");
$user=$_COOKIE['userstats'];
$t=time();
if(isset($user))
{
	$tname=$user["tname"];
	$loggedin=$user["loggedin"];
	$logintime=$user["logintime"];
}
else
{
	$loggedin=0;
}
if($loggedin){
	include "retrieve.php";
	$t=time();
	}
include "header.php";
?>
<script type="text/javascript">
document.title=document.title + " | FAQs";
</script>


<div class="main_content">
	<?php if ($loggedin){
		include "leftwidget.php";
		echo "<div class=\"center\">";
		
			include "rankcard.php"; 
		}?>		
			<div class="faq">
				<div class="faq-head"><h3>Judging</h3></div>
				
				<p>After you have submitted the source code for judging,  
				your submission will be run with one or several sets of input data and the 
				results reviewed. 
				<em>It is the judges' intent never to reveal directly or indirectly the specific input data the judge uses to test contestant's programs.</em>
				The judges will respond to your submission with one of the following messages.  
				<br/> <br/>
				If a submission contains more than one type of error, the response will still contain only one message. The judges will report only the first error seen, 
				which may not necessarily be the error that occurs first or most frequently in the output.</p>
				<br/>
				<p>* <strong>CORRECT ANSWER :</strong> Congratulations, you have just solved the problem.</p>
				<p>* <strong>COMPILE  ERROR :</strong> The judges was unable to compile your program. Check whether <br/>
				&nbsp; &nbsp;1. You  submitted the correct source code.<br>
				&nbsp; &nbsp;2. You  tested the compilation before submitting the file.</p>
				<p>* <strong>WRONG  ANSWER :</strong>Your  program did not produce the expected results.<br/>
				The  output of your program may be incorrectly formatted. Check that the significant  digits, delimiters, whitespace, spelling, etc., in your program's output conform to that given in the problem description.</p>
				
				<p><strong>The compiler status gives you the exact CPU running time of your program.</strong></p> 
				<p><strong>&quot;Time Limit Exceeded&quot; means your program exceeded the 4 second time limit.</strong></p>
				<p><strong>&quot;Abnormal Termination&quot; means your program did compile properly but it did not execute properly (segmentation fault etc) . </strong></p>
				<p>The judge will attempt to return responses within a  few seconds of submission. If it takes longer, we either are having to deal  with a large number of submissions or are having other problems. (Typically,  the very first submission for a problem will take slightly longer than usual to  judge; also, the last half hour of the contest is usually extremely busy.  Programs that require more CPU time or that have infinite loops will also take  longer to judge for obvious reasons.) </p>
				
				<div class="faq-head"><h3>FAQS</h3></div>
				<p>Q : Can I use a compiler other than gcc ?<br>
				A : Yes, you can use any C or C++ compiler as per  your preference. But your program must be platform independent. 
				ie It must be  &quot;COMPILABLE&quot; in all other platforms as well. In short, your code  should ANSI C compatible</p>

				<p>Q : How do i  know what functions are available in gcc?<br>
				A : If you are  working on linux or *nix platform, type &quot;info libc&quot; or &quot;man  libc&quot; at the shell. 
				Browse through the document and look for functions.</p>
				
				<p>Q : Can I use conio.h header file ?<br>
				A : NO. conio.h is specific to DOS platform. Hence  including this file will result in compile time error</p>
				
				<p>Q : How do I ensure that my code is ANSI C/C++  compatible ?<br>
				A : Don't include any functions and header file that is  platform dependent. eg.conio.h, dos.h,etc</p>
				
				<p>Q : I am using Turbo or Borland Compiler. How do I  know whether a function is ANSI C/C++ compatible or not ?<br>
				A : In the help file of Turbo/Borland Compiler there  is a documentation of each function.<br>
				This documentation can be used to know whether the  function is specific to DOS, ANSI or UNIX. If you see a YES under ANSI then it  is ANSI compatible.</p>

				<p>Q : I am  convinced that my code is correct but the judge is still not accepting it.<br/>
				A : You may mail any of the co-ordinators on the contact page your solution with your team name and username. If the judges find that you are constantly mailing us incorrect solutions you may  get penalty points.</p>
				

			</div>
		<?php if($loggedin)
			echo "</div>";
		?>
</div>

<?php include "footer.php"; ?> 
</body>
</html>

