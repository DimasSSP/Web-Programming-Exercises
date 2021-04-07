<?php
function buatBintangLagi($n){
	echo "<pre>";
 	for($i=1; $i<=$n; $i++){
 		for($j=$n; $j>=$i; $j--){
  			echo "* ";
 		}
  		echo "\n";
 	}
  	echo "</pre>";
}
buatBintangLagi(4);
?>