<?php
	echo "Hay Guys My Name is Abdullah Hanif" . "<br>";
	$x=5 /* + 15 */ + 5;
	echo $x . "<br>";
$maskapai = "Garuda Indonesia";
	echo "Saya berangkat menuju Banjarmasin dengan menaiki pesawat " . $maskapai . "<br>";
	echo "Pesawat " . $maskapai ." itu mengalami kerusakan pada bagian mesin" . "<br>";
	echo "Pesawat " . $maskapai ." adalah pesawat favorite keluarga kami" . "<br>";
$txt = "MULAWARMAN";
	echo " Saya adalah mahasiswa di universitas $txt" . "<br>";
	echo "<br>";

$x = 5 ;
$y = 4 ;
	echo "Jadi jumlah pertambahan 4 + 5 adalah = ";
	echo $x+$y . "<br>";

	echo "Jadi Jumlah huruf pada kalimat (My Name is Abdullah Hanif) adalah = ";
	echo strlen("My name is Abdullah Hanif")  . "<br>"; 

	echo "Jadi Jumlah kata pada kalimat (Saya tinggal di Jl.Damai Gg.WIA Sejahtera) adalah = ";
	echo str_word_count("Saya tinggal di Jl.Damai Gg.WIA Sejahtera ") ."<br>";

	echo "Kalimat ( Kasur ini rusak ) jika di balik akan menjadi = ";
	echo strrev(" kasur ini rusak") . "<br>";
	echo strpos("Abdullah Hanif", "Hanif") . "<br>";
	echo str_replace("Guys","All","Hay Guys My Name is Abdullah Hanif") . "<br>";

function writeMsg(){
	echo "Hay Guys " . "<br>";
}
function familyname($fname , $day, $month , $year){
	echo "$fname FTIK  Born in $day $month $year <br>";
}
familyname("Abdullah Hanif kuliah di Fakultas", "02" ,"November" , "1996");
familyname("Suges Pramana kuliah di Fakultas", "27" ,"Juli" , "1995");
familyname("Wong Richard kuliah di Fakultas", "22" ,"Februari", "1996") . "<br>";
	echo "<br>";

function warna($warnakesukaan = "Red")
{
	echo "Warna kesukaan Anda adalah : $warnakesukaan <br>";
}

	warna("Blue");
	warna("Black");
	warna();
	warna("White");
	warna("Green");



function sum($x, $y){
	$z = $x + $y;
	return $z;
}
echo "<br>";
echo "10 +17 = " . sum(10,17) . "<br>";
echo "6 +15 = " . sum(6,15) . "<br>";
echo "53 +1 = " . sum(53,1);


?>
