<!--	Author:	Heather Moore
		Date:	10/17/16
		File:	orderForm1.php
-->

<html>
<head>
	<title>CD Orders</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<?php
		print ("<h1>CD Orders</h1>");

		$numCDs = $_POST['numCDs'];
		$title = $_POST['title'];
		
		if($title == "Hip")
			{
			$price = 7.50;
			}
		else
			{
			$price = 8.50;
			}
			
		$cost = $numCDs * $price;
		$total = $cost + 2.50;
			
		print("<p>CD Title: $title</p>");
		print("<p>Number of CDs: $numCDs</p>");
		print("<p>Cost of CDs: $".number_format($cost, 2)."</p>");
		print("<p>Shipping cost: $2.50</p>");
		print("<p>Total cost: $".number_format($total, 2)."</p>");

	?>

</body>
</html>

