<?php
// if statement:
$t = date("H");
if ($t < "20"){
	echo "Have a good day!";
	
}
// if... else statement:
$t = date ("H");
if ($t < "20") {
	echo "Have a good day!";
	}else{
		echo " Have a good night!";
}
// if elseif else statement;
$t = date("H");
if ($t < "10"){
	echo "Have a good morning!";
	}elseif ($t < "20"){
		echo "Have a good day!";
	}else{
		echo "Have a good night!";
		
}
//Swict statement:
$favcolor = "red";
switch ($favcolor){
	case "red":
	echo "Your favorite color is red!";
	break;
	
	case "blue";
	echo "Your favorite color is blue!";
	break;
	
	case "green";
	echo "Your favorite color is green!";
	break;
	
	default:
	echo "Your favorite color is neither red,blue,nor green!";
}
//perulangan
//while:
$x = 1;
while($x <= 5){
	echo "The number is: $x <br>";
	$x++;
}
//do... while:
$x = 1;
do{
	echo "The number is: $x <br>";
	$x++;
	
}while ($x <=5);
?>
<?php
//for:
for ($x =0; $x <= 10; $x++){
	echo"The number is: $x <br>";
	
}
//foreach:
$colors = array("red","green", "blue","yellow");
foreach ($colors as $value){
	echo "$value <br>";
}
// sissa bagi
 $x=10;
 $y=3;
 echo $x%$y."<br>";

 
//penambahan diri:
 $x += $y;
echo $x."<br>";
// operator logika;
var_dump($x==$y);
// fungsi notasi not(!)TAU INSVERS akan membalikan nilai :
var_dump($x!==$y);


var_dump(is_string("hello"));
// PRE-INCREMENT:
echo "<br>".++$x;

var_dump($x==10 xor $y==4);

$text="hello";
$string="world";
echo"<br>". $text.$string;
$text.="world";
echo "<br>".$text;
?>

