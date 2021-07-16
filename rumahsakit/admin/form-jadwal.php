<?php
require 'config/koneksi.php';
require 'config/header.php';
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Jadwal Dokter</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <!-- <div class="card-header"><a href="form-dokter.php" class="btn btn-info btn-lg"><i class="fa fa-list"></i> Tambah Data</a></div> -->
                <div class="card-body">
                  <form action="simpan-jadwal.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Jadwal</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_jadwal" placeholder="Kode Jadwal">
                      </div>
            
                    </div>
                    <div class="form-group row">
                    	<label for="inputEmail3" class="col-sm-3 col-form-label">Hari</label>
                    	<div class="col-sm-9">
                    		<input type="text" class="form-control" name="hari" placeholder="Hari">
                    	</div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Shift</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="shift" placeholder="Shift">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Kode Dokter</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_dokter" placeholder="Kode Dokter">
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