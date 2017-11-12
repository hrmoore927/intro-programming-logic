<!--	Author:	Heather Moore
		Date:	11/21/16
		File:	lifespans.php
		Purpose:
-->

<html>
<head>
	<title>Lifespans</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<h1>Lifespans</h1>
<?php
	$animal = $_POST['animal'];

	// Add your averageLife() function as well as the code to call the
	// function to obtain the animal's lifespan and display the result. 
	function averageLife($animal)
	{
		if($animal == "Mouse")
		{
			$lifespan = 4;
		}
		if($animal == "Queen Bee")
		{
			$lifespan = 5;
		}
		if($animal == "Squirrel")
		{
			$lifespan = 20;
		}
		if($animal == "Rattlesnake")
		{
			$lifespan = 22;
		}
		if($animal == "Pheasant")
		{
			$lifespan = 27;
		}
		if($animal == "Mallard Duck")
		{
			$lifespan = 29;
		}
		if($animal == "Bear")
		{
			$lifespan = 40;
		}
		if($animal == "Box Turtle")
		{
			$lifespan = 123;
		}
		return $lifespan;
	}
	
	$years = averageLife($animal);
	
	print("The $animal has a lifespan of $years years.");
	
	
?>
	<a href="lifespans.html"> Try another animal..</a>
</body>
</html>
