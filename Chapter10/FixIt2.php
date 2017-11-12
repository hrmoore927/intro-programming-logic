<!DOCTYPE html>
<!--Author:		Heather Moore
	Date:		10/31/16
	File:	  FixIt2.php
	Purpose:  What's wrong here?
			  The first sale (0) in the file sales.txt is not displayed.
			  Instead an additional line is produced after the last sale
			  already has been read from the file!

-->

<html>
<head>
	<title>FixIt2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<?php
		$salesFile = fopen("sales.txt", "r");
		$nextSale = fgets ($salesFile);

		while (!feof($salesFile) )
		{
			print ("The next sale is $nextSale<br />");
			$nextSale = fgets ($salesFile);
		}
		fclose ($salesFile);
	?>
</body>
</html>
