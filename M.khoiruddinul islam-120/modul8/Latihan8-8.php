<!-- Select Data -->

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
	
	$sql = "SELECT id, firstname, lastname FROM MyGuests";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		//output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		echo "id: ".$row["id"]." - Name: ".$row["firstname"]." ".$row["lastname"]."<br>";
		}
	}
	else {
		echo "0 results";
	}
	
	mysqli_close($conn);
?>