<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Percabangan</h1>
<br>
<?php
	$t = date("H");
	if ($t < "20"){
		echo "Have a Good Day! <br> <br>";
	}

	$t = date("H");
	if ($t < "10"){
		echo "Have a Good Day! <br> <br>";
	} else{
		echo "Have a Good Night!";
	}

	$t = date("H");
	if ($t < "10"){
		echo "Have a Good Morning! <br> <br>";
	} elseif ($t < "20") {
		echo "Have a good day!";
	} else{
		echo "Have a good Night!";
	}

$favcolor = "blue";

switch ($favcolor){
	case 'red':
		echo "Your favorite color is red!";
		break;
	case 'blue':
		echo "Your favorite color is blue";
		break;
	case 'green':
		echo "Your favorite color is green";
		break;
	default:
		echo "Your favorite color is neither red, blue, green!";
	}
	echo "<h1> Perulangan </h1> <br>";

	$x = 1;
	while ($x <= 5) {
		echo "The Number is: $x <br>";
		$x++;
	}
	echo "<br>";

	$x = 1;
	do {
		echo "Nomornya adalah: $x <br> ";
		$x++;
	} while ($x <= 5);
	echo "<br>";

	for ($x=0; $x <= 10; $x++) { 
		echo "Nomor ini: $x <br>";
	}
	echo "<br>";

	$colors = array("red", "green", "blue", "yellow");
	foreach ($colors as $value) {
		echo "$value <br>";
	}
	$x =10;
	$y =3;
	echo pow ($x,$y)."<br>";
	$x +=$y;
	echo $x;
	var_dump(is_string("Hello"));
	echo "<br>".++$x;
	var_dump ($x== 10 xor $y==4);
	$text="hello";
	$string="world";
	echo $text." ".$string;
	$text.="world";
	echo "<br>".$text;
?>
</body>
</html>