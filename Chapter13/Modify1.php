<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	11/14/16
	File:	Modify1.php
	Purpose:Chapter 13 Exercise

	Modify1.html asks the user to submit their hours worked and pay rate.
	The current version of Modify1.php updates the hourly wage to 8.00
	if it is less than 8.00, then calculates the weekly pay and a bonus,
	and displays the results. The program does this without using any
	functions.

	Change Modify1.php so that it uses the setMinimumWage(), getWage() and
	getBonus() functions that are provided in the incWageFunctions.php file
	instead of performing these calculations directly.Note that your program
	becomes much simpler.

-->
<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>Modify1</h1>

	<?php

		$hoursWorked = $_POST['hoursWorked'];
		$hourlyWage = $_POST['hourlyWage'];
		
		include("incWageFunctions.php");
		$hourlyWage = setMinimumWage($hourlyWage);
		$wage = getWage($hourlyWage, $hoursWorked);
		$bonus = getBonus($wage);


		print("<p>Your hourly wage is $$hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $$wage.</p>");
		print("<p>Your bonus is $$bonus.</p>");
	?>

</body>
</html>
