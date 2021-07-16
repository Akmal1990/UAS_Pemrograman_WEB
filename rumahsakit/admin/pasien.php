<?php
require 'config/koneksi.php';
require 'config/header.php';
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Pasien</h1>
            </div>
        <div class="section-body">
            <div class="card">
              <div class="card-header"><a href="form-pasien.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Tambah Data</a></div>
                <div class="card-body">
                  <table class="table" id="table">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Pasien</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Periksa</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php 
                      $no=1;
                      $pasien = query("SELECT * FROM pasien");
                    ?>
                    <tbody>
                      <?php foreach ($pasien as $baris) { ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $baris["kd_pasien"];?></td>
                      <td><?php echo $baris["nama"];?></td>
                      <td><?php echo $baris["gender"];?></td>
                      <td><?php echo $baris["alamat"];?></td>
                      <td><?php echo $baris["periksa"];?></td>
                      <td><a href="edit-pasien.php?id=<?php echo $baris["kd_pasien"];?>" class="btn btn-warning"><i class="fa fa-edit"></i></a> <a href="hapus-pasien.php?id=<?php echo $baris["kd_pasien"];?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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