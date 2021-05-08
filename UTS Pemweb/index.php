<?php

	//jika sudah ada cookie username maka diforward langsung ke halaman Home//
	if (isset($_COOKIE['namauser'])) {
		header("Location: Home.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<style type="text/css">
	.judul{
		text-transform: uppercase;
		padding-top: 20px;
		padding-bottom: 20px
	}
	
	.card {
    width: 350px;
    box-shadow: 0 3px 3px 0 rgba(34, 31, 31, 0.33), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
}

</style>
<body>
	<center>
		<div class="judul">
			<h2>Selamat Datang di Game Matematika</h2>
		</div>
		

		<div class="card">
		    <form action="sistem.php" method="POST">
		    	<fieldset>
		    		<legend>Silahkan Login dulu ya</legend><br>
		    		Masukan Nama:<br>
			      	<input type="text" name="namauser" placeholder="username">
			      	<br><br>
			      	Masukan Email Anda:<br>
			      	<input type="text" name="emailuser" placeholder="password">
			      	<br><br>
			      	<input type="submit" name="submit" value="Submit">
		    	</fieldset>
		    	
		    </form> 
		</div>

	</center>
</body>

</html>