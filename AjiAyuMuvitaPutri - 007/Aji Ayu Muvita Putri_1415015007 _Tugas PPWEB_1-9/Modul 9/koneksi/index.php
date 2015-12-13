<?php
	#1. koneksi data
	$host="localhost";
	$user="root";
	$pass="";
	$db_name="db_praktikumweb";
	$con=mysqli_connect($host,$user,$pass,$db_name);
	if (!$con){
		die ('Koneksi gagal bro, kegagalan : '. mysqli_connect_error());
	}
	echo "Koneksi berhasil bro<br>";
	#cek di : localhost/koneksi/
	#atau cek di : localhost/koneksi/index.php

	#4 dan 6
	//$sql="INSERT INTO user (username,password,nama)VALUES('Ayu','Ayu','Ayu mp'),('saya','saya','sa ya')";
	//$query=mysqli_query($con,$sql);
	//if($query) {
	//	echo "berhasil tambah data";
	//} else {
	//	echo "Gagal menambah data" . mysqli_error($con);
	//}

	#
	$sql = "SELECT *FROM user";
	$query=mysqli_query($con,$sql);
	while ($data = mysqli_fetch_assoc($query)) {
		echo $data['username']."|".$data['password']."|"."|".$data['nama']."<br>";
	}

?>