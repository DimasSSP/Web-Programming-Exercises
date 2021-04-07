<?php
function hitungGaji($gol, $masaKerja){
 	if ($gol == "A"){
  		if ($masaKerja < 10) {
 			$gaji = 5000000;
  		} else {
  			$gaji = 7000000;
  		}
 	} else if ($gol == "B"){
 			if ($masaKerja < 10) {
 				$gaji = 6000000;
  			} else {
  				$gaji = 8000000;
  			}
  		}
	return $gaji;
}

echo hitungGaji("A", 5);
echo "<br>";
echo hitungGaji("A", 13);
echo "<br>";
echo hitungGaji("B", 7);
echo "<br>";
echo hitungGaji("B", 15);
?> 