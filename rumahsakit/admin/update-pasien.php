<?php
include('config/koneksi.php');

$kd_pasien    = $_POST['kd_pasien'];
$nama         = $_POST['nama'];
$gender       = $_POST['gender'];
$alamat       = $_POST['alamat'];
$periksa      = $_POST['periksa'];

$query = "UPDATE `pasien` SET `kd_pasien` = '$kd_pasien', `nama` = '$nama', `gender` = '$gender', `alamat` = '$alamat', `periksa` = '$periksa' WHERE kd_pasien = '$kd_pasien'";


if($koneksi->query($query)) {
       header("location: ./pasien.php");
} else {
       echo "Data Gagal Diupate!";
}

?>
