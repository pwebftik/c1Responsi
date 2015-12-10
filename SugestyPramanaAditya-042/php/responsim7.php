<?php

//AKSES ARRAY:

$mhs = array ("S1","S2","S3");

echo " Saya mahasiswa :  " . $mhs[0]. "," .$mhs[1] .  " dan" . $mhs[2]. "." . "<br>"."<br>";

//Mengetahui panjang larik : 

echo count($mhs ). "<br>"."<br>";

//mengakses array dengan looping

$arrlength = count ($mhs) ;

for ($x = 0 ; $x < $arrlength; $x++){
	echo $mhs[$x] . "<br>"."<br>";

}
//Mendeklarasikan asosiasi

$smt = array("Mahasiswa1" =>"1" , "Mahasiswa2" =>"2" , "Mahasiswa3" =>"3" ,"Mahasiswa4" =>"4","Mahasiswa5" =>"5");

echo " Mahasiswa1  adalah mahasiswa semester " . $smt["Mahasiswa1"] ."<br>". "<br>";

//mengakses semua nilai asosiasi dengan looping :

foreach ($smt as $x => $x_value) {
	echo "Key=" . $x . ", Value= ".$x_value;
	echo "<br><br>";
}

//array multidimensi

$mhs = array
	(
		array("S1",22,18),
	 	array("S2",15,13),
	 	array("S3",5,2),
	);
for ($row = 0; $row < 3; $row++) {
	echo "<p><b> Row Number $row</b></p>";
	echo "<ul>";
for ($col = 0; $col < 3; $col++) {
	echo "<li>".$mhs[$row][$col]."</li>";
}
	echo "</ul>";
}

?>