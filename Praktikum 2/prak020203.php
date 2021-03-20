<?php
$baris = 4;
$kolom = 5;
$nomor = 0;
echo "<table border=’1’>";
for($i =$baris; $i <8; $i++){
 	echo "<tr>";
 	for ($j = $kolom; $j <10; $j++){
 		$nomor++;
 		if ($nomor % 2 == 0) {
 			echo "<td style ='color: white; background-color: red;'> $nomor </td>";
 		}
 		else {
 			echo "<td style='color :red; background-color: white;'> $nomor </td>";
 		}
 	}
 	echo "</tr>";
}
echo "</table>";

?>