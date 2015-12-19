<!-- Mendapatkan ID dari data yang dimasukkan -->

<?php
	include"Latihan8-1.php"
	//Membuat koneksi
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	//Memeriksa koneksi
	if (!$conn){ //jika tidak terkoneksi
		die("Connection failed: ". mysqli_connect_error());
	}
	
	//SQL untuk retrieve data
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
	('John', 'Doe', 'john@example.com')";
	if (mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
		echo "New record created successfully. Last inserted ID is: ".$last_id;
	}
	else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>