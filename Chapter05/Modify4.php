<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		9/14/16
	File:		Modify4.php
	Purpose:	Chapter 5 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(Modify4.html) and a PHP progam (Modify4.php).

	Modify4.html should include a form that prompts the user for a purchase
	amount, then submits this to Modify4.php for processing. Modify4.html
	has been provided and can be used as-is.

	Modify4.php should: calculate a reduced purchase amount based on a
	25% discount (this is 0.75 times the purchase amount); calculate the
	tax on the reduced amount (0.07 times the reduced amount); calculate the
	total cost; display the reduced purchase amount, the tax, and total cost.
	Modify4.php currently contains code that does not calculate the discount.
	Note the tax should not be applied until after the discount has been
	taken.

-->

<html>
<head>
	<title>Modify4</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>Modify4</h1>

	<?php
		$purchaseAmount = $_POST['purchaseAmount'];
		$reducedAmount = $purchaseAmount * 0.75;
		$tax = $reducedAmount * 0.07;
		$total = $tax + $reducedAmount;

		print("<p>Purchase Amount: $$reducedAmount</p>");
		print("<p>Tax: $$tax</p>");
		print("<p>Total Cost: $$total</p>");
	?>

</body>
</html>
