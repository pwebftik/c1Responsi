\<!DOCTYPE html>
<html>
<head>
	<title>Responsi Modul 5</title>
</head>
<body>
<?php 

#deklarasi variabel:
$a = 5 /* +15 */ + 14; #angka 15  tidak di jumlah karna termasuk komentar
$color = "merah";
$txt = "Bermain";
$nama = "PHP";
$x=4;
$z=$x/2;

#pembuatan Fungsi:
function Fungsi1() { //fungsi dasar
	echo "Ini fungsi pertama <br>"; 
}
function Fungsi2($marga){ //fungsi dengan satu argummen
	echo "(Nama depan) $marga <br>";
}

function Fungsi3($fnama, $tahun){ //fungsi dengan lebih dari satu argummen
	echo "Nama Saya : $fnama Lahir pada tahun $tahun <br>";
}

function setTinggi($tinggi = 150){ //Fungsi dengan nilai default
	echo "Tinggi saya : $tinggi meter <br>";
}

function sum($x, $y){//Fungsi sum atau penambahan
 	$z = $x + $y;
 	return $z;
 }





#output:
echo "Hello nama saya $nama umur saya $a saya sangat suka "  . $txt.   "! saya sekarang kelas:";
echo $x+$z."<br>"; #output dengan operasi aritmatika
echo "Jumlah huruf :";
echo strlen("Hello nama saya $nama umur saya $a saya sangat suka "  . $txt.   "! saya sekarang kelas:");
echo "<br>";
echo "Jumlah kata :";
echo str_word_count("Hello nama saya $nama umur saya $a saya sangat suka "  . $txt.   "! saya sekarang kelas:");
echo "<br>";
echo str_replace("Suges", "Bukan Suges", "Hello nama saya Suges");
echo "<br>";
echo "Jumlah huruf dari kata yang di pilih:";
echo strpos("Hallo semua", "semua");
echo "<br>";
echo "Ini adalah tulisan yang terbalik : ";
echo strrev("Tulisan ini terbalik");
echo "<br> <br>";


#Pemanggilan fungsi:
Fungsi1();

echo "<br>";

Fungsi2("Suges");
Fungsi2("Pramana");
Fungsi2("Aditya");

echo "<br>";

Fungsi3("Suges", "1996");
Fungsi3("Pramana","1997");
Fungsi3("Aditya","1998");

echo "<br>"; 

setTinggi(160);
setTinggi(); // Akan memanggil fungsi dengan nilai default
setTinggi(135);
setTinggi(190);

echo "<br>"; 

echo "Hasil dari 9 + 10 adalah " . sum(9, 10) . "<br>"; 
echo "Hasil dari 100 + 1000 adalah " . sum(100, 1000) . "<br>"; 
echo "Hasil dari 50000 + 1000000 adalah " . sum(50000, 1000000) . "<br>"; 
 ?>
</body>
</html>