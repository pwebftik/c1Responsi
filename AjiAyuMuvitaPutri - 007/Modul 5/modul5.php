<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo "Hello World"."<br>";
$x=5 /*+15 */ +5;
echo $x."<br><br>";

$color="aqua";
$COLOR="red";
echo "My car is " . $color . "<br>";
echo "My House is " . $COLOR . "<br>";
echo "My boat is " . $color . "<br><br><br>";

$txt = "Hello World!";
$x = 5;
$y = 10.5 . "<br><br>";

$txt = "W3Schools.com";
echo "I Love $txt!" . "<br><br>";

$txt = "W3Schools.com";
echo "I Love " . $txt . "!" . "<br><br>";

$x = 5;
$y = 4;
echo $x + $y . "<br><br>";

echo strlen("Hello World") . "<br><br>"; //Menghitung Jumlah panjang huruf

echo str_word_count("Aji Ayu!") . "<br><br>"; //menghitung jumlah dalam kalimat

echo strrev("Hello World") . "<br><br>"; // output !dlrow olleH membalikan huruf

echo strpos("Hello World", "World") . "<br><br>"; // output 6 

echo str_replace("World", "Dolly", "Hello World!") . "<br><br>"; // out put Hello Dolly!

function writeMsg() {
	echo "Hello World!";
}
writeMsg(); // call the function

function familyName($fname, $year) {
	echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hage","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");

function setHeight($minheight=50) {
	echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

function sum($x, $y) {
	$z=$x+$y;
	return $z;
}
echo "5+10=" . sum(5, 10) . "<br>";
echo "7+13=" . sum(7, 13) . "<br>";
echo "2+4=" . sum(2, 4);
?>
</body>
</html>
