<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
echo "HEllo World", "<br>";
$x=5 /*+15 */ +5;
echo $x. "<br>";
$color = " blue";
echo "My car is" . $color. "<br>";
echo "My house is" . $color. "<br>";
echo "My boat is" . $color. "<br>";

$x = 5;
$y = 10.5;
echo $x+$y. "<br>";
$txt= "FTIKOM";
echo "I'm $txt" . "<br>";
$txt = "FTIKOM";
echo "I love" . $txt . "!";

echo strlen("Hello World!");

echo str_word_count("Hello World!");

echo strrev("Hello world!");

echo strpos("Hello World", "world");

echo str_replace("world", "Dolly", "Hello World");


function writeMsg() {
	echo "Hello World!" ."<br>";
}
writeMsg(); 
function familyname($fname) {
	echo "$fname ftik" . "<br>";
}
familyname("nanda");
familyname("christin");

function familyName($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

function setHeight($minheight = 50 {
	echo "The height is :  $minheight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

function sum($x, $y) {
	$z = $x + $y;
	return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 103) . "<br>";
echo "2 + 4 = " . sum(2, 4);
}
}
}
?>
</html>
</body>