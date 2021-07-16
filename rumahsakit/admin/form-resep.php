<?php
require 'config/koneksi.php';
require 'config/header.php';


?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="datepicker/css/datepicker.css">



      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Input Resep</h1>
          </div>

          <div class="section-body">
            <div class="card">
            <div class="card-body">
            <form action="tambah-resep.php" method="POST">

            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Resep</label>
            <div class="col-sm-9">
           <input type="text" class="form-control" name="kd_resep"  placeholder="Kode Resep">
           </div>
           </div>
           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Hari</label>
            <div class="col-sm-9">
           <input type="text" class="form-control" name="hari" placeholder="hari">
           </div>
           </div>
           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-9">
           <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">

               <script type="text/javascript">
                 $(function(){
                              $(".datepicker").datepicker({
                                            format: 'yyyy-mm-dd',
                                            autoclose: true,
                                            todayHighlight: true,
                                            });
                       });
                  </script>
           </div>
           </div>
           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Pasien</label>
            <div class="col-sm-9">
           <input type="text" class="form-control" name="kd_pasien" placeholder="Kode Pasien">
           </div>
           </div>
           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Penyakit</label>
            <div class="col-sm-9">
           <input type="text" class="form-control" name="kd_penyakit" placeholder="Kode Penyakit">
           </div>
           </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Kode Obat</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="kd_obat" placeholder="Kode Obat">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Kode Dokter</label>
                      <div class="col-sm-9">
                        <input type="" class="form-control " name="kd_dokter" placeholder="Kode Dokter">
                      </div>
                      <div>
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