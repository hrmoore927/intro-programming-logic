<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	9/28/16
	File:	SubmitOrder.php
	Purpose:Chapter 6 Exercise

-->

<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>SaveTheWorld: Submission Results</h1>

	<?php
		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];
		
		$order = fopen("order.txt", "w");
		fputs($order, "$os:$numCopies\n");
		fclose($order);
		


		print("<p>Your order had been received and will be processed shortly");
	?>

</body>
</html>
