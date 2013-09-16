<?php

$key=$_GET['key'];

include "dbconnect.php";

$query="SELECT * from team WHERE tname like '".$key."'";
$result = mysql_query($query) or die(mysql_error());

if($row=mysql_fetch_array($result))
{
        echo "\n<table>";
        echo "\n<tr>".
		"\n<th width=\"\" align=\"left\">tname</th>".
		"\n<th width=\"\" align=\"left\">tpass</th>".
		"\n<th width=\"\" align=\"left\">User1</th>".
		"\n<th width=\"\" align=\"left\">User2</th>".
        "\n</tr>";
        do
        {
                echo "<tr>\n";
	        echo "<td align=\"left\" width=\"\">".$row["tname"]."</td>\n";
         	echo "<td align=\"left\" width=\"\">".$row["tpass"]."</td>\n";
	        echo "<td align=\"left\" width=\"\">".$row["user1"]."</td>\n";
	        echo "<td align=\"left\" width=\"\">".$row["user2"]."</td>\n";
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
