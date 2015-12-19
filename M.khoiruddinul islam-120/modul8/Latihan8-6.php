<!-- Eksekusi Banyak Query -->

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
	
	//SQL untuk retrieve data
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
	('John', 'Doe', 'john@example.com')";
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
	('Mary', 'Moe', 'mary@example.com')";
	$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
	('Julie', 'Dooley', 'julie@example.com')";
	
	if (mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
		echo "New records created successfully.";
	}
	else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>