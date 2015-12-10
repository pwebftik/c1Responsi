<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$t = date("H");

if ($t < "20") {
	echo "Have a good day!". "<br><br>";
}

else {
	echo "Have a good night!". "<br><br>";
}
 


$t = date("H");
if ($t < "10") {
	echo "Have a good Morning!". "<br><br>";
}
elseif ($t < "20") {
	echo "Have a good day!". "<br><br>";
}
else {
	echo "Have a good night!". "<br><br>";
}

$favcolor ="Red";
switch ($favcolor) {
	case "red":
		echo "Your favorite color is red!". "<br><br>";
		break;
	
	case "aqua":
		echo "Your favorite color is aqua!". "<br><br>";
		break;

	case "green":
		echo "Your favorite color is green!". "<br><br>";
		break;

	default:
	echo "Your favorite color is neither red, aqua, or green!". "<br><br>";
}

$x=1;
while($x <=5) {
	echo "The Number is: $x <br>";
	$x++;
}

{echo "<br><br>";}

$x=1;
do {
	echo "The Number is: $x <br>";
	$x++;
} while ($x <=5);

{echo "<br><br>";}

for ($x =0; $x <=10; $x++) {
	echo "The Number is : $x<br>";
}

{echo "<br><br>";}

$colors = array("red","green","aqua","yellow");
foreach ($colors as $value) {
	echo "$value <br>";
}
$x = 10;
$y = 3;
//echo pow($x,$y)."<br>";
//$x += $y;
//echo $x; 
var_dump(! is_string("Hello"));
echo "<br>";
var_dump($x==10 xor $y==3);
$text="Hello";
$string="world";
echo $text." ".$string."<br>";
$text.=" world";
echo $text;

?>
</body>
</html>
