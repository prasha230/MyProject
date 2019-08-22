<?php 
	session_start();  
	if(!isset($_SESSION['login_user']))
	{
		echo "ERROR 404!!! Login again!";
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Keys</title>
	<style type="text/css">
		.container
		{
			background-color: white;
			font-family: 'Barlow', sans-serif;
		}
		.quot
		{
			text-align: center;
			font-family: "Remachine Script Personal Use";
			font-size: 50px;
			margin-top: 80px;
			padding-bottom: 20px;
			color: white;
		}
		.vids
		{
			display: grid;
			grid-template-columns: 1fr 1fr;
		}
		body
		{
			background-image: url(piano_bg.jpg);
			background-size: cover;
			background-attachment: fixed;
		}
	
	</style>

    <link rel="shortcut icon" href="favicon.png" type="image/x-png">

    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark">
	  	<a class="navbar-brand" href="action_page.php" style="font-family: Hero">
	    	<img src="!1_nobg_whit.png" width="30px" height="30px" class="d-inline-block align-top" alt="">
	     	My Keys
	  	</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>
		<div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      	<li class="nav-item">
		        	<a class="nav-link" href="action_page.php">Home</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="theory.php">Learn Theory</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="videos.php">Tutorial Videos</a>
		      	</li>
		    </ul>
		    <span class="navbar-text text-white" style="padding-right: 20px;font-weight: bold;">
		     	Welcome <?php echo $_SESSION["login_user"]; ?>
		   	</span>
		   	<form action="logout.php" method="post">
		   		<input type="submit" class="btn btn-secondary btn-sm" name="logout" value="Logout">
		   	</form>
		</div>
	</nav>

	<div class="quot">
			KEYS are a great way to find out the way.
	</div>

	<div class="container shadow-lg p-3 mb-5 bg-white rounded mt-2">
		<div class="shadow-lg p-3 bg-transparent rounded m-5 ">
			<h1 class="m-3"><strong>Piano</strong></h1>
				<p>The beautiful sound of piano music has captured the hearts of people since the early eighteenth century. Since then, many musicians have dedicated their lives to this instrument. Some players even play piano so well that it may seem that this instrument is easy to play. However, to be able to play the piano well isn't easy; it takes a lot of skill. To become a good piano player, one must love music very much, have good finger techniques, and body flexibility.</p>
				
				<p>To become a good piano player, one must love music. The love of music can help you truly understand the music you play, so that you can play it well. For example, when you play a piece of music on the piano, not only must you get the notes and the rhythm right, you must also be creative enough to create your own rythms. </p>
				
				<p>In order to become a good pianist, one must have good finger techniques. With good finger techniques, one will be able to play fast music. Because some music should be played quickly, this can help you play through the music without getting stuck. Good finger techniques can also help you play piano music very clearly so that the sound is clean and beautiful. In addition, with good finger techniques, you can play piano for a long time without your finger getting sore. For a thirty minute piece of piano music, one needs to have good finger techniques in order to play this piece well. Having good finger 
				techniques is an important skill to have as a pianist.</p>
		</div>
		<div class="shadow-lg p-3 bg-transparent rounded m-5">
			
			<h2 class="m-3 pb-3">Some Piano Based Songs</h2>
			
			<div class="vids" style="display:inline-block;margin:20px;text-align:center;vertical-align:top;">
				<iframe width="420" height="240" src="https://www.youtube.com/embed/gxEPV4kolz0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe width="420" height="240" src="https://www.youtube.com/embed/450p7goxZqg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe width="420" height="240" src="https://www.youtube.com/embed/RB-RcX5DS5A?list=PL3oW2tjiIxvSM6qpxtucPq9fmBLru3BPe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe width="420" height="240" src="https://www.youtube.com/embed/qN4ooNx77u0?list=PL3oW2tjiIxvSM6qpxtucPq9fmBLru3BPe" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<iframe width="420" height="240" src="https://www.youtube.com/embed/RgKAFK5djSk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</body>
</html>
