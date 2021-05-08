<?php
	
	include 'Cek.php';

	session_start();

	echo "<title>GAME MATEMATIKA</title>";
	echo "<center><h3>Hallo, ".$_SESSION['namauser']."!</h3>" ;
	echo "<center><h3>Selamat datang kembali ke Permainan ini !!!</h3>";

	echo "<a href='game.php'><button> Start Game </button></a><br>";
	echo "<p>Bukan akun anda? <a href='logout.php'> Keluar</a></p></center>";
?>