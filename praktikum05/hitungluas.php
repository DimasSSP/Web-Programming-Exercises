<?php
$nama = $_GET["n"];
$diameter = $_GET["d"];
$tinggi = $_GET["t"];

$jari = $diameter / 2;
$volume = round(pi() * ($jari*$jari) * $tinggi);
$luas = round(2 * pi() * $jari * ($jari+$tinggi));

echo("<h3> Volume tabung " .$nama. " dengan diameter " .$diameter. " dan tinggi " .$tinggi. " adalah ".$volume." satuan volume");
echo("<h3> Luas Permukaan tabung " .$nama. " dengan diameter " .$diameter. " dan tinggi " .$tinggi. " adalah ".$luas." satuan Luas");
?>