<?php
#1.koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "praktikum_pw";
$con = mysqli_connect($host,$user,$pass,$db_name);
if (!$con) {
	die('Koneksi gagal, kegagalannya :'.mysqli_connect_error());
}
echo "Koneksi berhasil<br>";
#cek di : localhost/koneksi/
#atau cek di : localhost/koneksi/index.php

#4. dan 6.
//$sql = "INSERT INTO user (username,password,nama)
//VALUES ('ulvie','lia','lia'),('aku','aku','aku')";
//$query = mysqli_query($con,$sql);
//if($query){
//	echo "berhasil tambah data";
//}
//else {
//	echo "Gagal menambahkan data".mysqli_error($con);
//}

#menampilkan data 
$sql = "SELECT *FROM user ";
$query = mysqli_query($con,$sql);
while ($data = mysqli_fetch_assoc($query)){
	echo $data['username']."|".$data['password']."|"."|".$data['nama']."<br>";
}

?>