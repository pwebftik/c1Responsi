
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
echo"Hello World"."<br>";

# This is also a single-line comment
//komentar pada php:
$x=5 /*+15*/+5;
echo $x.
//php case sensitive:
$color ="red";
echo"<BR>"."My car is".$color."<br>";
echo"<br>";
echo"My houseis".$color."<br>";
echo"My boat is".$color."<br>";
//Deklarasi variabel:
$txt="Hello World!"."<br>";
$x=5;
$y=10.5;
//output variabel:
$txt ="W3shool.com";
echo "I LOVE $txt"."<br>";
//output variabel2;
$txt ="W3shool.com"."<br>";
echo "I LOVE .$txt."."<br>";
//output variabel 3 dgn aritmatika;
$x=5;
$y=4;
echo $x+$y."<br>";
//mengetahui panjang strng:
echo strlen("Hello World!")."<br>";//output12
//menghitung jumlah pada kalimat:
echo str_word_count("Hello World!")."<br>";//output2
//membalikkan string:
echo strrev("Hello World!")."<br>";//output !dIrow olleH
//pencarian dalam string(posisi):
echo strpos("Hello World!","world")."<br>"; //OUTPUT 6
//mengganti text:
echo str_replace("world", "Dolly", "Hello World!")."<br>";
//fungsi dasar:
function writeMsg(){
	echo "Hello World!"."<br>";
	
}
writeMsg();// call the function
//fungsi dgn argumen;
function familyName($fname){
	echo "$fname Refsnes.<br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
// fungsi dgn lebih dari satu argumen:

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
//fungsi dengan nilai default pada argumen:
function setHeight($minheight = 50){
	echo "The height is : $minheight <br>";
	
}
setHeight(350);
setHeight();// will use the default value of 50
setHeight(135);
setHeight(80);

// fungsi yg mengembalikkan nilai:
function sum($x,$y){
	$z = $x + $y;
	return $z;
}
echo "5+10=". sum(5,10). "<br>";
echo "7+13=". sum(7,13). "<br>";
echo "2+4=". sum(2,4)."<br>";
?>
</body>
</html>