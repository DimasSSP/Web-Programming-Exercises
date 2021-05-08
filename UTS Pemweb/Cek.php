<?php

	if (!isset($_COOKIE['namauser'])) {
		echo "Kamu belum Login pada game ini <br>";
		echo "<a href='index.php'>Login dulu yuk!!!";

		exit();
	}

?>