<?php
require 'config/koneksi.php';
require 'config/header.php';
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Dokter</h1>
          </div>

        <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-dokter.php" class="btn btn-info btn-primary"><i class="fa fa-list"></i> Tambah Data</a></div>
                <div class="card-body">
                  <table class="table" id="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Dokter</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Gaji</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php 
                      $no=1;
                      $dokter = query("SELECT * FROM dokter");
                    ?>
                    <tbody>
                      <?php foreach ($dokter as $baris) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $baris["kd_dokter"];?></td>
                      <td><?php echo $baris["nama"];?></td>
                      <td><?php echo $baris["gender"];?></td>
                      <td><?php echo $baris["alamat"];?></td>
                      <td><?php echo $baris["gaji"];?></td>
                       <td><a href="edit-dokter.php?id=<?php echo $baris["kd_dokter"] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a> <a href="hapus-dokter.php?id=<?php echo $baris["kd_dokter"] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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