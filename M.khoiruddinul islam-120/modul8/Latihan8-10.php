<!-- Ubah Data -->

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
	
	$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_query($conn, $sql)){
		echo "Record updated successfully.";
	}
	else {
		echo "Error updating record: ".mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>