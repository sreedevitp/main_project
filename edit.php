<?php
	session_start();
	if(isset($_POST["submit"]))
{
	include("connection.php");
	$pid=$_SESSION['pid'];
	$pname=$_POST["pname"];
	$ptype=$_POST["ptype"];
	$stayplan=$_POST["stayplan"];
	$price=$_POST["price"];
	$pdetails=$_POST["pdetails"];
	$inclusions=$_POST["inclusions"];
	$exclusions=$_POST["exclusions"];
	$about=$_POST["about"];
	
	$sql="update package set `pname`='$pname', `ptype`='$ptype', `stayplan`='$stayplan', `price`='$stayplan', `pdetails`='$pdetails',`inclusions`='$inclusions',`exclusions`='$exclusions', `about_place`='$about' where pid=$pid;";
	mysqli_query($con,$sql);
	echo $sql;
/* 	 header('location:staff.html');  */
}				
?>