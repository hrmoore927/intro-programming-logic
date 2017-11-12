<!DOCTYPE html>
<!--	Author:
		Date:
		File:	weeklyReport2.php
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
		

		fclose($paintFile);
?>

</body>
</html>
