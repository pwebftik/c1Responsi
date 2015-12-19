<!-- Hapus Data -->

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";
	
	//Membuat koneksi
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	//Memeriksa koneksi
	if (!$conn){ //jika tidak terkoneksi
		die("Connection failed: ". mysqli_connect_error());
	}
	
	//SQL untuk menghapus sebuah record
	$sql = "DELETE FROM MyGuests WHERE id=3";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_query($conn, $sql)){
		echo "Record deleted successfully.";
	}
	else {
		echo "Error deleting record: ".mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>