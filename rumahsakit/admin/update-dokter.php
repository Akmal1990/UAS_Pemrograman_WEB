<?php

include('config/koneksi.php');


$kd_dokter    = $_POST['kd_dokter'];
$nama   = $_POST['nama'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$gaji = $_POST['gaji'];



$query = "UPDATE `dokter` SET `kd_dokter` = '$kd_dokter', `nama` = '$nama', `gender` = '$gender', `alamat` = '$alamat', `gaji` = '$gaji' WHERE kd_dokter = '$kd_dokter'";


if($koneksi->query($query)) {
       header("location: ./dokter.php");
} else {
       echo "Data Gagal Diupate!";
}

?>