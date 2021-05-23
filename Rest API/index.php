<?php

include_once("koneksi.php");

$db	= new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);

function get_mahasiswa($id){
	global $koneksi;
	$query = "SELECT * FROM mahasiswa";
	if (!empty($uri)){
		$id = substr($uri, 4);
		$query .="WHERE id='".$id."' LIMIT 1";
	}
	$respon = array();
	$result = mysqli_query($koneksi, $query);
	$i = 0;
	if ($result) {
		$respon['kode'] = 1;
		$respon['status'] = "sukses";
		while ($row=mysqli_fetch_array($result)) {
			$respon['data'][$i]['nim'] = $row['nim'];
			$respon['data'][$i]['nama'] = $row['nama'];
			$respon['data'][$i]['angkatan'] = $row['angkatan'];
			$respon['data'][$i]['semester'] = $row['semester'];
			$respon['data'][$i]['IPK'] = $row['IPK'];
			$i++;
		}
	}else {
		$respon['kode'] = 0;
		$respon['status'] = "gagal";
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

function insert_mahasiswa(){
	global $koneksi;
	$data = json_decode(file_get_contents('php://input'), true);
	$nim = $data['nim'];
	$nama = $data['nama'];
	$angkatan = ['angkatan'];
	$semester = $data['semester'];
	$IPK = $data['IPK'];

	$query ="INSERT INTO mahasiswa set nim='".$nim."', nama='".$nama."', angkatan='".$angkatan."', semester='".$semester."', IPK='".$IPK."'";

	if(mysqli_query($koneksi, $query)){
		$respon = [
			'kode' => 1,
			'status' => 'Data Mahasiswa Berhasil Ditambahkan'
		];
	}else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Mahasiswa Gagal Ditambahkan'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

function update_mahasiswa($id){
	global $koneksi;
	$data = json_decode(file_get_contents('php://input'), true);
	$nim = $data['nim'];
	$nama = $data['nama'];
	$angkatan = ['angkatan'];
	$semester = $data['semester'];
	$IPK = $data['IPK'];

	$query ="UPDATE mahasiswa SET nim= '{$nim}', nama='{$nama}', angkatan= '{$angkatan}', semester= '{$semester}', IPK='$IPK' WHERE mahasiswa.nim=$id ";

	if(mysqli_query($koneksi, $query)){
		$respon = [
			'kode' => 1,
			'status' => 'Data Mahasiswa Berhasil Diupdate'
		];
	}else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Mahasiswa Gagal Diupdate'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

function delete_mahasiswa($id){
	global $koneksi;
	$query = "DELETE FROM mahasiswa WHERE nim='".$id."'";

	if (mysqli_query($koneksi, $query)) {
		$respon = [
			'kode' => 1,
			'status' => 'Data Mahasiswa Berhasil Dihapus'
		];
	}else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Mahasiswa Gagal Dihapus'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

switch ($request) {
	case 'GET':
		if (!empty($uri)) {
			$id = substr($uri, 4);
			get_mahasiswa($id);
		}else{
			get_mahasiswa();
		}
		break;

	case 'POST':
		insert_mahasiswa();
		break;

	case 'PUT':
		$id = substr($uri, 4);
		update_mahasiswa($id);
		break;
	
	case 'DELETE':
		$id = substr($uri, 4);
		delete_mahasiswa($id);
		break;

	default:
		header("HTTP/1.0 405 Method Tidak Terdaftar");
		break;
}

?>