<?php
	$server = "localhost";
	$username = "root";
	$pw = "";
	$db = "test";

	// Create connection
	$conn = mysqli_connect($server, $username, $pw, $db);

	// Check connection
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	else {
		echo "Connected successfully <br/>";
	}

	$query = "SELECT * FROM Brukere";

	$result = mysqli_query($conn, $query);

	while($person = mysqli_fetch_array($result)){
		echo $person['Navn'] . "<br/>";
	}
	echo "Ferdig!";

?>