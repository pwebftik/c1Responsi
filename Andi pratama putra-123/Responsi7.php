<?php
echo "MENDEKLARASIKAN DAN MENGAKSES ARRAY"."<br>"."<br>";
$cars = array("Volvo","BMW","Toyota");
echo " I LIKE" . $cars[0] .", " .$cars[1] ." and " . $cars[2] . ".";
echo "<br>";

echo "MENGETAHUI PANJANG ARRAY"."<br>"."<br>";
$cars = array ("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";

echo "MENGAKSES ARRAY MELALUI PERULANGAN"."<br>"."<br>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++){
	echo $cars[$x];
	echo "<br>";
}

echo "MENDEKLARASIKAN ASSOCIATIVE ARRAY DAN MENGAKSESNYA"."<br>"."<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . "years old.";
echo "<br>";

echo "MENGAKSES SEMUA NILAI ASSOCIATIVE ARRAY DENGAN PERULANGAN"."<br>"."<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($age as $x => $x_value) {
	echo "Key=" . $x . ", value=" . $x_value;
}
echo "<br>";

echo "ARRAY MULTIDIMENSI"."<br>"."<br>";
$cars = array
(
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
	);
for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}
?>