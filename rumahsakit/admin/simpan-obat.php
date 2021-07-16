<?php
require 'config/koneksi.php';


$kd_obat = $_POST["kd_obat"];
$obat    = $_POST["obat"];


$query = "INSERT INTO `obat` (`kd_obat`, `obat`) VALUES ('$kd_obat', '$obat')";

$hasil = mysqli_query($koneksi, $query);

if ($hasil) {

 	echo "Berhasil insert data";
 	header("location: obat.php", true, 301);

   }
 else {
 	echo "Gagal insert data";
 	header("location: obat.php", true, 301);
 }  

?>