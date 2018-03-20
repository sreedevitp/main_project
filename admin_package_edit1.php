<?php
session_start();
?>
<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>modern Appointment Form Flat Responsive widget Template :: w3layouts</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="modern appointment form a Flat Responsive Widget,Login form widgets, Sign up Web 	forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/jquery-ui_create_package.css"/>
<link href="css/style_create_package.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-css-->
<link href="//fonts.googleapis.com/css?family=Poppins" rel="stylesheet"><!--online-fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet"><!--online-fonts-->
<!-- //css files -->
</head>
<body>
<?php
	            include("connection.php");
                 $id=$_GET['p_id'];
                 $sql = "select *  from package where pid=$id;";
                 $r= mysqli_query($con, $sql);
				 $result=mysqli_fetch_assoc($r);
				 ?>
	<h1><span class="title"></span>Create Package<span class="title"></span><span class="title"></span></h1>
<div class="w3l-main">
	<div class="w3l-from">
		<form action="" method="post" enctype="multipart/form-data">	
			<div class="w3l-user">
				<label class="head">Package Name<span class="w3l-star"> * </span></label>
				<input type="text" name="pname" value="<?php echo $result['pname']?>" placeholder="" required="">
			</div>
			<div class="w3l-mail">
				<label class="head">Package Type<span class="w3l-star"> * </span></label>
				<div class="w3l-details3">
				<div class="w3l-options1">
					<select class="category1" name=ptype disabled required="">
						<option><?php echo $result['ptype']?></option>
						
					</select>
				</div>
			</div>
			</div>
			<div class="clear"></div>
			<div class="w3l-details1">
				<div class="w3l-num">
					<label class="head">Stay Plan<span class="w3l-star"> * </span></label>
					<input type="text"  name="stayplan" value="<?php echo $result['stayplan']?>" placeholder="" required="">
				</div>
				<div class="w3l-date">
					<label class="head">Price<span class="w3l-star"> * </span></label>
						<div class="styled-input">
							<input class="date" id="" name="price" value="<?php echo $result['price']?>" type="text" >
						</div>
					</div>	
			<div class="clear"></div>
		
			</div><div class="clear"></div>
			
			<div class="w3l-rem">
				<div class="w3l-right">
					<label class="w3l-set2">Package Details.</label>
					<textarea  name=pdetails rows="5" cols="30"><?php echo $result['pdetails']?></textarea>
					
				</div>	
				<div class="w3l-right">
					<label class="w3l-set2">Inclusions</label>
					<textarea  name=inclusions rows="5" cols="30"><?php echo $result['inclusions']?></textarea>
				</div>	
				<div class="w3l-right">
					<label class="w3l-set2">Exclusions</label>
					<textarea  name=exclusions rows="5" cols="30"><?php echo $result['exclusions']?></textarea>
				</div>	
				<div class="w3l-right">
					<label class="w3l-set2">About the Place</label>
					<textarea name=about rows="5" cols="30"><?php echo $result['about_place']?></textarea>
				</div>	
				<div class="w3l-user">
				<label class="head">Image<span class="w3l-star"> * </span></label>
				<input type="file" disabled value="<?php echo $result['image']?>" name="file" size="50">
				</div>
				<div class="btn">
					<input type="submit" name="submit" value="SUBMIT"/>
				</div>
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>
	<footer>&copy; 2017 modern appointment Form. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a>
	</footer>
	<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min_create_package.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui_create_package.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->

</body>
</html>
<?php
			include("connection.php");
			if(isset($_POST["submit"]))
			{
				
				$pname=$_POST["pname"];
				$ptype=$_POST["ptype"];
				$stayplan=$_POST["stayplan"];
				$price=$_POST["price"];
				$pdetails=$_POST["pdetails"];
				$inclusions=$_POST["inclusions"];
				$exclusions=$_POST["exclusions"];
				$about=$_POST["about"];
		
			$file="";
			$file=$_FILES['file']['name'];
			if( $_FILES['file']['name'] != "" )
{
	$target_path = "pics/";
	$target_path = $target_path.basename( $_FILES['file']['name']); 
	if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) 
	{
		echo "The file ".basename( $_FILES['file']['name'])." has been uploaded";
	} 
	else
	{
		echo "There was an error uploading the file, please try again!";
	}

	  // copy( $_FILES['file']['name'], "/SendEmail" ) or 
		//       die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
				$sql="insert into package(pname,ptype,stayplan,price,pdetails,inclusions,exclusions,about_place,image)values('$pname','$ptype','$stayplan','$price','$pdetails','$inclusions','$exclusions','$about','$file');";
				mysqli_query($con,$sql);
				echo "<script>var confirm=confirm(\"Your image has been uploaded successfully!\);
				if(confirm){
					window.location='create_package.php';
				}
				else{
					window.location='create_package.php';
				}
				</script>";
				}
	?>