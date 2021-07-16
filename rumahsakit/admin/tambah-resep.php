<?php
require 'config/koneksi.php';

$kd_resep = $_POST["kd_resep"];
$hari= $_POST["hari"];
$tanggal= $_POST["tanggal"];
$kd_pasien= $_POST["kd_pasien"];
$kd_penyakit= $_POST["kd_penyakit"];
$kd_obat= $_POST["kd_obat"];
$kd_dokter= $_POST["kd_dokter"];

//INSERT INTO `resep` (`kd_resep`, `hari`, `tanggal`, `kd_pasien`, `kd_penyakit`, `kd_obat`, `kd_dokter`) VALUES ('002', 'Selasa', '2021-07-13 20:43:13', '002', '003', '018', '008');

$query = " INSERT INTO `resep` (`kd_resep`, `hari`, `tanggal`, `kd_pasien`, `kd_penyakit`, `kd_obat`, `kd_dokter`) VALUES ('$kd_resep', '$hari', '$tanggal', '$kd_pasien', '$kd_penyakit', '$kd_obat', '$kd_dokter')";

$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
	echo "Berhasil insert data";
	header("location: Resep.php", true, 301);

  }
else {
	echo "Gagal insert data";
	header("location: Resep.php", false, 301);
}  

?>