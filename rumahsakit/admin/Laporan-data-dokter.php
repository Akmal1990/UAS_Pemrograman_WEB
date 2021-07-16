<<?php 
include "config/koneksi.php";
 ?>
 

<!DOCTYPE html>
<html lang="en">

<!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/fontawesome-5.9.0/css/all.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
   <link rel="stylesheet" href="../assets/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">


<div class="section-body">
<div class="card">
<div class="card-body">
<body>
    <center>
        <img src="../assets/img/klinik.jpg" alt="logo" width="100">
        <h2>Rumah Sakit Baru Operasi</h2>
        <p>________________________________________________________________________</p>
        <h3>LAPORAN DATA DOKTER</h3>
        <div class="card-body">
        <table class="table table-bordered border-primary" id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID | DOKTER</th>
                    <th>NAMA DOKTER</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>GAJI</th>
                </tr>
                
            </thead>
            <?php 
                      $no=1;
                      $resep = query("SELECT * FROM dokter ");
                ?>
            <tbody>
                <?php foreach ($resep as $baris) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $baris["kd_dokter"];?></td>
                      <td><?php echo $baris["nama"];?></td>
                      <td><?php echo $baris["gender"];?></td>
                      <td><?php echo $baris["alamat"];?></td>
                      <td><?php echo $baris["gaji"];?></td>
                                     
                    </tr>
                      <?php } ?>
                  </tbody>
              </table>
            </div>
            </div>
            </div>
            </div>
    

    <script>
        window.print();
    </script>
</body>

</html>