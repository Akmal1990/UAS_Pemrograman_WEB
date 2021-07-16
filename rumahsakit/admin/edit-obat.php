<?php 
  include ("config/koneksi.php");
  include ("config/header.php");

  $id = $_GET["id"];
  
  $query = "SELECT * FROM obat WHERE kd_obat = $id";

  $result = mysqli_query($koneksi, $query);

  $baris = mysqli_fetch_array($result);

  ?>
<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Data Obat</h1>
          </div>

          <div class="section-body">
            <div class="card">
                <div class="card-body">
                  <form action="update-obat.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Obat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_obat" value="<?php echo $baris["kd_obat"];?>" placeholder="Kode Obat">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Obat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="obat" value="<?php echo $baris["obat"];?>" placeholder="Obat">
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