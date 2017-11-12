<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	11/16/16
	File:	airFare.php
	Purpose:Chapter 13 Exercise


-->


<html>
<head>
	<title>AIR FARE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>AIR FARE CALCULATOR</h1>
	
	<?php

		$destination = $_POST['destination'];
		include("incTravel.php");
		
		$airline = getAirline($destination);
		$airFare = getAirFare($destination);

		print("<p>Destination: $destination<br />");
		print("The air fare is $".number_format($airFare, 2)." on $airline.</p>");


	?>

</body>
</html>
