<?php // Membuat koneksi dengan config.php 
include_once("config.php"); 

 // Fetch semua mahasiswa dari DB 
$result = mysqli_query($mysqli, "SELECT * FROM karyawan ORDER BY id DESC"); 
?> 
 
<html> 
<head>         
	<title>Homepage</title> 
    <style type="text/css">
        body{
            font-family: sans-serif;
            background: #d5f0f3;
        }
        table{
            background: white;
            text-shadow: 1px 1px 0px #fff;
            border: #ccc 1px solid;
        }
        table th {
            padding: 15px 35px;
            border-left: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            background: #ededed
        }
        table td {
            padding: 15px 35px;
            border-top: 1px solid #ffff;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            background: #fafafa
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

    </style>
</head> 
 
<body> 

    <center>
    <table  cellspacing="0"> 
        <h1>Data Karyawan</h1>

        <tr>
            <th>Nama</th> 
            <th>Email</th> 
            <th>Telepon</th> 
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>     
            <th>Update</th>
        </tr>

        <?php       

        while($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";         
            echo "<td>".$user_data['nama']."</td>";         
            echo "<td>".$user_data['email']."</td>";         
            echo "<td>".$user_data['telepon']."</td>";
            echo "<td>".$user_data['alamat']."</td>";
            echo "<td>".$user_data['jenis_kelamin']."</td>";
            echo "<td>".$user_data['tempat_lahir']."</td>";
            echo "<td>".$user_data['tanggal_lahir']."</td>";    
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";         
        }     
        ?>
    </table> 
    <br><br>
    <a href="tambah.php" class="tombol">Tambah Data Karyawan</a><br/>
</center>

	
</body> 
</html>