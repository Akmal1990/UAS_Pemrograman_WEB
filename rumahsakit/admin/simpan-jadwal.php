<?php
require 'config/koneksi.php';

$kd_jadwal = $_POST["kd_jadwal"];
$hari = $_POST["hari"];
$shift = $_POST["shift"];
$kd_dokter = $_POST["kd_dokter"];


$query = "INSERT INTO `jadwal_dokter` (`kd_jadwal`, `hari`, `shift`, `kd_dokter`) VALUES ('$kd_jadwal','$hari', '$shift', '$kd_dokter')";


$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
	echo "Berhasil insert data";
	header("location: jadwal-dokter.php", true, 301);

  }
else {
	echo "Gagal insert data";
	header("location: jadwal-dokter.php", true, 301);
}  

?>