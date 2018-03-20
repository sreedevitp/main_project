<?php
session_start();
?>

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>stylish Sign in and Sign up Form A Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="stylish Sign in and Sign up Form A Flat Responsive widget, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--online_fonts-->
	<link href="//fonts.googleapis.com/css?family=Sansita:400,400i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!--//online_fonts-->
	<link href="css/style_reg.css" rel='stylesheet' type='text/css' media="all" /><!--stylesheet-->
</head>
<body>
<h1>Registration Form</h1>
<div class="form-w3ls">
	<div class="form-head-w3l">
		
	</div>
    <ul class="tab-group cl-effect-4">
               
    </ul>
	<?php
	            include("connection.php");
                 $uid=$_SESSION['uid'];
                 $sql = "select fname, lname, email, mobile, password, confirm_password from registration where uid=$uid;";
                 $r= mysqli_query($con, $sql);
				 $result=mysqli_fetch_assoc($r);
				 ?>
				
				 
	
    <div class="tab-content">
        <div id="signin-agile">   
			<form action="" method="post">
				
				<p class="header">First Name</p>
				<input type="text" name="fname" value="<?php echo $result['fname']?>"  placeholder="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" required="required">
				
				<p class="header">Last Name</p>
				<input type="text" name="lname" value="<?php echo $result['lname']?>" placeholder="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" required="required">
				
				<p class="header">Email</p>
				<input type="text" name="email" value="<?php echo $result['email']?>" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
				
				
				<p class="header">Mobile No.</p>
				<input type="text" name="mobile" value="<?php echo $result['mobile']?>" placeholder="Mobile No." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile No.';}" required="required">
				
				<p class="header">Password</p>
				<input type="text" name="password" value="<?php echo $result['password']?>" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"  required="required">
				
				<p class="header">Confirm Password</p>
				<input type="text" name="confirm_password" value="<?php echo $result['confirm_password']?>"placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}"  required="required">
				
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me?</label>
				
				<input type="submit" class="sign-in" name="submit" value="submit">
			</form>
			
			
			 
				 <?php
if(isset($_POST["submit"]))
{
	 include("connection.php");
	$uid=$_SESSION['uid'];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$mobile=$_POST["mobile"];
	$password=$_POST["password"];
	$confirm_password=$_POST["confirm_password"];
	
	
	$sql="update registration set `fname`='$fname', `lname`='$lname', `email`='$email', `mobile`='$mobile', `password`='$password',`confirm_password`='$confirm_password'where uid=$uid;";
	mysqli_query($con,$sql);
	echo $sql;
/* 	 header('location:user_profile.php');  */
}
					
?>
		</div>
		<div id="signup-agile">   
			<form action="#" method="post">
				
				
			
				<input type="submit" class="register" value="Sign up">
			</form>
		</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  
<p class="copyright">&copy; 2018 stylish sign in and sign up Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
<!-- js files -->
<script src='js/jquery.min.js'></script>
<script src="js/index.js"></script>
<!-- /js files -->
</body>
</html>
