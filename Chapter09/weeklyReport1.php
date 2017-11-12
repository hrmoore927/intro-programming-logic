<!DOCTYPE html>
<!--	Author:	Heather Moore
		Date:	10/26/16
		File:	weeklyReport1.php
		Purpose: Chapter9 Exercise

-->

<html>
<head>
	<title>Weekly Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<h1>Weekly Report</h1>

	<?php
		$paintFile = fopen("weeklyData.txt","r");
		$total = 0;
		$badDays = 0;
		for($count = 1; $count <=7; $count = $count + 1)
		{
			$income = fgets($paintFile);
			$total = $total + $income;
			if($income == 0)
			{
				$badDays = $badDays + 1;
			}
		}
		$avgDailyIncome = $total / 7;
		


		
		print("<p>TOTAL INCOME FROM PAINT CONTRACTS: ");
		print("$".number_format($total, 2)."</p>");
		print("<p>AVG DAILY INCOME FROM PAINT CONTRACTS: ");
		print("$".number_format($avgDailyIncome, 2)."</p>");
		print("<p>NUMBER OF DAYS with NO INCOME: $badDays.</p>");
	
?>

</body>
</html>
