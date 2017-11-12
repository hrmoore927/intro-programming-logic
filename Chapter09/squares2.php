<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	10/26/16
	File:	squares2.php
	Purpose:Chapter 9 Exercise
	
-->
<html>
<head>
	<title>Squares</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>

	<?php
		$startNum = $_POST['startNum'];
		$endNum = $_POST['endNum'];
		$increment = $_POST['increment'];

		print ("<h1>SQUARES</h1><hr />");
		
		for($count = $startNum; $count <= $endNum; $count = $count + $increment)
		{
			$square = $count * $count;
			print("<p>The square of $count is $square</p>");
		}

		print ("<hr />");
	?>

</body>
</html>
