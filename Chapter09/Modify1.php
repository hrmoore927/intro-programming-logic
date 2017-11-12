<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	10/26/16
	File:	Modify1.php
	Purpose:Chapter 9 Exercise

				Modify1.html does not need to be changed. Change Modify1.php
				so that it will find the oldest age in ages.txt instead of
				the average age. Hints: You no longer need the  $total or
				$averageAge variables. Refer to Chapter 9 to see how
				to use a loop to find the highest number in a series..
-->
<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>Modify1</h1>

	<?php

		$total = 0;
		$ageFile = fopen("ages.txt", "r");
		$oldestAge = 0;

		for ($count = 1; $count <= 10; $count = $count + 1)
		{
			$nextAge = fgets($ageFile);
			if($nextAge > $oldestAge)
			{
				$oldestAge = $nextAge;
			}	
		}
		fclose($ageFile);

		print("<p>The oldest age in the file is $oldestAge.</p>");
	?>

</body>
</html>
