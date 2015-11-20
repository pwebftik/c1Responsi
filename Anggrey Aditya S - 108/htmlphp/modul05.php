<!DOCTYPE html>
<html>
<body>

	<?php
	// This is a single-line comment
	function writeMsg(){
		echo "SEE YOU LATER";
	}
	function familyName($fname){
		echo "$fname Grey.<br>";
	}
	function setHeight($minHeight = 50){
		echo "The Height is : $minHeight <br>";
	}
	function sum($x, $y){
		$z = $x + $y;
		return $z;
	}
echo "SELAMAT SIANG". "<br>". "<br>";
$color = "grey";
$txt = "w3schools.com";
$x = 125;
$y = 125;
echo "That stick is ". $color . "<br>";
echo "your teeth is ". $color . "<br>";
echo "but My nickname is ". $color . "<br>"."<br>";
# You can also use comments to leave out parts of a code line
echo "I Love $txt!"."<br>";
echo "I Love" . $txt ."!"."<br>"."<br>";
echo $x / $y ."<br>";
echo strlen("HELLO TUGASSSSS")."<br>"; //panjang string = 15
echo str_word_count("HELLO TUGASSSSS")."<br>";// jumlah kalimat = 2
echo strrev("INI APA AJA ISI NYA WKWKW OKE")."<br>";//membalikkan string
echo strpos("HELLO TUGASSSSS", "TUGASSSSS")."<br>"."<br>";//posisi string yang dicari berada pada kalimat ke 2
echo str_replace("Saputri", "Anggre", "Aditya Saputri")."<br>"."<br>";

familyName("Aditya");
familyName("Ashley");
familyName("Alice");
familyName("Sasha");
familyName("Fifty Shades of");
echo "<br>";
echo "<br>";
setHeight(350);
setHeight();// use the default value of 50
setHeight(135);
setHeight(80);
echo "<br>";
echo "5 + 10 = ". sum(5, 10) . "<br>";
echo "7 + 13 = ". sum(7, 13) . "<br>";
echo "2 + 4 = ". sum(2, 4) . "<br>";
echo "<br>";
writeMsg();//call the function


	?>
</body>
</html>