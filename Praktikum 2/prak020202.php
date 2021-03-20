<?php
$baris = 4;
$kolom = 5;
$nomor = 0;
echo "<table border=’1’>";
for($i =$baris; $i <8; $i++){
 	echo "<tr>";
 	for ($j = $kolom; $j <10; $j++){
 		$nomor++;
 		echo "<td>$nomor</td>";
 	}
 	echo "</tr>";
}
echo "</table>";

?>