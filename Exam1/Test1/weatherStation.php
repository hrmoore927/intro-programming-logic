<!doctype html>
<!--	Author:	Heather Moore
		Date:	9/21/16
		File:	weatherStation.php
		Purpose: Weather exercise
-->

<html>
<head>
	<title>Weather Station</title>
	<link rel ="stylesheet" type="text/css" href="weather.css" />
</head>

<body>
	<h1>Weather Station</h1>
	
	<?php
		$highTemp = $_POST['highTemp'];
		$lowTemp = $_POST['lowTemp'];
		$rainfall = $_POST['rainfall'];
		$weatherCondition = $_POST['weatherCondition'];
		$highTemp = round($highTemp);
		$lowTemp = round($lowTemp);
		$tempRange = $highTemp - $lowTemp;
		
		print("<p>Today will be $weatherCondition with a rainfall amount of ".number_format($rainfall, 2)." inches, and a temperature range of $tempRange degrees.</p>");
	?>
		
		
</body>
</html>