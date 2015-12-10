<?php



$jenis = array ("Yamaha","Honda","Aprilia");

echo " Jenis-jenis motor : " . $jenis[0]. "," .$jenis[1] .  " dan " . $jenis[2]. "." . "<br>"."<br>";



echo count($jenis ). "<br>"."<br>";



$arrlength = count ($jenis) ;

for ($x = 0 ; $x < $arrlength; $x++){
	echo $jenis[$x] . "<br>"."<br>";

}


$hp = array("Hanif" =>"Samsung" , "Suges" =>"Acer" , "Richard" =>"Asus" , "Ayu" =>"Samsung", "Ulvie" =>"Samsung"  );

echo " HP Hanif adalah " . $hp["Hanif"]."<br>"."<br>";


foreach ($hp as $x => $x_value) {
	echo "Key=" . $x . ", Value= ".$x_value;
	echo "<br><br>";
}



$jenis = array
	(
		array("Saint",81,90),
	 	array("Avenger",90,90),
	 	array("Assassin",89,90),
	 	array("Pyromencer",86,90)
	);
for ($row = 0; $row < 4; $row++) {
	echo "<p><b> Magnetism Member $row</b></p>";
	echo "<ul>";
for ($col = 0; $col < 3; $col++) {
	echo "<li>".$jenis[$row][$col]."</li>";
}
	echo "</ul>";
}

?>