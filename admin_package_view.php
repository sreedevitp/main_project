<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Packages</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style_package_view_admin.css">
<style>

	#tbl1{
	  height:50px;
  }
</style>
  
</head>

<body>
<?php

include("connection.php");
$s="select * from package;";
$res=mysqli_query($con,$s);
 echo' <section>
  <!--for demo wrap-->
  <h1>Packages</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0" id="tbl1">
      <thead>
        <tr><tr></tr>
		  <th>Package Id</th>
          <th>Package Name</th>
          <th>Package Type</th>
          <th>Stayplan</th>
		  <th>Price</th>
          <th>Package Details</th>
		  <th>Inclusions</th>
		  <th>Exclusions</th>
		  <th>About the Place</th>
		  <th>Images</th>
		  <th>Delete</th>
		  <th>Edit</th>
        </tr>
      </thead>
    </table>
  </div>';
    while($row=$res->fetch_assoc())
  {
	  $pid=$row['pid'];
	 // echo $pid;
  echo 
        
		"<table cellpadding='0' cellspacing='0' border='0'>
		<tr>
		  <td>".$row["pid"]."</td>
          <td>".$row["pname"]."</td>
          <td>".$row["ptype"]." </td>
          <td>".$row["stayplan"]."</td>
          <td>".$row["price"]."</td>
          <td>".$row["pdetails"]."</td>
		  <td>".$row["inclusions"]."</td>
          <td>".$row["exclusions"]."</td>
          <td>".$row["about_place"]."</td>
		  <td><img height=100px width=100px src='pics/".$row['image']."'</td>
		   <td>
		  <a href='admin_package_edit.php?p_id=".$row["pid"]."'>Edit</a>              </td>
		  <td>
		  
		  <a href='delete.php?p_id=".$row["pid"]."'>Delete</a>              </td>
		 
        </tr>";
      
     
   
  }
  
  
  echo "</table>"
  ?>
</section>


<!-- follow me template -->
<div class="made-with-love">
  
  <i></i>
  
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min_package_view_admin.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
