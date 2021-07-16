<?php 
  include ("config/koneksi.php");
  include ("config/header.php");

  $id = $_GET["id"];
  $query = "SELECT * FROM penyakit WHERE kd_penyakit = $id limit 1";
  $result = mysqli_query($koneksi, $query);
  $baris = mysqli_fetch_array($result);
  ?>

<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Data Penyakit</h1>
          </div>

          <div class="section-body">
            <div class="card">
              
                <div class="card-body">
                  <form action="update-penyakit.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode penyakit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_penyakit" value="<?php echo $baris["kd_penyakit"]?>" placeholder="Kode Penyakit">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Penyakit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="penyakit" value="<?php echo $baris["penyakit"]?>" placeholder="Nama Penyakit">
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