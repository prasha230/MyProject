<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Keys-Login</title>
	<style type="text/css">
		.sl
		{
			color: white;
			text-align: center;
			font-family: "Hero";
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
	
	<div class="sl" >
	    	
		    <a href="login.php"><img src="!1_nobg_whit.png" width="100px" height="115px" alt="" style="margin-top: 150px" href="login.php"></a>
			<div style="font-size: 60px">
				My Keys
			</div>
		
		<div class="sl" style="font-size: 20px;padding-top: 20px">
			Thanks <?php echo $_SESSION['login_user'] ?> for Hanging by, See you again later !
			<br>Keep Learning and Keep Practicing.
		</div>
		<?php session_destroy();?>
	</div>	
</body>
</html>
