<?php
function hitungDenda($tglHarusKembali, $tglKembali){

 	// memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
	// dari tanggal pertama
	 
	$tgl1 = explode("-", $tglHarusKembali);
	$date1 = $tgl1[2];
	$month1 = $tgl1[1];
	$year1 = $tgl1[0];
	 
	// memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
	// dari tanggal kedua
	 
	$tgl2 = explode("-", $tglKembali);
	$date2 = $tgl2[2];
	$month2 = $tgl2[1];
	$year2 =  $tgl2[0];
	 
	// menghitung JDN dari masing-masing tanggal
	 
	$jd1 = GregorianToJD($month1, $date1, $year1);
	$jd2 = GregorianToJD($month2, $date2, $year2);
	 
	// hitung selisih hari kedua tanggal
	 
	$selisih = $jd2 - $jd1;
	$denda = $selisih * 3000;
	 
	echo "Anda terlambat mengembalikan selama ".$selisih." hari";
	echo "<br>";

	return $denda;
}

echo "Besarnya denda adalah: Rp ".hitungDenda("2021-01-03", "2021-01-05");
?>