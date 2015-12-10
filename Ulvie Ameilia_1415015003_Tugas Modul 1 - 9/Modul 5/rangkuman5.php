<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
echo "Hello World"."<br>";

$x = 5 /* + 15 */ + 5;
echo $x."<br>";

$color = "red";
$COLOR= "yellow";
echo "My car is " . $color . "<br>";
echo "My house is ".$COLOR."<br>";
echo "My boat is ".$color."<br>";

$txt = "Hello world!";
$x=5;
$y=10.5;

$txt = "W3Schools.com";
echo "I LOVE $txt !"."<br>";

$txt = "W3Schools.com";
echo "I LOVE".$txt. "!"."<br>";

$x=5;
$y=4;
echo $x + $y."<br>";

echo strlen("Hello world!")."<br>"; //outputs 12

echo str_word_count("Ulvie Ameilia")."<br>"; //outputs 2

echo strrev("Hello World!"),"<br>"; //outputs !dlrow olleH

echo strpos("Hello world!","world")."<br>"; //outputs 6

echo str_replace("World","Dolly","Hello World!")."<br>"; //outputs hello dollyy!

function writeMsg(){
	echo "Hello World!"."<br>";
}
writeMsg(); //call the function

function familyName($fname, $year){
	echo "$fname Ftik.Born in $year .<br>";
}

familyName("Ulvie Ameilia","1996");


function setHeight($minheight=50){
	echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); //will use the default value of 50
setHeight(135);
setHeight(80);

function sum($x, $y){
	$z=$x+$y;
	return $z;
}

echo "5+10= ".sum(5,10)."<br>";
echo "7+13= ".sum(7,13)."<br>";
echo "2+4= ".sum(2,4);
?>

</body>
</html>