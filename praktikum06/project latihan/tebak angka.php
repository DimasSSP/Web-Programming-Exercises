<?php

include('login.php');

if (!isset($_SESSION['namauser'])){
	echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
	echo "<p><a href='form.html'>Login</a> dulu ya..</p>";
	exit();
} 

$random = rand(0,100);
$output = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$random = $_POST['angka'];
	$tebakan = $_POST['tebakan'];
	if ($random == $tebakan){
	$output = "Selamat ya… Anda benar, saya telah memilih bilangan $random <br><a href='tebak angka.php'>(Ulangi Lagi)</a>";
	} elseif ($random < $tebakan) {
		$output = "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi";
	} else {
		$output = "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Program Tebak Angka</title>
</head>
<body>
	<center>
	<?php echo "<h3>Selamat datang ".$_SESSION['namauser'].", nama saya Mr. PHP. <br>Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</h3>";
	?>
	<!-- <?php echo $a ?> -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div>
			<input type="hidden" name="angka" value="<?php echo $random ?>">
			<input type="number" name="tebakan" placeholder="Tebak angka">
			<input type="submit" name="cek" value="Cek"><br>
			<span class="help-block <?php echo (!empty($output)) ? 'has-error' : ''; ?>"><?php echo $output;?></span>
		</div><br>
			<a href="logout.php">Logout</a>
	</center>
</body>
</html>