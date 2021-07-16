<?php
require 'config/koneksi.php';
require 'config/header.php';
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data Penyakit</h1>
          </div>

          <div class="section-body">
            <div class="card">
                <div class="card-body">
                  <form action="simpan-penyakit.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode penyakit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_penyakit" placeholder="Kode Penyakit">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama Penyakit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="penyakit" placeholder="Nama Penyakit">
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