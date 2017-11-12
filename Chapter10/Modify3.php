<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		11/2/16
	File:	  Modify3.php
	Purpose:  Add the necessary code in Modify3.php so that the
			  program calculates and displays the first and last names
			  of employees who worked AT LEAST 40 AND EARNED LESS THAN
			  15.00 AN HOUR.
			  HINT: the correct answer is:
			  	Mike Smith
				John Anderson
-->

<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<?php
		print ("<h1>EMPLOYEES WHO DESERVE A RAISE: </h1>");

		$timesheetFile = fopen("timesheets.txt", "r");
		$nextTimesheet = fgets ($timesheetFile);

		while (!feof($timesheetFile) )
		{
			list ($firstName, $lastName, $hoursWorked, $hourlyRate) =
				explode (":", $nextTimesheet);
			if($hoursWorked >= 40 and $hourlyRate < 15)
				{
				print ("$firstName $lastName<br />");
				}

			$nextTimesheet = fgets ($timesheetFile);
		}
		fclose ($timesheetFile);
	?>
</body>
</html>
