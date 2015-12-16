<?php
include('koneksi.php');
if($_POST){
	//jalan perintah di dalam sini
$user=$_POST['user'];
$pass=$_POST['password'];
$result= mysqli_query($con,"SELECT * FROM user WHERE username = '$user' AND password = '$pass'")or die(mysqli_error($con));
if(mysqli_num_rows($result)>0){
	$_SESSION['login']=true;
	//SESSION adalah yang cara untuk melempar ke package yang lain dengan menggunanakan start session dan include
	$_SESSION['user']=mysqli_fetch_assoc($result);
	echo "<a href='admin.php'>Masuk ke halaman admin</a>";
	die();
}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>lOGIN DISINI WOYYY!!!!</title>
</head>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>
				<input type="text" name="user" placeholder="Username">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>
				<input type="password" name="password" placeholder="Password">
			</td>
		</tr>
		<tr>
			<td colspan="3" align="right">
				<button>LOGIN!</button>
			</td>
			
		</tr>
	</table>
</form>
</body>
</html>