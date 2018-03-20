<?php
				session_start();
			
				$con=mysqli_connect("localhost","sreedevi","mca","project");
				$fname=$_POST["fname"];
				$lname=$_POST["lname"];
				$email=$_POST["email"];
				$mobile=$_POST["mobile"];
				$pass=$_POST["password"];
				$cpass=$_POST["confirm_password"];
				if($pass!=$cpass)
				{
					echo "<script>var confirm = confirm(\"passwords not matching!\");
					if(confirm){ 
					document.getElementsByName('pass').value='';
					document.getElementsByName('cpass').value='';
					window.history.back();
					
					}
					else{
					document.getElementsByName('pass').value='';
					document.getElementsByName('cpass').value='';
					window.history.back();
					
					}
					</script>";
					
					
				}
				$cmail="SELECT email FROM registration WHERE email = '$email';";
				$res=mysqli_query($con,$cmail);
				if(mysqli_num_rows($res)>0)
				{
					echo "<script>var confirm = confirm(\"email already exists!\");
					if(confirm){ 
					window.history.back();
					}
						else{
					window.history.back();
					}
					</script>";
					
				}
				else{
				$sql="insert into registration(fname,lname,email,mobile,password,confirm_password)values('$fname','$lname','$email','$mobile','$pass','$cpass');";
				mysqli_query($con,$sql);
				
				$_SESSION['email'] = $_POST['email']; 
				 header('location:login.html');  
				}
				
		
	?>