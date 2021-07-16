<<?php 
include "config/koneksi.php";
// include 'config/header.php';
 ?>
 <?php
 $id = $_GET['id'];
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
		<h3>Resep Pasien</h3>
		<div class="card-body">
		<table class="table" id="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>ID | Resep</th>
					<th>Hari</th>
					<th>Tanggal</th>
					<th>Nama Pasien</th>
					<th>Nama Penyakit</th>
					<th>Nama Obat</th>
					<th>Nama Dokter</th>
				</tr>
				
			</thead>
			<?php 
                      $no=1;
                      $resep = query("SELECT * FROM resep ");
                ?>
			<tbody>
				<?php foreach ($resep as $baris) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $baris["kd_resep"];?></td>
                      <td><?php echo $baris["hari"];?></td>
                      <td><?php echo $baris["tanggal"];?></td>
                      <td><?php echo $baris["kd_pasien"];?></td>
                      <td><?php echo $baris["kd_penyakit"];?></td>
                      <td><?php echo $baris["kd_obat"];?></td>
                      <td><?php echo $baris["kd_dokter"];?></td>                  
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