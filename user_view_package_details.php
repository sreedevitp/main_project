<?php
session_start();
$con=mysqli_connect("localhost","sreedevi","mca","project");
$x=$_GET['x'];
$_SESSION['pid'] =$x;
$sql="select * from package where pid=$x";
$res=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($res);

?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Watches an E-Commerce online Shopping Category Flat Bootstrap Responsive Website Template| Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap_user_view_package_details.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style_user_view_package_details.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min_user_view_package_details.js"></script>
<!-- start menu -->
<link href="css/megamenu_user_view_package_details.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu_user_view_package_details.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown_user_view_package_details.js"></script>
<script src="js/easyResponsiveTabs_user_view_package_details.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
            </script>	
<script src="js/simpleCart.min_user_view_package_details.js"> </script>
</head>
<body>

		<div class="header">
	<div class="header-top">
				<div class="container">
					 <div class="top-left">
						
					</div>
					<div class="top-right">
					<ul>
						<li><a href="checkout.html"></a></li>
						<li><a href="login.html"></a></li>
						<li><a href="registered.html"></a></li>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>
   <div class="men">
   	<div class="container">
      <div class="col-md-9 single_top">
      	<div class="single_left">
      	  <div class="labout span_1_of_a1">
			<div class="flexslider">
					 <ul class="slides">
						<li data-thumb="images/ss1.jpg">
							<img src="images/ss1.jpg" />
						</li>
					
						
					 </ul>
				  </div>
		          <div class="clearfix"></div>	
	    </div>
		
		<div class="cont1 span_2_of_a1 simpleCart_shelfItem">
				<h1><?php echo $result['pname'];?></h1>
				<h2 class="quick">Stayplan:</h2>
				<p class="availability">  <?php echo $result['stayplan'];?><span class="color"></span></p>
			    <div class="price_single">
				  <span class="reducedfrom"></span>
				  <span class="amount item_price actual">Rs. <?php echo $result['price'];?></span><a href="#"></a>
				</div>

				
			    <a href="#" class="btn btn-primary btn-normal btn-inline btn_form button item_add item_1" target="_self">Book Now</a>
			</div>
		    <div class="clearfix"> </div>
		</div>
        <div class="sap_tabs">	
	       <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Package Details</span></li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Inclusions</span></li>
				  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Exclusions</span></li>
			  </ul>				  	 
			  <div class="resp-tabs-container">
			    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
					   <p> <?php echo $result['pdetails'];?>      </p>
			        </div>
			     </div>	
			      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
					<div class="facts">
					  <ul class="tab_list">
						<li><?php echo $result['inclusions'];?></li>
				   </ul>           
			        </div>
			     </div>	
			      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
			        <div class="facts">
					  <ul class="tab_list">
					  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
					  	<li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
					  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores leg</a></li>
					  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
					  </ul>  
					</div>    
			     </div>	
			  </div>
		    </div>
		  </div>	
		</div>
		
     <div class="clearfix"> </div>
	</div>
   </div>
  <div class="footer">
   	 <div class="container">
   	 	<div class="newsletter">
			<h3>Newsletter</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
			<form>
			  <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
			  <input type="submit" value="SUBSCRIBE">
			</form>
		</div>
   		<div class="cssmenu">
		   <ul>
			<li class="active"><a href="#">Privacy</a></li>
			<li><a href="#">Terms</a></li>
			<li><a href="#">Shop</a></li>
			<li><a href="#">About</a></li>
			<li><a href="contact.html">Contact</a></li>
		  </ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"></div>
	    <div class="copy">
           <p> &copy; 2015 Watches. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	    </div>
   	</div>
   </div>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider_user_view_package_details.js"></script>
<link rel="stylesheet" href="css/flexslider_user_view_package_details.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</body>
</html>		