<?php 
#percabangan :
echo "Pengingat anak kost :<br>";
$t = date(d);

if ($t < "10") {
	echo "Anda dapat makan enak";
}

elseif ($t < "20") {
	echo "Anda harus mulai berhemat";
}
else {
	echo "Anda harus beli promag";
}
echo "<br> <br>";
echo "Menentukan awal bulan atau bukan : <br>";
$b = date(M);

switch ($b) {
	case '1':
		echo "Ini awal bulan";
		break;
	default:
		echo "Ini bukan awal bulan";
		break;
}
echo "<br> <br>";echo "<br> <br>";
#perulangan
#while:
$x = 1;
	echo "ini fungsi while dari 1-5<br>";
while ($x <= 5) {

	echo "The number is : $x <br>";
	$x++;
}
#do while:
echo "<br> <br>";echo "<br> <br>";
$z=5;
echo "ini fungsi do while <br>";
do {
	
	echo "The number is : $z <br> ";
	$z--;
} while ($z >= 0);

#for
echo "<br> <br>";echo "<br> <br>";
echo "ini fungsi for <br>";
for ($i=0; $i <= 10 ; $i++) { 
	
	echo "The number is : $i <br>";
}

#foreach
echo "<br> <br>";echo "<br> <br>";
$color = array("red","green","blue","yellow" );
//$color = ["red","green","blue","yellow"];
echo "Ini fungsi perulangan foreach<br>";
//foreach ($color as $value ) {
foreach ($color as $value ) {	
	echo "$value <br>";
}
$e=10;
$r=3;
//echo pow($e,$r)."<br>";
//echo $e % $r. "<br>" ;
//$e += $r;
//echo $e ;
var_dump($e==11 xor $r==3);
var_dump(is_string(12));
//var_dump(! is_string("hai"));
echo "<br>" . $e--;

$teks ="Hello";
$string="world";
echo $teks.$string;



 ?>