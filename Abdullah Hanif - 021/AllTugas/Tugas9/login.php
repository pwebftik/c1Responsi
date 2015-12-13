<?php

include("koneksi.php");
if($_POST){

	$user = $_POST["user"];
	$pass = $_POST["password"];
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE user = '$user' AND password = '$pass' LIMIT 1") or die(mysqli_error($conn));

	if(mysqli_num_rows($result)>0){
		$_SESSION['login'] = true;

		$_SESSION['user'] = mysqli_fetch_assoc($result);
		echo "<a href='admin.php'> Masuk Ke Halaman Admin </a>";
		die();
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	<table>
		<tr>
			<td> Username </td>
			<td> : </td>
			<td>
				<input type="text" name="user" placeholder = "Username">
			</td>
		</tr>
		<tr>
			<td> Password </td>
			<td> : </td>
			<td>
				<input type="password" name="password" placeholder = "Password">
			</td>
		</tr>
		<tr>
			<td colspan="3" align="right">
				<button> LOGIN ! </button> 
			</td>
		</tr>				
	</table>
</form>
</body>
</html>
