<!DOCTYPE html>
<html>
<body>
<?php
function writeMSG(){
		echo "Hello World" . "<br>";
}

	echo "HELLO BONTANG"."<br>"."<br>";
	function familyname($fname){
	echo "$fname Saun" ."<br>";

}
	familyname("Agus Winarto");
	familyname("Iwan Prastyo");
	familyname("Lia Andriyani");
	echo "<br>"."<br>";

function setHeight($minheight = 50){
echo "The height is :$minheight <br>";
}
setHeight(350);
setHeight(350);// willl use default value of 50
setHeight(135);
setHeight(80);
echo "<br>"."<br>";

	function sum($x,$y){
	$z = $x + $y;
	return $z;
}

echo"5 + 10 =".sum(5,10)."<br>";
echo"7 + 13 =".sum(7,13)."<br>";
echo"2 + 4 =".sum(2,4);
echo "<br>"."<br>";

	$color = "red";
	echo "my car is ". $color."<br>";
	echo "my house is ". $color."<br>";
	echo "my boat is ". $color."<br>";
	$txt= "Fakultas Teknologi Informasi & Komunikasi ";

$x =5;
$y =4;
echo $x+$y;
echo "<br>";

	//panjang string26
	echo strlen("selamat datang didunia ini")."<br>"; 
	// jumlah kalimat 2
	echo str_word_count("Hello World")."<br>";
	//membalikkan string
	echo strrev("Hello World")."<br>";
	//ouputs 6
	echo strpos("Hello World","world")."<br>";
	//posisi string yand dicari pada kalimat 2
	echo str_replace("world","Dolly","Hello World")."<br>";

?>
</body>
</html>