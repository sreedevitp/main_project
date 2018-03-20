<?php
include("connection.php");
$d=$_POST["h1"];
mysqli_query($con,"delete from registration where uid=$d");
 echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>$d is deleted...!</font></marquee>";
			  echo "</div>";
	
?>