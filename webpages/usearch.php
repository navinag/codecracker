<?php

$key=$_GET['key'];

include "dbconnect.php";

$query="SELECT * from user WHERE username like '".$key."'";
$result = mysql_query($query) or die(mysql_error());

if($row=mysql_fetch_array($result))
{
        echo "\n<table>";
        echo "\n<tr>".
		"\n<th width=\"\" align=\"center\">fname</th>".
		"\n<th width=\"\" align=\"center\">lname</th>".
		"\n<th width=\"\" align=\"center\">Username</th>".
		"\n<th width=\"\" align=\"center\">password</th>".
		"\n<th width=\"\" align=\"center\">team</th>".
        "\n</tr>";
        do
        {
                echo "<tr>\n";
	        echo "<td align=\"center\" width=\"\">".$row["fname"]."</td>\n";
         	echo "<td align=\"center\" width=\"\">".$row["lname"]."</td>\n";
	        echo "<td align=\"center\" width=\"\">".$row["username"]."</td>\n";
	        echo "<td align=\"center\" width=\"\">".$row["password"]."</td>\n";
	        echo "<td align=\"center\" width=\"\">".$row["tname"]."</td>\n";
                echo "</tr>\n";
        }while($row=mysql_fetch_array($result));

        echo "\n</table>";
}
else
{
        echo "No matching records found!!";
}
mysql_free_result($result);

?>
