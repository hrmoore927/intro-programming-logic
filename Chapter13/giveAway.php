<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		11/16/16
	File:	  giveAway.php
	Purpose:

-->

<html>
<head>
	<title>GIVE AWAY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<?php

	  // add the freeTrip function here
		function freeTrip()
		{
			$trip = rand(1,5);
			if ($trip == 1)
				return "Aruba";
			elseif ($trip == 2)
				return "Cairo";
			elseif ($trip == 3)
				return "London";
			elseif ($trip == 4)
				return "Rome";
			elseif ($trip == 5)
				return "Tokyo";
		}
		
		print ("<h1>CONGRATULATIONS!</h1>");

		$destination = freeTrip(); // call the freeTrip function here

		print ("<h1>You have won a free trip to $destination!!!</h1>");


	?>
</body>
</html>
