<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rumahsakit";

$koneksi = mysqli_connect($host, $user, $pass, $dbname);


if (!$koneksi){
	die("Koneksi Gagal : ". mysqli_connect_error());
}else{
	echo "koneksi Berhasil";
}

// Fungsi untuk menambil data dari Database
function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($mhs = mysqli_fetch_assoc($result)) {
		$rows[] = $mhs;
	}
	return $rows;
}

?>
