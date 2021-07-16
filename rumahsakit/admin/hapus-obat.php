<?php

include('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM obat WHERE kd_obat = '$id'";

if($koneksi->query($query)) {
    header("location: ./obat.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>