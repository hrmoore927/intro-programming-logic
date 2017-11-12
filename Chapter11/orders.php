<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		11/9/16
	File:	  orders.php
	Purpose:
	
-->

<html>
<head>
	<title>BLUEBERRY ORDERS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<?php
		
		print ("<h1>BLUEBERRY ORDERS</h1>");
		print ("<table border = \"1\">");
		print ("<tr><th>Order #</th><th>Quantity</th></tr>");
		
		$orders = array(2, 17,4,6,1,3,1,15,1,6);
		$totalBushes = 0;
		$count = 0;
		
		for($i = 0; $i < sizeof($orders); $i = $i + 1)
		{
			$orderNum = $i +1;
			print("<tr><td>Order $orderNum</td><td>$orders[$i]</td>");
		}
		for($i = 0; $i < sizeof($orders); $i = $i + 1)
		{
			$totalBushes = $totalBushes + $orders[$i];
			if($orders[$i] > 1)
			{
				$count = $count + 1;
			}
		}
		print ("</table>");
		


		print ("<p>TOTAL NUMBER OF BUSHES ORDERED: $totalBushes.</p>");
		print ("<p>TOTAL NUMBER OF ORDERS: ".sizeof($orders).".</p>");
		print ("<p>TOTAL NUMBER OF ORDERS OVER 1: $count.</p>");		
	?>
</body>
</html>
