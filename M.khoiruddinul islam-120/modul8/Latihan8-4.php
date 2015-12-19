<!-- Memasukkan data pada tabel -->

<?php
	include"Latihan8-1.php"
	
	//Membuat koneksi
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	//Memeriksa koneksi
	if (!$conn){ //jika tidak terkoneksi
		die("Connection failed: ". mysqli_connect_error());
	}
	
	//SQL untuk mengisi data
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
	('John', 'Doe', 'john@example.com')";
	if (mysqli_query($conn, $sql)){
		echo "New record created successfully.";
	}
	else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>