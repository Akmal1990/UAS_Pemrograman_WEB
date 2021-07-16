<?php 
//require 'admin/config/koneksi.php'; 
include 'admin/config/koneksi.php';
 $username  = $_POST['username']; 
 $password  = $_POST['password']; 

 $login = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '$username' AND password='$password'"); 
$row=mysqli_fetch_array($login); 
if ($row['username'] == $username AND $row['password'] == $password) 
{ 
  session_start(); 
  $_SESSION['username'] = $row['username']; 
  $_SESSION['password'] = $row['password']; 
  header('location:admin/index.php'); 
} 
else 
{ 
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br> 
        Username atau Password Anda tidak benar.<br>"; 
    echo "<br>"; 
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>"; 

 } 
?> 