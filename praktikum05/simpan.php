<?php

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tgllhr = $_POST["tgllhr"];
$tmptlhr = $_POST["tmptlhr"];

$namaFile = "datamhs.txt";
$myfile = fopen($namaFile, "a") or die("Tidak Dapat Membuka File!");
fwrite($myfile, $nim." | ".$nama." | ".$tgllhr." | ".$tmptlhr."\n");
fclose($myfile);
header("Refresh:1;url='datamhs.txt'")

?>