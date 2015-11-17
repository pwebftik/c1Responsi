<html>
<head>
	<title>bab 6</title>
</head>
<body>
<h2 align="center">MODUL 6</h1>
<br>
<h3>Percabangan</h3>
<ol>
<li>IF Statement </li>
<?php 
$t = date("H");
if ($t < "20");{
	echo "Have a Good day!";
}?>

<li>if.... else statement</li>
<?php 
$t = date("H");
if ($t < "20"){
	echo "Have a Good day!";
} else {
	echo "Have a Good night!";
}?>

<li>if...elseif...else statement</li>
<?php 
if ($t < "10"){
	echo "Have a Good morning!";
} elseif ($t < "20"){
	echo "Have a Good day!";
} else {
	echo "Have a Good night!";
}?>
<li>Switch statement</li>
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
</ol><br>
<h3>Perulangan</h4>
<ol>
<li>While</li>
<?php 
$x =1 ;
while ($x <= 5) {
	echo "The number is: $x<br>";
	$x++;
}
?>

<li>do..while</li>
<?php 
$x =1 ;
do {
	echo "The number is: $x<br>";
	$x++;
}while($x <= 5);
?>

<li>for</li>
<?php 
for ($x =0; $x <= 10; $x++){
	echo "The number is: $x <br>";
}?>

<li>foreach</li>
<?php 
$color = array("red", "green", "blue","yellow");
foreach ($color as $value) {
	echo "$value <br>";
}



$x = 10;
$y = 3;
//echo pow($x,$y)."<br>";
//$x += $y;
//echo $x;
var_dump(is_string("hellow"));
echo "<br>";

var_dump($x==10 xor $y==3);
$text="hello";
$string="world";
echo $text." ".$string;
$text.=" world";
echo "<br>".$text;

?>

</ol>
</body>
</html>