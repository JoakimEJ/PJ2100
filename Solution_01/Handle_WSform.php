<?php
		ini_set('display_errors', 1);
		error_reporting(~0);
		// define variables and set to empty values
		$nameErr = $emailErr = $teamErr = $titleErr = $descErr = "";
		$name = $email = $team = $title = $desc = "";
		
		$nameCond = $mailCond = $teamCond = $titleCond = $descCond = false;
		$insertCondition = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			/*
			** NAME BIT
			*/
			$name = test_input($_POST["name"]); //TEST
			if (empty($_POST["name"])) {
				$nameErr = "Name is required";
				$nameCond = false;
			} 
			else { 
				$name = test_input($_POST["name"]);
				$nameCond = true;
				//echo "nameCond = true" . "<br>"; // Logging
			}
			// Check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z æøå]*$/", $name)) {
				$nameErr = "Only letters and white space allowed";
				$nameCond = false;
				//echo "nameCond = false due to preg_match" . "<br>"; // Logging
			}
			
			
			/*
			** EMAIL BIT
			*/
			$email = test_input($_POST["email"]); //TEST
			if (empty($_POST["email"])) {
				$emailErr = "Email is required";
				$mailCond = false;
			} else { 
				$email = test_input($_POST["email"]); 
				$mailCond = true;
				//echo "mailCond = true" . "<br>"; // Logging
			}
			// Check if email address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				$mailCond = false;
				//echo "mailCond = false due to validate format" . "<br>"; // Logging
			}
			
			/*
			** TEAM BIT
			*/
			$team = test_input($_POST["team"]); //TEST
			if (empty($_POST["team"])) {
				$team = "";
				$teamCond = true;
				//echo "teamCond = true" . "<br>"; // Logging
			} else { 
				$team = test_input($_POST["team"]); 
				$teamCond = true;
				//echo "teamCond = true" . "<br>"; // Logging
			}
			// Check for illegal signs
			if (!preg_match("/^[a-zA-Z ,]*$/", $team)) {
				$teamErr = "Only letters, whitespace and comma allowed";
				$teamCond = false;
				//echo "teamCond = false due to preg_match" . "<br>"; // Logging
			}
			
			/*
			** TITLE BIT
			*/
			$title = test_input($_POST["title"]); //TEST
			if (empty($_POST["title"])) {
				$titleErr = "You need a title for this event";
				$titleCond = false;
			} else { 
				$title = test_input($_POST["title"]); 
				$titleCond = true;
				//echo "titleCond = true" . "<br>"; // Logging
			}
			
			
			/*
			** DESCRIPTION BIT
			*/
			$desc = test_input($_POST["desc"]); //TEST
			if (empty($_POST["desc"])) {
				$descErr = "You need a description for this event";
				$descCond = false;
			} else { 
				$desc = test_input($_POST["desc"]); 
				$descCond = true;
				//echo "descCond = true" . "<br>"; // Logging
			}
			
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>