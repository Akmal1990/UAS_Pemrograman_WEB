<?php

include('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM jadwal_dokter WHERE kd_jadwal = '$id'";

if($koneksi->query($query)) {
    header("location: ./jadwal-dokter.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>