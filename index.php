<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";

	$conn = mysqli_connect($servername, $dbusername, $dbpassword);
	$sql = "CREATE DATABASE my_keys";

	if (mysqli_query($conn, $sql))
	    echo "Database created successfully";
	else 
	    echo "Error creating database: " . mysqli_error($conn);

	if (!$conn) 
	    die("Connection failed: " . mysqli_connect_error());

	$sql_table="CREATE TABLE users (
				user VARCHAR(100) PRIMARY KEY,
				email VARCHAR(100) NOT NULL,
				pass VARCHAR(30) NOT NULL)";
	$conn = mysqli_connect($servername, $dbusername, $dbpassword,"my_keys");

	mysqli_query($conn, $sql_table);
	
	header("location:Login.php");		
?>
