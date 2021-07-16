
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aplikasi Rumah Sakit</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/fontawesome-5.9.0/css/all.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
   <link rel="stylesheet" href="../assets/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
</head>
<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Akmaluddin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="index.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
             
                <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
         <img src="../assets/img/klinik.jpg" alt="logo" width="100" href="index.php" class="shadow-light rounded-circle">
         <a href="index.php"><h1><span>APP RS</span></h1></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
                </div>
          <ul class="sidebar-menu">
            <br>
          <li><a href="index.php"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="dokter.php"><i class="fa fa-user"></i> <span>Dokter</span></a></li>
                  <li class="active"><a class="nav-link" href="jadwal-dokter.php"><i class="fa fa-user"></i> <span>Jadwal Dokter</span></a></li>
                  <li class="active"><a class="nav-link" href="pasien.php"><i class="fa fa-user"></i> <span>Pasien</span></a></li>
                  <li class="active"><a class="nav-link" href="penyakit.php"><i class="fa fa-user"></i> <span>Penyakit</span></a></li>
                  <li class="active"><a class="nav-link" href="obat.php"><i class="fa fa-user"></i> <span>Obat</span></a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Transaksi</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="Resep.php"><i class="fa fa-columns"></i> <span>Resep</span></a></li>
                </ul>
              

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Laporan</span></a>
                <ul class="dropdown-menu">
                   <li class="active"><a class="nav-link" href="Laporan-data-dokter.php"><i class="fa fa-columns"></i> <span> Data Dokter</span></a>
                   </li>
                 <li class="active"><a class="nav-link" href="Laporan-data-pasien.php"><i class="fa fa-columns"></i> <span>Data Pasien</span></a></li>
                 
                 <li class="active"><a class="nav-link" href="Laporan-data-penyakit.php"><i class="fa fa-columns"></i> <span>Data Penyakit</span></a></li>
                 <li class="active"><a class="nav-link" href="./Laporan-data-obat.php"><i class="fa fa-columns"></i> <span>Data Obat</span></a></li>

                </ul>
              </li>
              <li class="active"><a class="nav-link" href="./logout.php"><i class="far fa-square"></i> <span>Log out</span></a></li>
 
        </aside>
      </div>