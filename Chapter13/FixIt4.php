<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		11/14/16
	File:	  FixIt4.php
	Purpose:  What's wrong here? The new starting wage is not calculated
			  correctly.  Can you fix it?
			  Hint: the problem is NOT in this program, it is in the
			  getStartingWage() function in the incWageFunctions.php
			  file.
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		include("incWageFunctions.php");

		$startingWage = getStartingWage();

		print("<p>Your starting wage is $$startingWage.</p>");
	?>
</body>
</html>
