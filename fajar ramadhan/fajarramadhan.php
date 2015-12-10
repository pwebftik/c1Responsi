<!DOCTYPE html>
<html>
<body>

<?php

function  writeMsg(){
	echo "hello!";
}


echo "GOOD MORNING"."<br>"."<br>";
$color="red";
$txt = "campus.com";
$x = 60;
$y = 2;
echo " I love " . $color . "<br>";
echo " My favorite color is " . $color . "<br>";
echo " Water is " . $color . "<br>";
echo " Sky is " . $color . "<br>" . "<br>";


function familyName($fname,$year) {
echo "$fname Refsnes. Born in $year <br>";
}

familyName("Aco","2001");
familyName("Baco","2002");
familyName("Bece","2003");
familyName("Banggulu","2004")."<br>"."<br>"."<br>";
echo "<br>";

echo "I love $txt!"."<br>";
echo "I love " . $txt . "!" . "<br>"."<br>";
echo $x / $y . "<br>";
echo "<br>";
echo strlen("PRAKTIKUM")."<br>";//panjang string = 7
echo str_word_count("PEMPROGRAMAN WEB")."<br>";//jumlah kalimat = 3
echo strrev("TUGAS PRAKTIKUM")."<br>";//membalikkan string
echo strpos("GOOD DAY", "DAY")."<br>"."<br>";//posisi string yang dicari berada kalimat ke 2
echo str_replace("RANGKUM","TUGAS","WEB RANGKUM!")."<br>";

function setHeight($minheight = 10){
echo"The height is :$minheight <br>";
}
setHeight(21);
setHeight(01);
setHeight(19);
setHeight(96)."<br>"."<br>";

echo "<br>";
function sum($x , $y){
$z=$x+$y;
return $z;
}

echo "21 + 10 = " . sum(21, 10) . "<br>";
echo "21 + 13 = " . sum(30, 4) . "<br>";
echo "21 + 4  = " . sum(21, 4) ;	

?>
</body>
</html>