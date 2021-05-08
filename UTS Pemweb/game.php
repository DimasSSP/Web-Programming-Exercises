<?php

include 'dbconnect.php';

session_start();

$jawaban = $_SESSION['rand1'] + $_SESSION['rand2'];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "leaderboard";
$dbtable = "lead";
$nama = $_SESSION['namauser'];
$skor = $_SESSION['skor'];

echo "<title>GAME MATEMATIKA</title>";
echo "<center><h3>Hallo, ".$_COOKIE['namauser']."</h3>";
echo "<h3>Tetap Semangat ya... You can do the best!!!</h3>";


	
echo "<form method='post'>";
	if (!isset($_POST['submit'])) {
		echo "Lives : ".$_SESSION['lives']." | Score : ".$_SESSION['skor']."<br>";
		echo "<br>Berapakah hasil dari ".$_SESSION['rand1']." + ".$_SESSION['rand2']." ???<br> ";
		echo "<input type='text' name='input'><br>
		<input type='submit' name='submit' value='jawab'></form>";
	}else {
		$tebakan = intval($_POST['input']);

		if ($tebakan == $jawaban) {
			echo "Selamat ".$_SESSION['namauser'].", jawaban kamu BENAR !!!<br>" ;
			$_SESSION['skor'] += 10;
			echo "Lives : ".$_SESSION['lives']." | Score : ".$_SESSION['skor']."<br>";
			echo "<a href='game.php'><button>Soal Selanjutnya</button></a>";
		}else{
			echo "Yahh... Jawaban Kamu SALAH !!!<br>";
			$_SESSION['lives'] -= 1;
			$_SESSION['skor']  -= 2;
			echo "Lives : ".$_SESSION['lives']." | Score : ".$_SESSION['skor']."<br>";

			if ($_SESSION['lives'] < 1) {
				echo "<p style='color:red'> Hello,".$_COOKIE['namauser']." Sayang sekali permainan telah selesai.<br> Semoga lain kali bisa lebih baik :) </p>";
				echo "Skor kamu : ".$_SESSION['skor']."";
				echo "<br><a href='index.php'><button>Main lagi</button></a><br>";
				echo "<br>Lihat <a href='leaderboard.php'>Leaderboard</a><br>";
				echo "<br>Tekan tombol untuk keluar<br> <a href='logout.php'><button>Logout</button></a>";
			} else {
				echo "<br><a href='game.php'><button>Soal Selanjutnya</button></a>";
			}
		}

		$_SESSION['rand1'] = random_int(0, 20);
		$_SESSION['rand2'] = random_int(0, 20);
		
		if ($_SESSION['lives'] < 1) {
			inputData($dbhost, $dbuser, $dbpass, $dbname, $dbtable, $nama, $skor);
			$_SESSION['lives'] = 5;
			$_SESSION['skor'] = 0;
		}
	}



?>