<?php
$baris = 4;
$kolom = 5;
echo "<table border=’1’>";
for($i =$baris; $i <8; $i++){
 	echo "<tr>";
 	for ($j = $kolom; $j <10; $j++){
 		echo "<td>Hello</td>";
 	}
 	echo "</tr>";
}
echo "</table>";

?>