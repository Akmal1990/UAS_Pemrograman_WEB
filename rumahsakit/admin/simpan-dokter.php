<?php
require 'config/koneksi.php';

$kd_dokter = $_POST["kd_dokter"];
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$gaji = $_POST["gaji"];


//$query = "INSERT INTO `dokter` (`kd_dokter`, `nama`, `gender`, `alamat`, `gaji`) VALUES ('$kode_dokter', '$nama', '$gender', '$alamat', '$gaji')";

$query = "INSERT INTO `dokter` (`kd_dokter`, `nama`, `gender`, `alamat`, `gaji`) VALUES ('$kd_dokter', '$nama', '$gender', '$alamat', '$gaji')";

$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
	echo "Berhasil insert data";
	header("location: dokter.php", true, 301);

  }
else {
	echo "Gagal insert data";
	header("location: dokter.php", true, 301);
}  

?>