<?php

include('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM pasien WHERE kd_pasien = '$id'";

if($koneksi->query($query)) {
    header("location: ./pasien.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>