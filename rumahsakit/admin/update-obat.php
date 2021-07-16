<?php

//include koneksi database
include('config/koneksi.php');

//get data dari form
$kd_obat    = $_POST['kd_obat'];
$obat       = $_POST['obat'];

$query = "UPDATE obat SET kd_obat = '$kd_obat', obat = '$obat'  WHERE kd_obat = '$kd_obat'";

if($koneksi->query($query)) {
   
    header("location: ./obat.php");
} else {
   
    echo "Data Gagal Diupate!";
}

?>