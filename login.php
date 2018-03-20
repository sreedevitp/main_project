<?php
session_start();
$con=mysqli_connect("localhost","sreedevi","mca","project");
$email=$_POST["mail"];
$pass=$_POST["Password"];
$sq="select uid,email,password,usertype from registration where email='$email' and password='$pass';";
$res=mysqli_query($con,$sq);

if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$uid=$row["uid"];
	$_SESSION['uid']=$uid;
	$type=$row["usertype"];
	if($row["usertype"]==1){
		$_SESSION['email'] = $_POST['mail'];
		header('location:admin_home1.html');
	}
	else{
		$_SESSION['username'] = $_POST['txtusername'];
		header('location:user_home1.html');
		}
	}
else{	
		 echo "<script>var confirm = confirm(\"Invalid user!\");
          if(confirm){ 
              window.history.back();
			  document.getElementsByName('Password').value='';
           }
		   else{
			   window.history.back();
			   document.getElementsByName('Password').value='';
		   }
          </script>";
}
?>