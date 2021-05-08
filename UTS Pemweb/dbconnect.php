<?php

	function inputData($dbhost, $dbuser, $dbpass, $dbname, $dbtable, $nama, $skor) {

		$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		$query = "INSERT INTO $dbtable (nama, skor) VALUES ('$nama', '$skor')";

		
		if (mysqli_query($connect, $query)) {
			echo "<script>console.log('Data Telah Diinput')</script>";
		} else {
			$error = mysqli_error($connect);
			die("<script>console.log('Data berikut gagal diinput : '.{$err});</script>");
		}

		
		mysqli_close($connect);
	}

	function tampilLead($dbhost, $dbuser, $dbpass, $dbname, $dbtable) {
		$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		$query = "SELECT * FROM {$dbtable} ORDER BY skor DESC LIMIT 10";
		$index = 1;
		$isi = mysqli_query($connect, $query);
		if (mysqli_num_rows($isi) > 0) {
			echo "<center>
					<table border='1' style='width:500px'>
						<caption><h1>HALL OF FAME</h1></caption>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Score</th>
						</tr>";
			while ($row = mysqli_fetch_assoc($isi)) {
				echo "
						<tr>
							<td>$index</td>
							<td>{$row['nama']}</td>
							<td>{$row['skor']}</td>";
				$index++;
			}
			echo "</table></center>";

		}
		mysqli_close($connect);
	}
	
	
?>