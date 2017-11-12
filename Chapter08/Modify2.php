<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	10/12/16
	File:	Modify2.php
	Purpose:Chapter 8 Exercise

		Modify2.html does not need to be changed. Change Modify2.php
		so that if the entire party (adults and children) is at least
		10 there is a 15.00 discount, and if the entire party is at
		least 6 there is a 10.00 discount.
		So for example, tickets for a party of 2 adults and 2 children
		will cost $22.00
		tickets for a party of 6 adults and 4 children
		will cost $42.00
		tickets for a party of 4 adults and 2 children
		will cost $25.00
-->

<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>Modify2</h1>

	<?php
		$adultTickets = $_POST['adultTickets'];
		$childTickets = $_POST['childTickets'];
		
		$totalTickets = $adultTickets + $childTickets;
		
		if ($totalTickets >= 10)
		{
			$discount = 15.00;
		}
		elseif ($totalTickets >= 6)
		{
			$discount = 10.00;
		}
		else
		{
			$discount = 0.00;
		}
		
		$totalCost = $adultTickets * 6.50 + $childTickets * 4.50 - $discount;
		print("<p>You ordered $adultTickets adult tickets and
		$childTickets children's tickets.</p>");
		print("<p>Your cost is $$totalCost.</p>");
		print("<p>Your discount was $$discount.</p>");

	?>

</body>
</html>
