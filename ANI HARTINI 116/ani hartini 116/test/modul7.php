<?php

echo "AKSES ARRAY" . "<br>"."<br>";

$jenis = array ("Action","Adventure","Horor");

echo " Jenis Film favorite saya " . $jenis[0]. "," .$jenis[1] .  " dan" . $jenis[2]. "." . "<br>"."<br>";

echo "JUMLAH PANJANG ARRAY" . "<br>"."<br>";

echo count($jenis ). "<br>"."<br>";

echo "PERULANGAN ARRAY" ."<br>"."<br>";

$arrlength = count ($jenis) ;

for ($x = 0 ; $x < $arrlength; $x++){
	echo $jenis[$x] . "<br>"."<br>";

}
echo "ASSOCIATIVE ARRAY" ."<br>"."<br>";

$usia = array("Ani" =>"18" , "fajar" =>"20" , "Angrey" =>"18" , "Eddy" =>"21", "Rifqi" =>"19"  );

echo " Umur Ani adalah" . $usia["Ani"] . " tahun."."<br>". "<br>";

echo "ASSOCIATIVE ARRAY DENGAN PERULANGAN" ."<br>"."<br>";

foreach ($usia as $x => $x_value) {
	echo "Key=" . $x . ", Value= ".$x_value;
	echo "<br><br>";
}

echo "ARRAY MULTIDIMENSI" . "<br>"."<br>";

$jenis = array
	(
		array("Action",22,18),
	 	array("Adventure",15,13),
	 	array("Horor",5,2),
	 	array("Romance",17,15)
	);
for ($row = 0; $row < 4; $row++) {
	echo "<p><b> Row Number $row</b></p>";
	echo "<ul>";
for ($col = 0; $col < 3; $col++) {
	echo "<li>".$jenis[$row][$col]."</li>";
}
	echo "</ul>";
}

?>