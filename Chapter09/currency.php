<!DOCTYPE html>
<!--	Author:	Heather Moore
		Date:	10/26/16
		File:	currency.php
		Purpose:
		
-->

<html>
<head>
	<title>Currency Converter</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<?php
		$country = $_POST['country'];

		print("<h1>Currency Converter: $country</h1>");

		if ($country == "Chile")
		{
				$currency = "PESO";
				$conversionFactor = 496.831;
		}
		elseif ($country == "Egypt")
		{
				$currency = "POUND";
				$conversionFactor = 5.520;
		}
		elseif ($country == "Italy")
		{
				$currency = "EURO";
				$conversionFactor = 0.6778;
		}
		elseif ($country == "Japan")
		{
				$currency = "YEN";
				$conversionFactor =  108.645;
		}
		elseif ($country == "Spain")
		{
				$currency =  "EURO";
				$conversionFactor = 0.6778;
		}
		print ("<table border = \"1\"> ");
		print ("<tr><td><strong>DOLLARS</strong></td>
				<td><strong>$currency</strong></td></tr>");
		for ($dollarsUS = 100; $dollarsUS <= 1000; $dollarsUS = $dollarsUS + 100)
		{
			$dollarsForeign = $dollarsUS * $conversionFactor;
			print("<tr><td align = \"center\">$dollarsUS</td>
				<td align = \"center\">$dollarsForeign</td></tr>");
		}
		print ("</table>");
	?>

</body>
</html>
