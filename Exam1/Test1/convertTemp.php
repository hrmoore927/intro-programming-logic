<!DOCTYPE html>
<!--	Author:	Heather Moore
		Date:	9/19/16
		File:	convertTemp.php
		Purpose: Weather exercise
-->

<html>
<head>
	<title>Temperature Conversion</title>
	<link rel ="stylesheet" type="text/css" href="weather.css" >
</head>
<body>
	<h1>Convert to Celsius</h1>
	
	<?php
		$fahrenheit = $_POST['fahrenheit'];
		$celsius = ($fahrenheit-32)/(9/5);
	
		print("<p>$fahrenheit degrees F converts to $celsius degrees Celsius.</p>")
	?>

	<p>	<a href = "convertTemp.html">Convert another?</a><br />
		<a href = "weather.html">Today's Weather</a></p>

</body>
</html>