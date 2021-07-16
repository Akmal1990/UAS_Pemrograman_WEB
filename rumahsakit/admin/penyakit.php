<?php
require 'config/koneksi.php';
require 'config/header.php';
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Penyakit</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-penyakit.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Tambah Data</a></div>
                <div class="card-body">
                  <table class="table" id="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Penyakit</th>
                      <th>Nama Penyakit</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php 
                      $no=1;
                      $penyakit = query("SELECT * FROM penyakit");
                    ?>
                    <tbody>
                      <?php foreach ($penyakit as $baris) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $baris["kd_penyakit"];?></td>
                      <td><?php echo $baris["penyakit"];?></td>
                      <td><a href="edit-penyakit.php?id=<?php echo $baris["kd_penyakit"];?>" class="btn btn-warning"><i class="fa fa-edit"></i></a> <a href="hapus-penyakit.php?id=<?php echo $baris["kd_penyakit"];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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