<?php
	$server = "localhost";
	$username = "root";
	$pw = "AliasAsics123";
	$db = "workshops";

	// Create connection
	$conn = mysqli_connect($server, $username, $pw, $db);

	// Check connection
	if (mysqli_connect_error()){
		die("Connection failed: " . mysqli_connect_error());
	}
	else {
		echo "Connected successfully <br>";
	}

?>