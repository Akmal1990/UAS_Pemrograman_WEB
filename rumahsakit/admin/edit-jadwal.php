<?php 
  include ("config/koneksi.php");
  include ("config/header.php");

  $id = $_GET["id"];
  $query = "SELECT * FROM jadwal_dokter WHERE kd_jadwal = $id limit 1";
  $result = mysqli_query($koneksi, $query);
  $baris = mysqli_fetch_array($result);
  ?>

<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Data Jadwal</h1>
          </div>
 			<div class="section-body">
            <div class="card">
              
                <div class="card-body">
                  <form action="update-jadwal.php" method="POST">
                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Jadwal</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_jadwal" value="<?php echo $baris['kd_jadwal']?>" placeholder="Kode Jadwal">
                      </div>
            
                    </div>
                    <div class="form-group row">
                    	<label for="inputEmail3" class="col-sm-3 col-form-label">Hari</label>
                    	<div class="col-sm-9">
                    		<input type="text" class="form-control" name="hari" value="<?php echo $baris['hari']?>" placeholder="Hari">
                    	</div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Shift</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="shift" value="<?php echo $baris['shift']?>" placeholder="Shift">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Kode Dokter</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_dokter" value="<?php echo $baris['kd_dokter']?>" placeholder="Kode Dokter">
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