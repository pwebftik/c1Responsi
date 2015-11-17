<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$t = date("H");
if ($t < "20") {
	echo "Have a good day!";
}

$t = date ("H");

if ($t < "20"){
	echo "Have a good day!";
}
else {
	echo "Have a good night!";
}
{echo "<br><br>";}

$t = date ("H");

if ($t < "10"){
	echo "Have a good morning!";
}
else if ($t < "20"){
	echo "Have a good day!";
} 
else {
	echo "Have a good night!";
}
{echo "<br><br>";}

$favcolor = "red";

switch ($favcolor){
	case "red":
	echo "your favorite color is red!";
	break;
	case "blue":
	echo "your favorite color is blue!";
	break;
	case "green":
	echo "your favorite color is green!";
	break;
	default:
	echo "your favorite color is neither red, blue, nor green";
}
{echo "<br><br>";}

$x=1;
while($x<=5){
	echo "The number is : $x <br>";
	$x++;
}
{echo "<br><br>";}

$x=1;
do {
	echo "The number is : $x <br>";
	$x++;
}
while ($x <=5);

for ($x=0; $x <=10; $x++){
	echo "The number is : $x <br>";
}
{echo "<br><br>";}

$colors = array("red"=>"green","blue","yellow");
foreach ($colors as $key => $value){
	echo "$key => $value <br>";
}
echo "<br><br>";

$x = 10;
$y = 3;
echo $x+$y;
echo "<br><br>";

$x= 10;
$y = 3;
echo pow($x, $y)."<br><br>";
$x += $y;
echo $x;
echo "<br><br>";

$x= 10;
$y = 3;
var_dump($x!=$y);
echo "<br><br>";

$x= 10;
$y = 3;
var_dump(! is_string("Hello")); //tanda invers membalik nilai
echo "<br><br>";

var_dump($x==10 xor $y==4); //xor=salah satu aja yang benar
echo "<br><br>";

$text="Hello";
$string="world";
echo $text." ".$string;
$text.=" world";
echo "<br>".$text;


?>

</body>
</html>