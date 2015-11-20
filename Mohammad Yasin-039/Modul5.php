<?php
	echo "Hay Guys My Name is Mohammad Yasin" . "<br>";
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

	echo "Jadi Jumlah huruf pada kalimat (My Name is Mohammad Yasin) adalah = ";
	echo strlen("My name is Mohammad Yasin")  . "<br>"; 

	echo "Jadi Jumlah kata pada kalimat (Saya tinggal di Jl.P.Bendahara) adalah = ";
	echo str_word_count("Saya tinggal di Jl.P.Bendahara ") ."<br>";

	echo "Kalimat ( Kasur ini rusak ) jika di balik akan menjadi = ";
	echo strrev(" rusak ini kasur") . "<br>";
	echo strpos("Mohammad Yasin", "Yasin") . "<br>";
	echo str_replace("Guys","All","Hay Guys My Name is Mohammad Yasin") . "<br>";

function writeMsg(){
	echo "Hay Guys " . "<br>";
}
function familyname($fname , $day, $month , $year){
	echo "$fname FTIK  Born in $day $month $year <br>";
}
familyname("Mohammad Yasin kuliah di Fakultas", "19" ,"Juli" , "1996");
familyname("Babul Arziqul kuliah di Fakultas", "7" ,"Oktober" , "1995");
familyname("Muhamad Eri kuliah di Fakultas", "11" ,"Februari", "1996") . "<br>";
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