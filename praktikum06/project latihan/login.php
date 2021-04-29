<?php
session_start();

// daftar users
$users = array(
			array("username1", "Rosihan Ari Yuana", "123456"),
			array("username2", "Dwi Amalia Fitriani", "654321"),
			array("username3", "Faza Fauzan Khosyiyarrohman", "112233"),
			array("username4", "Dimas Satria Sandi Pradana", "1234")
		 );

// jika form login sudah submitted
if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	// proses pengecekan ada tidaknya username dan password 
	// dalam daftar user
	foreach ($users as $profile_user) {
		if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
			// jika ada yg match maka bikin session untuk simpan nama user
			$_SESSION['namauser'] = $profile_user[1];
			// mengeset cookie username dari namanya, lama cookie 3 bulan
			setcookie("username", $_SESSION['namauser'], time()+3*30*24*3600,"/");
			header("Location: tebak angka.php");
		}
	}

	// jika tidak ada username dan password yg match
	echo "<h3>Username atau password salah</h3>";
	echo "<p>Silakan <a href='form.html'>login kembali</a></p>";
}

?>
