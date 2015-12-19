<!-- Koneksi Database -->

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname='myDB';
	//Membuat koneksi
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	//Memeriksa koneksi
	if (!$conn){ //jika tidak terkoneksi
		die("Connection failed: ". mysqli_connect_error());
	}
	echo "Connected successfully";
?>