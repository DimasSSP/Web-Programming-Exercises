<?php

	session_start();

	if (isset($_POST['namauser'])) {
		$_SESSION['namauser'] = $_POST['namauser'];
		$_SESSION['lives'] = 5;
		$_SESSION['skor'] = 0;
		$_SESSION['rand1'] = random_int(0, 20);
		$_SESSION['rand2'] = random_int(0, 20);

		//men-set cookie selama 3 bulan
		setcookie("namauser",$_POST['namauser'],time()+60*60*24*30*3,"/");
		
		//melanjutkan ke halaman utama
		header("Location: Home.php");
	}

?>