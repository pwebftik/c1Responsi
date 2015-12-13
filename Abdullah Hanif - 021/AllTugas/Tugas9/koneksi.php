<?php

	session_start();

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbnm = "login";


	// Melakukan Koneksi
	$conn = mysqli_connect($host,$user,$pass,$dbnm);

	// Cek Kondisi Berhasil atau Tidak

	if(!$conn) {
		exit("Koneksi gagal dan errornya adalah : " .mysqli_connect_error());
	}

?>