<!DOCTYPE html>
<html>
<body>

	<?php
	echo "Rangkuman Modul 5";
	?>
<br>
	<?php
	// 	Nama 	: Wong, Richard Giovanni Ardie
	#	NIM     : 1415015033
	?>
<br>
	<?php
	$color = "PHP";
	echo "Saya belajar " . $color . "<br>";
	echo "Dia belajar " . $color . "<br>";
	echo "Kami belajar " . $color . "<br>";
	?>
<br>
	<?php
	$txt = "PHP";
	echo "I love " . $txt . "??";
	?>
<br><br>
	<?php
	$x = 9;
	$y = 5;
	echo $x * $y;;
	?>
<br><br>		
	<?php
	echo strlen("Hello PHP"); 
	?>
<br><br>
	<?php
	echo str_word_count("Hello PHP");
	?>
<br><br>
	<?php
	echo strrev("Hello PHP!");
	?>
<br><br>
	<?php
	echo strpos("Hello world!", "world");
	?>
<br><br>
	<?php
	echo str_replace("world", "PHP", "Hello world!");
	?>
<br><br>
	<?php
	function familyName($fname, $tempat) {
		echo "Hello World! $fname is learning PHP at $tempat <br>";
	}

	familyName("Hanif","Lab");
	familyName("Suges","Home");
	familyName("Ayu","Puskom");
	familyName("Ulvie","405");
	familyName("Wong","411A");
	?>
<br><br>
	<?php
	function setWeight($minweight = 50) {
		echo "The weight is : $minweight <br>";
	}

	setWeight(65);
	setWeight();
	setWeight(73);
	setWeight(80);
	?>
<br><br>
	<?php
	function sum($x, $y) {
		$z = $x + $y;
		return $z;
	}

	echo "123 + 17 = " . sum(123, 17) . "<br>";
	echo "7 + 13 = " . sum(7, 13) . "<br>";
	echo "345 + 465 = " . sum(345, 465);
	?>
	
</body>
</htm