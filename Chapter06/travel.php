<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	9/28/16
	File:	travel.php
	Purpose:Chapter 6 Exercise
-->

<html>
<head>
	<title>Travel</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Travel to Rome</h1>

	<?php
		$numTravelers = $_POST['numTravelers'];
		$numNights = $_POST['numNights'];
		
		$travel = fopen("reservations.txt", "a");
		fputs($travel, "Rome:$numTravelers:$numNights\n");
		fclose($travel);
		

		print("<p>Your reservation has been received.");

	?>

</body>
</html>
