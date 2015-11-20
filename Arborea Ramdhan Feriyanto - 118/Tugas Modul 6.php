<?php 

	$t = date("H");
	if ($t<"20") {
		echo "Have a good day";
	}

	$y = date("H");
	if ($y<"20") {
		echo "Have a good day";
	} else  {
		echo "Have a good night";
	}

	$y = date("H");
	if ($y<"10") {
		echo "Have a good morning";
	} else if ($t < "20") {
		echo "Have a good day";
	} else  {
		echo "Have a good night";
	}

	$fav = "red";

	switch ($fav) {
		case "red":
			echo "your fav is red";
			break;
		case "blue":			
			echo "your fav is blue";
			break;
		case "green" :			
			echo "your fav is green";
			break;		
		default:			
			echo "pokoknya di antara mereka lah";
			break;
	}

	$x = 1;
	while ($x<=5) {
		echo "the number is : $x <br>";
		$x++;
	}

	$y = 1;
	do{
		echo "the number is : $y <br>";
		$x++;
	}while ($x<=5);

	for ($s = 0; $s <= 10; $s++){
		echo "the number is $s <br>";
	}

//	$color = array("red","green","blue","yellow");
	$color = ["merah"=>"red","green","blue","yellow"];
	foreach ($color as $value) {
		echo "$value <br>";
	}

	$x = 10;
	$y = 3;
	// echo pow($x,$y)."<br>";
	// $x += $y;
	// echo $x;
	var_dump(is_string("Hello"));
	echo "<br>";

	var_dump($x==10 xor $y==3);

	$text="hello";
	$string="world";

	echo $text." ".$string;
	$text.=" world";
	echo "<br>".$text;















 ?>