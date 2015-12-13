<?php
include 'koneksi.php';

if(isset($_SESSION['login']) && $_SESSION['login']){
	$user=$_SESSION['user'];
	echo 'anda adalah user yang telah login dengan username '.$user['username'];
	echo '<br> <a href="logout.php">LOGOUT</a>';
}
else {
	echo 'pergi sana pencuri';
}

?>


<?php if(isset($_SESSION['login']) && $_SESSION['login']) : ?>
<?php $user = $_SESSION['user'];?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href ="logout.php">logout</a>
</body>
</html>

<?php else : ?>
pergi sana
<?php endif ?>