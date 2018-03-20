
<style>
body{
	background-image:url("images/view_bg.jpg");
	background-size:1500px,1500px;
}
</style>
<?php

include("connection.php");
$s=mysqli_query($con,"select * from registration");
echo "<table border ='2' cellspacing=3 width=80% height=80% align='center' style=margin:90px; >
<tr><colspan=12><font size=12 color=black>Packages</font></tr>
<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Mobile</th><th>Password</th><th>Confirm Password</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $pid=$row[0];
	 /*INSERT INTO `addemp`(`empid`, `name`, `sex`, `designation`, `mob`, `dob`, `doj`, `type`, `department`, `email`,
	 `basicpay`, `hname`, `hn`, `stname`, `dist`, `strname`, `pdist`, `stat`, `statn`, `pinc`, `pinco`) VALUES ([value-1],[value-2],[value-3],
	 [value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],
	 [value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21])*/
  echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]
  ."</td><td>".$row["password"]."</td><td>".$row["confirm_password"]."</td>
 
  <td>
 <form method='post' action='admin_delete_user.php'>
 <input type='hidden' name='h1' value='$pid'><input type='submit' name='delete' value='Delete'>
 </form>
 </td>
 </tr>";	 
   }
 echo"</table>"
  ?>
