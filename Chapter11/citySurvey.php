<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		11/9/16
	File:	  citySurvey.php
	Purpose:

-->

<html>
<head>
	<title>CITY SURVEY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<?php
		$citySurvey = array("London", "Paris", "Rome", "Rome", "Paris",
		"Paris", "Paris", "London", "Rome", "Rome",
		"Paris", "London", "Paris", "London", "London",
		"London", "Paris", "London", "Paris", "Rome");
		$countLondon = 0;
		$countParis = 0;
		$countRome = 0;

		// Add the code needed to count the number of times that each city occurs in the array
		for($i = 0; $i < sizeof($citySurvey); $i = $i + 1)
		{
			if($citySurvey[$i] == "London")
			{
				$countLondon = $countLondon + 1;
			}
			if($citySurvey[$i] == "Paris")
			{
				$countParis = $countParis + 1;
			}
			if($citySurvey[$i] == "Rome")
			{
				$countRome = $countRome + 1;
			}
		}
		
		print ("<h1>CITY SURVEY RESULTS</h1>");
		// display the results in a table
		print ("<table border = \"1\">");
		print ("<tr><th>City</th><th>Count</th></tr>");
		print("<tr><td>London</td><td>$countLondon</td>");
		print("<tr><td>Paris</td><td>$countParis</td>");
		print("<tr><td>Rome</td><td>$countRome</td>");
		print("</table>");

		?>
</body>
</html>
