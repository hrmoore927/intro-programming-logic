<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		9/14/16
	File:		Modify2.php
	Purpose:	Chapter 5 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(Modify2.html) and a PHP progam (Modify2.php).

	Modify2.html should include a form that prompts the user for their age,
	and also for the age that they plan to retire., then submits these
	to Modify2.php for processing. Modify2.html already contains most
	of this code but needs code to prompt for the age the user plans to retire.

	Modify2.php should: receive the age and ageToRetire from the $_POST array;;
	calculate the number of years until they retire
	based on the user's age and the age that the user plans to retire;
	display their age and years to retire.

	Modify2.php already contains the code to calculate and display the
	numbers of years to retirement but the calculation assumes the user
	will retire at 65. Modify this so the calculation is based on the
	age the user plans to retire instead.

-->

<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Modify2</h1>

	<?php
		$age = $_POST['age'];
		$ageToRetire = $_POST['ageToRetire'];
		$yearsToRetire = $ageToRetire - $age;

		print("<p>Your age is $age. You have $yearsToRetire years until retirement.</p>");
	?>

</body>
</html>
