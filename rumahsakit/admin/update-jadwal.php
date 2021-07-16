<?php
include('config/koneksi.php');

$kd_jadwal    = $_POST['kd_jadwal'];
$hari         = $_POST['hari'];
$shift       = $_POST['shift'];
$kd_dokter     = $_POST['kd_dokter'];


$query = "UPDATE `jadwal_dokter` SET `kd_jadwal` = '$kd_jadwal', `hari` = '$hari', `shift` = '$shift', `kd_dokter` = '$kd_dokter' WHERE kd_jadwal = '$kd_jadwal'";


if($koneksi->query($query)) {
       header("location: ./jadwal-dokter.php");
} else {
       echo "Data Gagal Diupate!";
}

?>
