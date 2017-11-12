<!--	Author:	Heather Moore
		Date:	11/21/16
		File:	cdSales.php
		Purpose: Exam Exercise

-->

<html>
<head>
	<title>Annual CD Sales Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		print ("<h1>Annual CD Sales Report</h1>");

		$monthlySales = array(23, 0, 27, 42, 15, 0,  
				  0, 7, 15, 31, 42, 55);

		$totalSales = 0;
		$salesNovDec= 0;
		$months0Sales= 0;
		$averageMonth = 0;

// **** YOUR CODE HERE ****
		for($i = 0; $i < sizeof($monthlySales); $i = $i + 1)
		{
			$totalSales = $totalSales + $monthlySales[$i];
			if($monthlySales[$i] == 0)
			{
				$months0Sales = $months0Sales + 1;
			}
			if($i == 10 or $i == 11)
			{
				$salesNovDec = $salesNovDec + $monthlySales[$i];
			}
		}
		
		$averageMonth = round($totalSales / sizeof($monthlySales));
		




		print("<table border=\"0\">
		<tr><td>TOTAL SALES:</td><td>$totalSales</td></tr>
		<tr><td>MONTHS WITH 0 SALES:</td><td>$months0Sales</td></tr>
		<tr><td>AVERAGE MONTHLY SALES:</td><td>$averageMonth</td></tr>		
		<tr><td>NOVEMBER/DECEMBER SALES:</td><td>$salesNovDec</td></tr></table>");


	?>

</body>
</html>
