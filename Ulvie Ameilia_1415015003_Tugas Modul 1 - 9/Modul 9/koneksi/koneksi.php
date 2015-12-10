<?php
session_start();

$host='localhost';
$user='root';
$pass='';
$dbnm='praktikum_pw';
//melakukan koneksi
$con=mysqli_connect($host,$user,$pass,$dbnm);
//cek koneksi berhasil atau tidak
if(!$con){
	die('koneksi gagal dan errornya adalah : '.mysqli_connect_error());
	//bisa pake die atau exit
}
// function sql_query($query) 
// {
// 	$con=mysqli_connect($host,$user,$pass,$dbnm);
// 	return mysqli_query($con,$query);
// }
//sql_query("SELECT * FROM user");
//untuk menampilkan isi tabel database

?>