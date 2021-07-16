<?php
include('config/koneksi.php');

$kd_penyakit = $_POST['kd_penyakit'];
$penyakit = $_POST['penyakit'];

$query = "UPDATE `penyakit` SET `kd_penyakit` = '$kd_penyakit', `penyakit` = '$penyakit' WHERE kd_penyakit = '$kd_penyakit'";

if($koneksi->query($query)) {
       header("location: ./penyakit.php");
} else {
       echo "Data Gagal Diupate!";
}

?>
