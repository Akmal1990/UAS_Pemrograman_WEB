<?php
require 'config/koneksi.php';

$kd_penyakit = $_POST["kd_penyakit"];
$penyakit= $_POST["penyakit"];



$query = "INSERT INTO `penyakit` (`kd_penyakit`, `penyakit`) VALUES ('$kd_penyakit', '$penyakit')";

$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
	echo "Berhasil insert data";
	header("location: penyakit.php", true, 301);

  }
else {
	echo "Gagal insert data";
	header("location: penyakit.php", true, 301);
}  

?>