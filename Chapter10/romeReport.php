<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		11/2/16
	File:	  romeReport.php
	Purpose:
	
-->

<html>
<head>
	<title>Rome Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<?php
		$numParties = 0;
		$numTravelers = 0;

		$travelFile = fopen("travel.dat", "r");
		$nextReservation = fgets($travelFile);
		
		while(!feof($travelFile))
			{
			list($city, $numPeople, $numNights) = explode(":", $nextReservation);
			if($city == "Rome")
				{
				$numParties = $numParties + 1;
				$numTravelers = $numTravelers + $numPeople;
				}
			$nextReservation = fgets($travelFile);
			}
			
		fclose($travelFile);

		print ("<h1>ROME TRAVEL REPORT</h1>");
		print ("<p>NUMBER OF PARTIES: $numParties</p>");
		print ("<p>NUMBER OF PEOPLE: $numTravelers</p>");
	?>
</body>
</html>
