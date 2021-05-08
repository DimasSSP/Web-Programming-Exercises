<?php

	session_start();
	session_destroy();
	setcookie("namauser",$_POST['nama'],time()+0,"/");
	setcookie("email",$_POST['email'],time()+0,"/");
	//menghapus cookie yang sudah ada sebelumnya

	header("Location: Index.php")
	//melemparkan ke index.php untuk login kembali
?>