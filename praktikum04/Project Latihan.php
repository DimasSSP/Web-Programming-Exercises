<?php
function cariUmur($tanggalLahir){
    $birthDate = new DateTime($tanggalLahir);
    $today = new DateTime("today");
    if ($birthDate > $today) { 
        exit("0 tahun 0 bulan 0 hari");
    }

    $tahun = $today->diff($birthDate)->y;
    $bulan = $today->diff($birthDate)->m;
    $hari = $today->diff($birthDate)->d;
    return $tahun;
}

$myfile = fopen("datamhs.dat", "r") or die("Unable to open file!");
echo ('<h1>Data Mahasiswa</h1>');
echo '<table border="1">';  
echo('<tr>
    <th>No</th> <th>NIM</th> <th>Nama Mahasiswa</th> <th>Tanggal Lahir</th> <th>Tempat Lahir</th> <th>usia (Thn)</th>
    </tr>');

$nomor = 1;
while (!feof($myfile)) {
    echo("<tr>");
    $data = preg_split("[\|]", fgets($myfile), 4);
    
    if ($data[0] != '') {
        $ageMhs = cariUmur($data[2]);
        echo("
            <td>$nomor</td>
            <td>$data[0]</td>
            <td>$data[1]</td>
            <td>$data[2]</td>
            <td>$data[3]</td>
            <td>$ageMhs Tahun</td>
        
        ");
        $nomor+=1;
    }
    echo("</tr>");
}

$nomor -=1;
echo("</table>");
fclose($myfile);
echo("<p>Jumlah Data : $nomor</p>");
?>