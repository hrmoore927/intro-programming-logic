<!--	Author:	Heather Moore
		Date:	10/17/16
		File:	orderForm2.php
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
		
		if($numCDs < 1)
			{
			print("<p>ERROR! MUST ORDER AT LEAST 1 CD!</p>");
			print("<p>Please <a href=\"orderForm2.html\">try again</a></p>");
			}
		elseif($numCDs <= 4)
			{
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
			}
		else
			{
			if($title == "Hip")
				{
				$price = 7.50;
				}
			else
				{
				$price = 8.50;			
				}
			$cost = $numCDs * $price;
			
			print("<p>CD Title: $title</p>");
			print("<p>Number of CDs: $numCDs</p>");
			print("<p>Cost of CDs: $".number_format($cost, 2)."</p>");
			print("<p>Shipping cost: $".number_format(0.00, 2)."</p>");
			print("<p>Total cost: $".number_format($cost, 2)."</p>");
			}


	?>

</body>
</html>

