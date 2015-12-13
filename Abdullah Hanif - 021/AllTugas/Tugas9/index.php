<?php
#1.koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "connect";
$con = mysqli_connect($host,$user,$pass,$db_name);
if (!$con) {
	die('Koneksi gagal, kegagalannya :'.mysqli_connect_error());
}
echo "Koneksi berhasil<br>";

#menampilkan data 
$sql = "SELECT * FROM user ";
$query = mysqli_query($con,$sql);
while ($data = mysqli_fetch_assoc($query)){
	echo $data['username']."|".$data['password'] . "|"."|".$data['nama']."<br>";
}

?>