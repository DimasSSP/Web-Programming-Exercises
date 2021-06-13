<?php  
$host = "localhost";
$username = "root";
$password = "";
$database = "pertemuan14";
$koneksi = mysqli_connect($host, $username, $password, $database);
if (mysqli_connect_errno()){
	echo "Koneksi Database Gagal : " . mysqli_connect_error();
}
?>