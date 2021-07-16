<?php
require 'config/koneksi.php';
require 'config/header.php';
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data Pasien</h1>
          </div>

          <div class="section-body">
            <div class="card">
              
                <div class="card-body">
                  <form action="simpan-pasien.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Pasien</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_pasien" placeholder="Kode Pasien">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Nama </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Pasien">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="gender">
                          <option>Silahkan Pilih Jenis Kelamin</option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Pasien" ></textarea>
                      </div>
                    </div>


                      <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Periksa </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="periksa" placeholder="Periksa">
                      </div>
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