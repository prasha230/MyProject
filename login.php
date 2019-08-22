<!DOCTYPE html>
<html>
<head>
	<title>My Keys-Login</title>
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

	<nav class="navbar navbar-dark">
	  <a class="navbar-brand" href="login.php" style="font-family: Hero">
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
		    		Login
		    	</div>
		    	<div style="font-size: 12px">
		    	<?php
					session_start();
					if(isset($_POST['submit']))
					{	
						$servername="localhost";
						$dbusername="root";
						$dbpassword="";
						$database="my_keys";
						if(isset($_POST['submit']))
						{
							$usr=$_POST['username'];
							$pss=$_POST['password'];

							$conn=mysqli_connect($servername,$dbusername,$dbpassword,$database);

							$sql="SELECT * FROM users WHERE user='$usr' AND pass='$pss'";

							$result=mysqli_query($conn,$sql);
							$_SESSION['login_user']=$usr;
							if(mysqli_num_rows($result)>0)
							{
								header('location:action_page.php');
							}
							else
							{	
								echo "Wrong Username or Password...Try Again";
							}
						}	
					}
				?>
				</div>
				<div class="form-group" style="padding-top: 15px">
			        <input type="text" name="username" placeholder="Username" class="form-control"required>
			    </div>

			    <div class="form-group"> 
			        <input type="password" name="password" placeholder="Password" class="form-control"required>
			    </div>

					<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Login">
					<br>
					<a href="Signup.php" style="font-size: 13px;padding-top: 15px">New User? Sign up!</a>
		    </div>     
  		</form> 
	</div>

</body>
</html>
