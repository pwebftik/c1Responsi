<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	echo "Hello world! <br><br>";
	 // This is a single-line comment
	# This is also a single-line comment
	/*
	This is a multiple-lines comment block
	that spans over multiple
	lines
	*/
	// You can also use comments to leave out parts of a code line
	$x = 5/* + 15 */ + 5;
	echo $x;
	echo "<br><br>";

	$color = "red";
	echo "My car is " . $color . "<br>";
	echo "My house is " . $color . "<br>";
	echo "My boat is " . $color . "<br><br>";

	$txt = "Hello world!";
	$x = 5;
	$y = 10.5;
	
	$txt = "W3schools.com";
	echo "I love $txt!<br>";

	$txt = "W3schools.com";
	echo "I love" . $txt . "!<br><br>";
	
	$x = 5;
	$y = 4;
	echo $x + $y;
	echo "<br><br>";

	echo strlen("Hello world!"); //outputs 12
	echo "<br><br>";

	echo str_word_count("Hello world!"); // outputs 2
	echo "<br><br>";

	echo strrev("Hello world!"); // outputs !dlrow olleH
	echo "<br><br>";

	echo strpos("Hello world!", "world"); // outputs 6
	echo "<br><br>";

	echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
	echo "<br><br>";

	function writeMsg(){
		echo "Ayam";
	}

	writeMsg(); // call the function
	echo "<br><br>";

	function familyName($fname){
		echo "$fname<br>";
	}

	familyName("Jani");
	familyName("Hege");
	familyName("Stale");
	familyName("Kai Jim");
	familyName("Borge");
	
	echo "<br><br>";

	function familyName1($fname,$year) {
	echo "$fname Born in $year <br>";
	}
	familyName1("Hege","1775");
	familyName1("Stale","1978");
	familyName1("Kai Jim","1783");

	echo "<br><br>";

	function setHeight($minheight = 50){
		echo "The height is : $minheight <br>";
	}

	setHeight(350);
	setHeight(); // will use the default value of 50
	setHeight(135);
	setHeight(80);
	echo "<br><br>";

	function sum($x, $y){
		$z = $x + $y;
		return $z;
	}

	echo "5 + 10 = " . sum(5, 10) . "<br>";
	echo "7 + 13 = " . sum(7, 13) . "<br>";
	echo "2 + 4 = " . sum(2, 4);

?>


</body>
</html>