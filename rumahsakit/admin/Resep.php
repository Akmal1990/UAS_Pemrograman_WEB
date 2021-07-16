<?php
require 'config/koneksi.php';
require 'config/header.php';
?>

 <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Resep</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-resep.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Tambah Data</a></div>
                <div class="card-body">
                  <table class="table" id="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Resep</th>
                      <th>Hari</th>
                      <th>Tanggal</th>
                      <th>Nama Pasien</th>
                      <th>Nama Penyakit</th>
                      <th>Obat</th>
                      <th>Dokter</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                     <?php 
                      $no=1;
                      $resep = query("SELECT * FROM resep");
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
                       <td><a href="edit-resep.php?id=<?php echo $baris["kd_resep"];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a><a href="hapus-pasien.php?id=<?php echo $baris["kd_resep"];?> "class="btn btn-danger"><i class="fa fa-trash"></i></a> <a href="cetak-resep.php?id=<?php echo $baris["kd_resep"];?>" class="btn btn-info"><i class="fa fa-print" aria-hidden="true" name="cetak"></i></a></td>
                       <td></td>
                      
                    </tr>
                      <?php } ?>
                       </tbody>
                  </table>
                </div>
            </div>
          </div>
        </section>
      </div>
<?php
require 'config/footer.php';
?>