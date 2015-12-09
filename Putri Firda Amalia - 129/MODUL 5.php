<!DOCTYPE html>
<html>
<body>

<?php

function  writeMsg(){
	echo "hello world!";
}


echo "GOOD MORNING WORLD"."<br>"."<br>";
$color="blue";
$txt = "w3school.com";
$x = 50;
$y = 2;
echo " I love " . $color . "<br>";
echo " My favorite color is " . $color . "<br>";
echo " Water is " . $color . "<br>";
echo " Sky is " . $color . "<br>" . "<br>";


function familyName($fname,$year) {
echo "$fname Refsnes. Born in $year <br>";
}

familyName("Pratama","2001");
familyName("Geraldy","2002");
familyName("Aditya","2003");
familyName("Hutagalung","2004")."<br>"."<br>"."<br>";


echo "I love $txt!"."<br>";
echo "I love " . $txt . "!" . "<br>"."<br>";
echo $x / $y . "<br>";
echo strlen("BELAJAR")."<br>";
echo str_word_count("BELAJAR PEMPROGRAMAN WEB")."<br>";
echo strrev("TUGAS PRAKTIKUM")."<br>";
echo strpos("GOOD MORNING", "MORNING")."<br>"."<br>";
echo str_replace("RANGKUM","TUGAS","WEB RANGKUM!")."<br>";

function setHeight($minheight = 10){
echo"The height is :$minheight <br>";
}
setHeight(5);
setHeight();
setHeight(15);
setHeight(20)."<br>"."<br>";

function sum($x , $y){
$z=$x+$y;
return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4  = " . sum(2, 4) ;	

?>
</body>
</html>