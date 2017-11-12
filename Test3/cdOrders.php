<!--	Author:	Heather Moore
		Date:	11/21/16
		File:	cdOrders.php
		Purpose: Exam Exercise
-->

<html>
<head>
	<title>CD ORDERS REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		print ("<h1>CD ORDERS  REPORT</h1>");

		$totalSales = 0;
		$weeksAtLeast5 = 0;
		$mostSold = 0;
		$orderFile = fopen("cdOrders.txt", "r");

		// **** YOUR CODE HERE ****
		
		for ($count = 1; $count <= 52; $count = $count + 1)
		{
			$nextOrder = fgets($orderFile);
			$totalSales = $totalSales+$nextOrder;
			if($nextOrder >= 5)
			{
				$weeksAtLeast5 = $weeksAtLeast5 + 1;
			}
			if($nextOrder > $mostSold)
			{
				$mostSold = $nextOrder;
			}
		}
		$averageSold = round($totalSales / 52);
		
		
		
		
		fclose($orderFile);

		print ("<table>	
				<tr><td>TOTAL CDs SOLD: </td><td>$totalSales</td></tr>
				<tr><td>NUMBER OF WEEKS WITH SALES OF 5 OR MORE: </td><td>$weeksAtLeast5</td></tr>
				<tr><td>MOST CD's SOLD IN A WEEK: </td><td>$mostSold</td></tr>
				<tr><td>AVERAGE WEEKLY SALES: </td><td>$averageSold</td></tr>
</table>");

	?>
</body>
</html>
