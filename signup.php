<!DOCTYPE html>
<html>
<head>
	<title>My Keys-Signup</title>
	<style type="text/css">
		.quot
		{
			text-align: center;
			font-family: "Remachine Script Personal Use";
			font-size: 50px;
			margin-top: 80px;
			padding-bottom: 20px;
			color: white;
		}
		.sl
		{
			text-align: center;
			padding: 5px;

		}
		body
		{
			background-image: url(piano_bg.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
	
	</style>

    <link rel="shortcut icon" href="favicon.png" type="image/x-png">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-dark bg-dark" style="opacity: ">
	  <a class="navbar-brand" href="signup.php" style="font-family: Hero">
	    <img src="!1_nobg_whit.png" width="30px" height="35px" class="d-inline-block align-top" alt="">
	     My Keys
	  </a>

	</nav>

	<div class="quot">
			KEYS are a great way to find out the way.
	</div>

	<div class="sl container shadow-lg p-3 mb-5 bg-white rounded" style="width:30%">
		<form action="" method="post">			    
		    <div>
		    	<div style="font-size: 30px; padding-bottom: 10px">	
		    		Sign up
		    	</div>
		    	<div>
			    	<?php
						if(isset($_POST['submit']))
						{	
							$servername="localhost";
							$dbusername="root";
							$dbpassword="";
							$database="my_keys";
							if(isset($_POST['submit']))
							{
								$usr=$_POST['username'];
								$eml=$_POST['email'];
								$pss=$_POST['password'];

								$conn=mysqli_connect($servername,$dbusername,$dbpassword,$database);	

								$sql="INSERT INTO users(user,email,pass) VALUES('$usr','$eml','$pss')";
								
								if(mysqli_query($conn, $sql))
								{
									header('location:login.php');
								}
								else
								{	
									echo mysqli_error($conn);
								}
							}	
						}
					?> 
				</div>
				<div class="form-group" style="padding-top: 15px">
			        <input type="text" name="username" placeholder="Username" class="form-control"required>
			    </div>

			    
			    <div class="form-group"> 
			        <input type="text" name="email" placeholder="Email" class="form-control"required>
			    </div>
			    <div class="form-group"> 
			        <input type="password" name="password" placeholder="Password" class="form-control"required>
			    </div>


					<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Sign up">
					<br>
					<a href="Login.php" style="font-size: 13px;padding-top: 15px">Already a User? Login!</a>
		    </div>     
  		</form> 
	</div>

</body>
</html>
