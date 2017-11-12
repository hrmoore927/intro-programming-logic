<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	10/12/16
	File:	Modify1.php
	Purpose:Chapter 8 Exercise

		Modify1.html does not need to be changed. Change Modify1.php
		so that it will generate an error message if the age is
		less than 0 or greater than 65, otherwise the program should
		calculate and display the years to retirement as listed below.
		Use this error message:
		"<p>ERROR: You entered $age - that is out of range</p>"
-->
<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>Modify1</h1>

	<?php
		$age = $_POST['age'];

		if ($age < 0 OR $age > 65)
		{
			print("<p>ERROR: Age must be between 0 and 65 years old.</p>");
		}
		else
		{
			$yearsToRetire = 65 - $age;
			print("<p>Your age is $age. You have $yearsToRetire years until retirement.</p>");
		}
	?>

</body>
</html>
