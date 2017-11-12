<!--	Author: Heather Moore
		Date:	11/21/16
		File:	performances.php
		Purpose: Exam Exercise

-->

<html>
<head>
	<title>My Upcoming Performances</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		print ("<h1>Upcoming Performances in 2015</h1>");
		print ("<table border =\"1\">");
		print("<tr><th align = \"left\">Date</th><th align = \"left\">Venue</th><th align = \"left\">City</th><th align = \"right\">Ticket Price</th></tr>");

		$count = 0;
		$ashevilleCount = 0;
		$eventFile = fopen("performances.txt", "r");

// **** YOUR CODE HERE ****
		$nextEvent = fgets($eventFile);
		while (!feof($eventFile))
		{
			list($date, $venue, $city, $price) = explode(":", $nextEvent);
			print("<tr><td>$date</td>");
			print("<td>$venue</td>");
			print("<td>$city</td>");
			$count = $count + 1;
			if($city == "Asheville")
			{
				$ashevilleCount = $ashevilleCount + 1;
			}
			if($price < 10)
			{
				print("<td>$price *</td></tr>");
			}
			else
			{
				print("<td>$price</td></tr>");
			}
			$nextEvent = fgets($eventFile);
		}






		fclose($eventFile);
		print ("</table>");

		print (	"<p class=\"alert\">Lower cost venues are marked with *</p>");
		print ("<p>NUMBER OF PERFORMANCES: $count</p>");
		print ("<p>NUMBER OF PERFORMANCES IN ASHEVILLE: $ashevilleCount</p>");

?>
</body>
</html>
