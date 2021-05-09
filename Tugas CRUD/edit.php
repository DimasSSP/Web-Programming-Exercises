<?php
// include database  
include_once("config.php"); 
 
// Cek apakah parameter $_POST terisi, update data jika iya 
if(isset($_POST['update'])) {        
    $id = $_POST['id']; 
    $nama =$_POST['nama'];     
    $telepon=$_POST['telepon'];     
    $email=$_POST['email']; 
    $alamat = $_POST['alamat']; 
    $jenis_kelamin = $_POST['jenis_kelamin']; 
    $tempat_lahir = $_POST['tempat_lahir']; 
    $tanggal_lahir = $_POST['tanggal_lahir']; 
 
    // update  data     
    $result = mysqli_query($mysqli, "UPDATE karyawan SET nama='$nama',email='$email',telepon='$telepon',alamat='$alamat',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir' WHERE id=$id"); 
 
    // Redirect kembali ke halaman utama     
    header("Location: index.php"); 
}
?> 
    <?php 
    // Mengambil ID dan menampilkan data berdasarkan ID yang didapat 
    $id = $_GET['id']; 

    // Fetch user data  
    $result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id=$id"); 

    while($user_data = mysqli_fetch_array($result)) {     
    $nama = $user_data['nama'];     
    $email = $user_data['email'];     
    $telepon = $user_data['telepon'];
    $alamat = $user_data['alamat']; 
    $jenis_kelamin = $user_data['jenis_kelamin']; 
    $tempat_lahir = $user_data['tempat_lahir']; 
    $tanggal_lahir = $user_data['tanggal_lahir'];  
} 
?> 

<html> 
<head>       
    <title>Edit Data Mahasiswa</title> 
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
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
        }

        .link{
            background-color: white;
            color: #232323;
            text-decoration: none;
            font-size: 10pt;
        }

    </style>
</head> 
 
<body>
    <center>

    <br/><br/> 
 
    <form name="update" method="post" action="edit.php">         
        <table border="0">             
            <tr>                  
                <td>Name</td>                 
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>             
            </tr>             
            <tr>                  
                <td>Email</td>                 
                <td><input type="text" name="email" value=<?php echo $email;?>></td>             
            </tr>             
            <tr>                  
                <td>Telepon</td>                 
                <td><input type="text" name="telepon" value=<?php echo $telepon;?>></td>             
            </tr>   
            <tr>                  
                <td>Alamat</td>                 
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>             
            </tr>   
            <tr>                  
                <td>Jenis Kelamin</td>                 
                <td><select type="text" name="jenis_kelamin">
                    <option>Pria</option>
                    <option>Wanita</option>
                </select>             
            </tr>
            <tr>                  
                <td>Tempat Lahir</td>                 
                <td><input type="text" name="tempat_lahir" value=<?php echo $tempat_lahir;?>></td>             
            </tr>
            <tr>                  
                <td>Tanggal Lahir</td>                 
                <td><input type="date" name="tanggal_lahir" value=<?php echo $tanggal_lahir;?>></td>             
        
        </table>    
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>         
        <input type="submit" class="tombol" name="update" value="Update"> 
    </form> 
    <a class="link" href="index.php">kembali</a>  
    </center>   
</body> 
</html> 


