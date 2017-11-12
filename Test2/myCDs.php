<!--	Author:	Heather Moore
		Date:	10/17/16
		File:	My CDs.php
-->

<html>
<head>
	<title>My CDs</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

<?php
	$myCDs = fopen("myCDs.txt", "r");
	$salesInfo1 = fgets($myCDs);
	$salesInfo2 = fgets($myCDs);
	$salesInfo3 = fgets($myCDs);
	fclose($myCDs);
	
	list($year1, $title1, $sold1, $price1) = explode(":", $salesInfo1);
	list($year2, $title2, $sold2, $price2) = explode(":", $salesInfo2);
	list($year3, $title3, $sold3, $price3) = explode(":", $salesInfo3);

	print("<h1>Here are my CDs</h1>
			<table border = \"1\">
			<tr><th>Year</th><th>Title</th><th>Sold</th><th>Price</th></tr>
			<tr><td>$year1</td><td>$title1</td><td>$sold1</td><td>$price1</td></tr>
			<tr><td>$year2</td><td>$title2</td><td>$sold2</td><td>$price2</td></tr>
			<tr><td>$year3</td><td>$title3</td><td>$sold3</td><td>$price3</td></tr>
			</table>");

?>
</body>
</html>