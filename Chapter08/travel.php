<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	10/12/16
	File:	travel.php
	Purpose:Chapter 8 Exercise
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
		
		if ($destination == "Barcelona")
		{
			$airFare = 875;
			$perNight = 85;
		}
		elseif ($destination == "Cairo")
		{
			$airFare = 950;
			$perNight = 98;
		}
		elseif ($destination == "Rome")
		{
			$airFare = 875;
			$perNight = 110;
		}
		elseif ($destination == "Santiago")
		{
			$airFare = 820;
			$perNight = 85;	
		}
		elseif ($destination == "Tokyo")
		{
			$airFare = 1575;
			$perNight = 240;
			
			if ($numNights >= 5)
			$airFare = $airFare - 200;
		}
		
		$tickets = $numTravelers * $airFare;
		$hotel = $numTravelers * $numNights * $perNight;
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
