<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	10/12/16
	File:	softwareOrder.php
	Purpose:Chapter 8 Exercise
-->

<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>YOUR ORDER:</h1>

	<?php
		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];
		
			$subTotal = $numCopies * 35.00;
			$salesTax = $subTotal * 0.07;

			if ($numCopies < 1)
			{
				print("<p><strong>ERROR! You must order at least one copy!</strong></p>");
			}
			else
			{
				if ($numCopies < 5)
				{
					$shippingAndHandling = 3.50 * $numCopies;
				}
				elseif ($numCopies < 10)
				{
					$shippingAndHandling = .75 * $numCopies;
				}
				else
				{
					$shippingAndHandling = .85 * $numCopies;
				}
				
			$totalCost = $subTotal + $salesTax + $shippingAndHandling;

			print("<table border = \"2\"><tr><td>Operating System</td><td>$os</td></tr>");
			print("<tr><td>Number of copies</td><td>$numCopies</td><td>");
			print("<tr><td>Sub-total</td><td align=\"right\">$".number_format($subTotal, 2)."</td></tr>");
			print("<tr><td>Sales tax</td><td align=\"right\">$".number_format($salesTax, 2)."</td></tr>");
			print("<tr><td>Shipping and handling</td><td align=\"right\">$".number_format($shippingAndHandling, 2)."</td></tr>");
			print("<tr><td>TOTAL:</td><td align=\"right\">$".number_format($totalCost, 2)."</td></tr></table>");
			}


			
	?>

</body>
</html>
