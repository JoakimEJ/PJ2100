<?php
	$server = "mysql6.000webhost.com";
	$username = "a4217972_Joakim";
	$pw = "Test123";
	$db = "a4217972_test";

	// Create connection
	$conn = mysqli_connect($server, $username, $pw, $db);

	// Check connection
	if (mysqli_connect_error()){
		die("Connection failed: " . mysqli_connect_error());
	}
	else {
		echo "";
	}

	/*
	
	TO RUN THIS LOCALY ON YOU OWN COMPUTER
	- Add a local database called 'workshops'
		- enter the following query:
		CREATE TABLE workshops_events
		(
		ID INT AUTO_INCREMENT,
		Ansvarlig CHAR (40) NOT NULL,
		Epost CHAR (40) NOT NULL,
		Medvirkende VARCHAR(200),
		Overskrift VARCHAR (200) NOT NULL,
		Beskrivelse TEXT NOT NULL,
		CONSTRAINT ID_pk PRIMARY KEY (ID)
		);
		
	- Change directory of your apache server to the directory of this solution
	- Enter the password of your local database root-user.
	- Open your browser and enter localhost:[Your local port without brackets]/Hovedside_kode/
	
	- There you go!
	
	*/

?>