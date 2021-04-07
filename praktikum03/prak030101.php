<?php
function gandakanString($str, $i){
	$x = "";
	for ($a = 1; $a <= $i; $a++) {
		$x .= $str;
	}
	return $x;
}

echo gandakanString("hello", 3);
?>