<?php

echo "1. Mendeklarasikan panjang aray";
$cars = array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2];
echo "<br>";

echo "2. Mengetahui panjang array";
$cars = array("Volvo","BMW","Toyota");
echo count($cars);
echo "<br>";

echo "3. Mengakses array melalui perulangan (loop)"."<br>";
$cars = array("Volvo","BMW","Toyota");
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
	echo $cars[$x];
	echo "<br>";
}

echo "4. Mendeklarasikan Associative array dan mengaksesnya";
$age = array("Peter" => "35","Ben" => "37","Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";

echo "5. Mengakses semua nilai Associative array dengan perulangan";
$age = array("Peter" => "35","Ben" => "37","Joe" => "43");
foreach ($age as $x => $x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
}

echo "6. Array Multidimensi";
$cars = array
	(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
	);
for ($row = 0; $row <4; $row++) {
	echo "<p><b>Row Number $row </b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo " </ul>";
}

?>