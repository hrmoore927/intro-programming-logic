<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	10/5/16
	File:	travel.php
	Purpose:Chapter 7 Exercise

-->


<html>
<head>
	<title>Travel</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Travel</h1>

	<?php
		$destination = $_POST['destination'];
		$numTravelers = $_POST['numTravelers'];
		$numNights = $_POST['numNights'];

		if ($destination == "Rome")
		{
			$tickets = 875;
			$hotel = 110;
		}
		else
		{
			$tickets = 1575;
			$hotel = 240;
		}
		
		$tickets = $tickets * $numTravelers;
		$hotel = $hotel * $numNights * $numTravelers;

		$totalCost = $tickets + $hotel;

		print("<p>Destination: $destination<br />");
		print("Number of people: $numTravelers<br />");
		print("Number of nights: $numNights<br />");
		print("Airline Tickets: $".number_format($tickets, 2)."<br />");
		print("Hotel Charges: $".number_format($hotel, 2)."</p>");
		print("<p><strong>TOTAL COST: $".number_format($totalCost, 2)."</strong></p>");

	?>

</body>
</html>
