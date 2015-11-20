<html>
<head>
	<title>bab 6</title>
</head>
<body>
<h2 align="center">MODULE 6 KONTROL KONDISI</h1>
<br>
<h3>Percabangan</h3>

<?php 
$t = date("H");
if ($t < "20");{
	echo "Have a Good day!";
}?>

<?php 
$t = date("H");
if ($t < "20"){
	echo "Have a Good day!";
} else {
	echo "Have a Good night!";
}?>

<?php 
if ($t < "10"){
	echo "Have a Good morning!";
} elseif ($t < "20"){
	echo "Have a Good day!";
} else {
	echo "Have a Good night!";
}?>

<?php 
$favcolor = "red";

switch ($favcolor){
	case "red":
		echo "Your favorite color is red!";
		break;
	case "blue":
		echo "Your favorite color is blue!";
		break;
	case "green":
		echo "Your favorite color is green!";
		break;
	default :
		echo "Your favorite is neither red, blue ,nor greeen!<br>"; 

}?>
<br>
<h3>Perulangan</h4>

<?php 
$x =1 ;
while ($x <= 5) {
	echo "The number is: $x<br>";
	$x++;
}
?>

<?php 
$x =1 ;
do {
	echo "The number is: $x<br>";
	$x++;
}while($x <= 5);
?>

<?php 
for ($x =0; $x <= 10; $x++){
	echo "The number is: $x <br>";
}?>

<?php 
$colors = array("red", "green", "blue","yellow");
foreach ($colors as $key => $value) {
	echo "$key => $value <br>";
}

$x = 10;
$y = 3;
//echo pow($x,$y)."<br>";
//$x += $y;
//echo $x;
var_dump(is_string("hello"));
echo "<br>";

var_dump($x==10 xor $y==3);


$text="hello";
$string="hello";

echo $text." ".$string;
$text.=" world";
echo "<br>".$text;






?>

</ol>
</body>
</html>