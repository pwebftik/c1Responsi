<?php
$t = date("H");

if ($t < "10") {
	echo "Have a good morning";
}
elseif ($t < "20") {
 	echo "Have a good day";
} 
else {
	echo "Have a good night";
}
echo "<br><br>";


$motor = "Honda";

switch ($motor) {
	case "Honda":
		echo "Your favourite motorcycle is Honda!";
		break;
	
	case "Yamaha":
		echo "Your favourite motorcycle is Yamaha!";
		break;

		case "Suzuki":
		echo "Your favourite motorcycle is Suzuki!";
		break;	
	default:
		echo "Your favourite motorcycle is neither Honda, Yamaha nor Suzuki!";
		break;
	}
echo "<br><br>";

$x = 200;

do {
	echo "The number is : $x <br>";
	$x++;
}
while ($x <= 220);
echo "<br><br>";


for ($x=2; $x < 10; $x++) { 
	echo "The number is : $x <br>";
}
echo "<br><br>";


// $planes = array("Lion Air", "Garuda Indonesia", "Citilink", "Air Asia"); ATAU gunakan cara dibawah

$planes = ["Lion Air", "Garuda Indonesia", "Citilink", "Air Asia"];
// foreach ($planes as $value) { ATAU GUNAKAN CARA DIBAWAH
// echo "$value <br>"; ATAU GUNAKAN CARA DIBAWAH
foreach ($planes as $key => $value) {
	echo "$key => $value <br>";
}


echo "<br><br>";
$x=100;
$y=3;
/*echo $x%$y."<br>";
echo pow($x,$y)."<br>";
$x += $y;
echo $x;*/
var_dump($x!==$y);
echo "<br>";
var_dump(! is_string("Hello"));
echo "<br>";
var_dump($x==10 xor $y==3);
echo "<br>";

$text="hello";
$string="world";
echo $text." ".$string;

echo "<br><br>";
$text.=" world";
echo "<br>".$text;

?>