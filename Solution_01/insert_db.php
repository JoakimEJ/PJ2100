<html>
<body>
	
	<?php
		ini_set('display_errors', 1);
		error_reporting(~0);
		require 'connection.php';
		require 'FormHandling.php';

		if ($nameCond && $mailCond && $teamCond && $titleCond && $descCond) {
			$insertCondition = true;
		} else {$insertCondition = false;}


		if($insertCondition) {
			$query = "INSERT INTO workshops_events (Ansvarlig, Epost, Medvirkende,
				Overskrift, Beskrivelse)
				VALUES ('$name', '$email', '$team', '$title', '$desc')";
			
			if (mysqli_query($conn, $query)) {
				echo "New record created successfully!";
			} else {
				echo "Error: " . "<br>" . mysqli_connect_error();
			}
			
		} else {
			echo "Error: could not insert into database. Follow instructions on form";
			
			return;
		}

		mysqli_close($conn);
		
	?>
	
</body>
</html>