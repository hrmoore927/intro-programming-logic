<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	9/14/16
	File:	travel.php
	Purpose:Chapter 5 Exercise

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
		$airline = $numTravelers * 875;
		$hotel = $numNights * $numTravelers * 110;
		$total = $airline + $hotel;
		
		print("<p>The number of travelers is $numTravelers.</p>");
		print("<p>The number of nights is $numNights.</p>");
		print("<p>The cost of the airline tickets is $".number_format($airline, 2).".</p>");
		print("<p>The cost of the hotel is $".number_format($hotel, 2).".</p>");
		print("<p>The total cost is $".number_format($total, 2).".</p>");

	?>

</body>
</html>
