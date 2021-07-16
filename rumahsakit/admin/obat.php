<?php
require 'config/koneksi.php';
require 'config/header.php';
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Obat</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-obat.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Tambah Data</a></div>
                <div class="card-body">
                  <table class="table" id="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Obat</th>
                      <th>Nama Obat</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php 
                      $no=1;
                      $obat = query("SELECT * FROM obat");
                    ?>
                    <tbody>
                      <?php foreach ($obat as $baris) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $baris["kd_obat"];?></td>
                      <td><?php echo $baris["obat"];?></td>
                        <td><a href="edit-obat.php?id=<?php echo $baris["kd_obat"];?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> <a href="hapus-obat.php?id=<?php echo $baris["kd_obat"];?> "class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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