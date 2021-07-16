<?php 
  include "config/koneksi.php";
  include "config/header.php";

  $id = $_GET['id'];
  
  $query = " SELECT * FROM dokter WHERE kd_dokter = $id limit 1";
  $result = mysqli_query($koneksi, $query);
  $baris = mysqli_fetch_array($result);
  ?>

  <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Data Dokter</h1>
          </div>
          <div class="section-body">
            <div class="card">
                <div class="card-body">
                  <form action="update-dokter.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Dokter</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_dokter" value="<?php echo $baris["kd_dokter"]?>" placeholder="Kode Dokter">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="<?php echo $baris["nama"]?>"placeholder="Nama Dokter">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                        <select class="form-control" value="<?php echo $baris["gender"]?>" name="gender">
                          <option>Silahkan Pilih</option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
              
                        </select>

                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" value="<?php echo $baris["alamat"]?>" name="alamat" placeholder="Alamat"></textarea>
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Gaji</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="gaji" value="<?php echo $baris["gaji"]?>"placeholder="Gaji">
                      </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning" onclick=self.history.back()>Batal</button>
                  </div>
                  </form>
                </div>
            </div>
          </div>
        </section>
      </div>
<?php
require 'config/footer.php';
?>