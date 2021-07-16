<?php

include('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM penyakit WHERE kd_penyakit = '$id'";

if($koneksi->query($query)) {
    header("location: ./penyakit.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>