<?php 
	session_start();  
	if(!isset($_SESSION['login_user']))
	{
		echo "ERROR 404!!! Login again!";
		die();
	}

	$myApiKey="AIzaSyDz6bGFofvHiGIxYBWOwdojoTR0N7BWoWg";
	$myPlaylistID="PL249D0A81BB50D936";
	$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $myPlaylistID . '&key=' . $myApiKey;			      
	$playlist = json_decode(file_get_contents($api_url));
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


<div class="shadow-lg p-3 bg-transparent rounded mt-2">
<h1 class="m-5 text-white">Tutorial Videos</h1>
<div class="container shadow-lg p-3 bg-white rounded mt-2">
	<?php 
		foreach ($playlist->items as $item):
			$id=$item->snippet->resourceId->videoId;
			$title=$item->snippet->title;
			$thumbnail=$item->snippet->thumbnails->default->url;
			
			echo "<p style='display:inline-block;margin:20px;text-align:center;vertical-align:top;'>";
			echo "<iframe width='420' height='240' src='https://www.youtube.com/embed/".$id."' allowfullscreen ></iframe>";
			echo "<br><strong>$title</strong>";
		endforeach;
	?>
</div>
</div>

</body>
</html>
