<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
			background: #d5f0f3;
		}
		 
		h1{
			text-align: center;
			font-weight: 300;
		}
		 
		.judul{
			text-align: center;
			text-transform: uppercase;
		}
		 
		.kotak_tambah{
			width: 350px;
			background: white;
			margin: 80px auto;
			padding: 30px 20px;
		}
		 
		label{
			font-size: 11pt;
		}
		 
		.form_data{
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		 
		.tombol{
			background: #46de4b;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}
		 
		.link{
			color: #232323;
			text-decoration: none;
			font-size: 10pt;
		}
		.notice{
			text-transform: uppercase;
		}
	</style>
</head>
<body>
 
	<h1>Tambah Data Karyawan</h1>
 
	<div class="kotak_tambah">
		<p class="judul">Masukan Data</p>
 
		<form action="tambah.php" method="post" >
			<label>Nama</label>
			<input type="text" name="nama" class="form_data" placeholder="nama" required="">

			<label>Email</label>
			<input type="email" name="email" class="form_data" placeholder="email" required="">

			<label>No Telepon</label>
			<input type="number" name="telepon" class="form_data" placeholder="08***" >

			<label>Alamat</label>
			<input type="text" name="alamat" class="form_data" placeholder="alamat" required="">

			<label>Jenis Kelamin</label>S
			<select type="text" name="jenis_kelamin" class="form_data" required="">
				<option>Pria</option>
				<option>Wanita</option>
			</select>

			<label>Tempat Lahir</label>
			<input type="text" name="tempat lahir" class="form_data" placeholder="tempat lahir" required="">

			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" class="form_data" placeholder="tanggal lahir" required="">
 
			<input type="submit" name="Submit" class="tombol" value="Tambah">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>

	 <?php  
    // Cek apakah ada parameter $_POST yang terisi, jika iya masukkan dalam DB.     
    if(isset($_POST['Submit'])) { 
    $nama = $_POST['nama'];         
    $email = $_POST['email'];         
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat']; 
    $jenis_kelamin = $_POST['jenis_kelamin']; 
    $tempat_lahir = $_POST['tempat_lahir']; 
    $tanggal_lahir = $_POST['tanggal_lahir'];  
    
    // include database          
    include_once("config.php"); 

    // Insert data         
    $result = mysqli_query($mysqli, "INSERT INTO karyawan(nama,email,telepon,alamat,jenis_kelamin,tempat_lahir,tanggal_lahir) VALUES('$nama','$email','$telepon','$alamat','$jenis_kelamin','$tempat_lahir','$tanggal_lahir')"); 

    // Menampilkan data telah berhasil 
    echo "<center>";
    echo "<p class='notice' >Karyawan berhasil ditambahkan! <a href='index.php'>Lihat Data</a></center><br><br>"; 


}     
?> 
 
 
</body>
</html>