<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	echo "<div> Hello World </div>";
	echo "<div> Goodbye World </div>";

	//Variables
	$a = 5;

	echo $a;


	// String Interpolation
	echo "<div>I have $a things</div>";
	echo '<div>I have $a things</div>';


	// number
	// integer
	$b = 15;
	// float
	$b = 0.576;

	$b = 10;


	// string
	$name = "Yerguy2";

	// boolan
	$isOn = true;



	// math
	// pemdas
	echo (5 - 4) * 2;

	// concatenation
	echo "<div>b + a" . " = c</div>";
	echo "<div>$b + $a = ".($a+$b)."</div>";

	?>


	<hr>
	<div>This is my name</div>
	<div>


	<?php  

	$firstname = "YU-TUNG";
	$lastname = "LEE";
	$fullname = "$firstname $lastname";


	echo $fullname;


	?>
	<hr>
	<?php  

	// Superblobal
	// in the URL + ?name=Joey

	echo "<a href='?name=Joey'>visit</a><br>";
	echo ""<div>My name is {$_GET['name']}</div>";

	// ?name=Joey&type=textarea

	echo "<a href='?name=Joey&type=textarea'>visit</a><br>";
	echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";


	?>
	<hr>
	<?php 

	// array
	$colors = array("red","green","blue");

	echo $colors[2];

	echo "
		<br>$colors[0]
		<br>$colors[1]
		<br>$colors[2]
	";

	echo count($colors);	


	?>

	<div style="color:<?= $colors[1] ?>">
		This text is green	
	</div>


	<hr>
	<?php 


	// associative array
	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"
	];

	echo $colorsAssociative ['green'];

	?>
	<hr>
	<?php

	// casting
	$c = "$a";

	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;

	// echo $colorsObject;


	echo "<hr>";

	// array index notation
	echo $colo[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors['0']]."<br>";

 	// object property notation
 	echo $colorsObject->red."<br>";
 	echo $colorsObject->{$colors[0]}."<br>";


 	?>

 	<hr>

	<?php

	print_r($colors);
	echo"<hr>";
	print_r($colorsAssociative);
	echo"<hr>";
	echo"<pre>",print_r($colorsObject),"</pre>";

	// function
	function print_p($v) {
		echo "<pre>",print_r($v),"</pre>";
	}


	print_p($_GET);



	?>

</body>
</html>