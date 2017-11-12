<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		10/31/16
	File:	  Modify2.php
	Purpose:  Add the necessary code to Modify2.php so that the
			  program finds the highest sale in the file.
			  Hint: the correct answer is 900
-->

<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<?php
		$highestSale = 0;

		$salesFile = fopen("sales.txt", "r");
		$nextSale = fgets ($salesFile);

		while (!feof($salesFile) )
		{
			if($highestSale < $nextSale)
			{
				$highestSale = $nextSale;
			}

			$nextSale = fgets ($salesFile);
		}
		fclose ($salesFile);

		print("<p>HIGHEST SALE AMOUNT: $highestSale</p>");

	?>
</body>
</html>
