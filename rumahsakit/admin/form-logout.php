<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aplikasi Rumah Sakit</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome-5.9.0/css/all.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <style type="text/css">
  	.navbar-bg{
  		height: 75px !important;
  	}
  </style>
</head>
<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.php" class="navbar-brand sidebar-gone-hide">Apps RS</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
        </div>
        <ul class="navbar-nav navbar-right ml-auto">
        	<li class="dropdown" > <a href="login.php" class="nav-link  nav-link-lg nav-link-user">Login</a></li>
          </li>
        </ul>
      </nav>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Aplikasi Rumah Sakit</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Tentang Aplikasi Rumah Sakit</h4>
              </div>
              <div class="card-body">
                <p>Aplikasi Rumah Sakit merupakan palikasi pengolah data pasein untuk transasksi sehari-hari pada rumah sakit. dimana terdapat beberapa fitur seperti mengelola data pasien, dokter, obat dan penyakit. Diharapkan dengan adanya aplikasi ini dapat memudahkan dalam pengelolaan manajeman traksaski yanga da pada rumahsakit. Aplikasi ini akan terus dikembangkan sesuai dengan kebutuhan yang ada di rumah sakit</p>
              </div>
              <div class="card-footer bg-whitesmoke">
                -
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 - <?php echo date('Y');?> <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          1.0.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>