<!DOCTYPE html>
<!--Author:	Heather Moore
	Date:	10/3/16
	File:	Modify3.php
	Purpose:Chapter 7 Exercise

	Modify3.html asks the user to select the capital city of Egypt.
	Modify3.php simply reports the user's choice and displays the correct answer.

	Change Modify3.php so that, after reporting the user's choice,
	depending on whether or not the	user's answer is "Cairo" it
	either displays the message
	"<p>CORRECT - you know your geography!</p>"
	or else displays the message:
	<p>You entered xxx. That is not correct. The capital of Egypt is Cairo</p>
	except of course the program should display the user's selection
	instead of xxx

-->

<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>Modify3</h1>

	<?php
		$capital = $_POST['capital'];
		print("<p>You selected $capital.</p>");
		
		if ($capital == "Cairo")
		{
			print("<p>CORRECT - you know your geography!</p>");
		}
		else
		{
			print("<p>That is not correct.</p>");
			print("<p>The capital of Egypt is Cairo.</p>");
		}
	?>

</body>
</html>
