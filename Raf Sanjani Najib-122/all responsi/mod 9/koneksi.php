<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "db_praktikum";
	$con = mysql_connect($host,$user,$pass,$db_name);
	if(!$con){
		die('Koneksi Gagal, kegagalannya :'. mysqli_connect_error());
	}
	echo "koneksi berhasil<br>";
	//$sql = "INSERT INTO user (username,password,nama) VALUES ('Raffsn','raff','Raffsn')";
	//$query = mysqli_query($con,$sql);
	//if($query){
	//	echo "berhasil tambah data";
	//}else{
	//	echo "Gagal menambahkan data".mysqli_error($con);
	//}
	$sql = "SELECT * FROM user";
	$query = mysqli_query($con,$sql);
	while ($data = mysqli_fetch_assoc($query)) {
		echo $data['username']
	}
	?>