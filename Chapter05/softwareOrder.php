<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		9/14/16
	File:		softwareOrder.php
	Purpose:	Chapter 5 Exercise

-->


<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Your Order</h1>

	<?php
		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];
		$subTotal = $numCopies * 35;
		$tax = $subTotal * 0.07;
		$shipHandle = $numCopies * 1.25;
		$total = $subTotal + $tax + $shipHandle;
		
		print("<p>The operating system you chose is $os.</p>");
		print("<p>The number of copies ordered is $numCopies.</p>");
		print("<p>Sub-total: $".number_format($subTotal, 2)."</p>");
		print("<p>Tax: $".number_format($tax, 2)."</p>");
		print("<p>Shipping and handling: $".number_format($shipHandle, 2)."</p>");
		print("<p>Total cost: $".number_format($total, 2)."</p>");
	?>

</body>
</html>
