<?php
//1.mendeklarasikan Array:
$cars= array("Volvo","BMW","Toyota");
echo "I like" . $cars[0]. "," . $cars[1]. "and". $cars[2]. ".";
echo "<br>";

// 2.mengetahui panjang Array:
$cars= array("Volvo","BMW","Toyota");
echo count($cars);
echo "<br>";
//3.Mengakses Array Melalui perulangan (loop):
$cars=array("Volvo","BMW","Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++){
	echo $cars[$x];
echo "<br>";}
//4.Mendeklarasikan Associative array den mengaksesnya:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "peter is". $age['Peter']. "years old.";
 echo "<br>";
// 5.Mengakses semua nilai associative array dengan perulangan:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
	echo "Key=" . $x .", value=" . $x_value;
	echo "<br>";
	
}

// 6.Array multidimensi :
$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
for ($row = 0; $row <4; $row++){
	echo "<p><b> Row number $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++){
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}
?>