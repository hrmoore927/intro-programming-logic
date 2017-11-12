<!--	Author:	Heather Moore
		Date:	10/17/16
		File:	mySales.php
-->

<html>
<head>
	<title>My CD Sales: 2014</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<h1>My CD Sales: 2014</h1>

<?php
	$mySales = fopen("mySales.txt", "r");
	$numCD1 = fgets($mySales);
	$numCD2 = fgets($mySales);
	$numCD3 = fgets($mySales);
	$numCD4 = fgets($mySales);
	$numCD5 = fgets($mySales);
	$numCD6 = fgets($mySales);
	$numCD7 = fgets($mySales);
	$numCD8 = fgets($mySales);
	$numCD9 = fgets($mySales);
	$numCD10 = fgets($mySales);
	$numCD11 = fgets($mySales);
	$numCD12 = fgets($mySales);
	fclose($mySales);
	
	$totalCD = $numCD1 + $numCD2 + $numCD3 + $numCD4 + $numCD5 + $numCD6 + $numCD7 + $numCD8 + $numCD9 + $numCD10 + $numCD11 + $numCD12;
	$totalCost = $totalCD * 8.50;
	
	print("<p>TOTAL CDs SOLD IN 2014: $totalCD</p>");
	print("<p>TOTAL SALES INCOME FOR 2014: $".number_format($totalCost, 2).".</p>");
	
	if($totalCD > 1200)
		{print("<p>Good news: Your 2014 sales are higher than 2013. Let's acheive even higher sales in 2015!</p>");
		}
	else
		{print("<p>Sales have slowed since 2013, it's important to determine why and take action to increase your online visibility.</p>");
		}




?>
</body>
</html>