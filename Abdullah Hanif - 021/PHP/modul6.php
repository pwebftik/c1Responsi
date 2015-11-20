<?php

echo " PERCABANGAN" ."<br>". "<br>";
$t = date("H");

if ($t < 10) {
	echo "Have a good morning !";
}
elseif ($t < "20") {	
	echo "Have a good day !";
}
else {
	echo "Have a good night !";
}
	echo "<br>";



$jenisfilm = "Action";

switch ($jenisfilm) {
	case "Action" :
		echo " Jenis Film Favorit Anda Adalah Action ";
	break;
	case "Comedy" :
		echo " Jenis Film Favorite Anda Adalah Comedy ";
	break;
	case "Horor" :
		echo " Jenis Film Favorite Anda Adalah Horor";
	break;
	default;
		echo " Jenis Film Favorite Anda Adalah Action , Comedy , Horor ";
}
	echo "<br>" . "<br>";
echo " PERULANGAN" . "<br>" . "<br>";
$x = 1;

while ($x <= 5) {
	echo "Nomor ini adalah : $x <br>" ;
	$x++;
}
	echo "<br>" ."<br>";

$x = 1;
do {
	echo "Nomor ini adalah : $x <br>" ;
	$x++;
} while ( $x <= 5);

	echo "<br>" . "<br>";

for ($x = 24; $x >= 1; $x--) {
	echo "Nomor ini adalah : $x <br>";
}
for ($x = 2; $x <=24 ; $x++) {
	echo "Nomor ini adalah : $x <br>";
}

	echo "<br>"."<br>";
//$judulfilm = array ("Sword Art Online", "The Law of Ueki", "Fullmetal Alchemist","One Piece","Fairy Tail");
$judulfilm = ["Sword Art Online","The Law of Ueki", "Fullmetal Alchemist","One Piece","Fairy Tail"];
foreach ($judulfilm as $key=> $value) {
	echo "$key => $value <br>";
}
$x = 100;
$y = 9;

echo pow($x,$y) . "<br>";
echo $x%$y. "<br>";
$x += $y;
echo $x . "<br>";
var_dump($x!==$y) ;
echo "<br>"; 
var_dump(is_string(10));
echo "<br>";
$text="Abdullah";
$string="Hanif";

echo $text." ".$string;


?>
