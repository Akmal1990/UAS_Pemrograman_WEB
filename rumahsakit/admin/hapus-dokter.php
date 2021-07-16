<?php

include('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM dokter WHERE kd_dokter = '$id'";

if($koneksi->query($query)) {
    header("location: ./dokter.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>