<!DOCTYPE html>
<html>
<head>
	<title>KONTROL KONDISI</title>
</head>
<?php

$t = date ("H");
if ($t < "20"){
	echo "have a good day!";
}
$t = date ("H")
if ($t < "10"){
	echo "have a good day!";
}
else {
	echo "Have a good night!";
}
$t = date ("H")
if ($t < "10"){
	echo "have a good morning!";
}
else if{
	echo "Have a good day!";
}
else {
	echo "Have a good night!";
}
$favcolor = "grey"
switch ($favcolor) {
	case 'grey':
		echo "your favcolor is grey!";
		break;
	case 'brown';
		echo "your favcolor is brown!";
		break;
	case 'black';
		echo "your favcolor is black!";
		break;
	default:
		echo "your favcolor is neither grey, brown, nor black!";
}
$x = 1;
while ($x <=5){
	echo "The number is : $x <br>";
	$x++;
}
echo "<br>";
$x = 1;
do{
	echo "nomornya adalah $x <br>";
	$x++;
} while ($x <= 5);
echo "<br>";

for ($x=0; $x <= 10; $x++){
	echo "nomor ini : $x <br>";
}
echo "<br>";
$colors = array ("grey", "brown", "black");
foreach ($colors as $value){
	echo "value <br>";
}
?>
</html>