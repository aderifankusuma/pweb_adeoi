<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SPP</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field d-none d-xl-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item  dropdown d-none d-md-block">
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-file-word mr-2"></i>doc </a>
                  </div>
                </li>
                <li class="nav-item  dropdown d-none d-md-block">
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">
                    <a class="dropdown-item" href="#">
                      <i class="mdi mdi-eye-outline mr-2"></i>View Project </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <i class="mdi mdi-pencil-outline mr-2"></i>Edit Project </a>
                      </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                      <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                          <img src="assets/images/faces/face28.png" alt="image">
                        </div>
                        <div class="nav-profile-text">
                          <p class="mb-1 text-black"><?php echo $_SESSION['fullname']; ?></p>
                        </div>
                      </a>
                      <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                        <div class="p-3 text-center bg-primary">
                          <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
                        </div>
                        <div class="p-2">
                          <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                         
                          <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="?halaman=profil">
                            <span>Profile</span>
                            <span class="p-0">
                              <span class="badge badge-success">1</span>
                              <i class="mdi mdi-account-outline ml-1"></i>
                            </span>
                          </a>
                          <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                            <span>Settings</span>
                            <i class="mdi mdi-settings"></i>
                          </a>
                          <div role="separator" class="dropdown-divider"></div>
                          <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                          <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="logout.php">
                            <span>Log Out</span>
                            <i class="mdi mdi-logout ml-1"></i>
                          </a>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                  </button>
                </div>
              </nav>
              <!-- partial -->
              <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                  <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link" href="admin.php">
                        <span class="icon-bg"><i class="mdi mdi-home menu-icon"></i></span>
                        <span class="menu-title">Home</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <span class="icon-bg"><i class="mdi mdi-book-open-variant menu-icon menu"></i></span>
                        <span class="menu-title">Laporan</span>
                        <i class="menu-arrow"></i>
                      </a>
                      <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="?halaman=rekap">Rekap Pembayaran</a></li>
                          <li class="nav-item"> <a class="nav-link" href="?halaman=cetak_tagihan">Cetak Tagihan</a></li>
                          
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <span class="icon-bg"><i class="mdi mdi-account-box menu-icon"></i></span>
                        <span class="menu-title">Data master</span>
                        <i class="menu-arrow"></i>
                      </a>
                      <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">Jurusan</a></li>
                          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Siswa</a></li>
                          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Kelas</a></li>
                          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">Jenis Bayar</a></li>
                          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">User</a></li>
                          <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">Tahun Pelajaran</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="admin.php?halaman=pembayaran">
                        <span class="icon-bg"><i class="mdi mdi-cash-usd menu-icon"></i></span>
                        <span class="menu-title">Pembayaran</span>
                      </a>
                    </li>
                    
                  </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                  <div class="content-wrapper">
                   <?php
                   if (isset($_GET['halaman'])) 
                   {
                     if ($_GET['halaman']=='pembayaran') 
                     {
                       include 'pembayaran.php';
                     }
                     elseif ($_GET['halaman']=='rekap') 
                     {
                       include 'rekap.php';
                     }
                     elseif ($_GET['halaman']=='tabel-rekap') 
                     {
                       include 'tabel-rekap.php';
                     }
                     elseif ($_GET['halaman']=='cetak_tagihan') 
                     {
                       include 'cetak_tagihan.php';
                     }
                     elseif ($_GET['halaman']=='profil') 
                     {
                       include 'profil.php';
                     }
                   }
                   else
                   {
                    include 'home.php';
                  }
                  ?>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                  <div class="footer-inner-wraper">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                    </div>
                  </div>
                </footer>
                <!-- partial -->
              </div>
              <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
          </div>
          <!-- container-scroller -->
          <!-- plugins:js -->
          <script src="assets/vendors/js/vendor.bundle.base.js"></script>
          <!-- endinject -->
          <!-- Plugin js for this page -->
          <script src="assets/vendors/chart.js/Chart.min.js"></script>
          <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
          <!-- End plugin js for this page -->
          <!-- inject:js -->
          <script src="assets/js/off-canvas.js"></script>
          <script src="assets/js/hoverable-collapse.js"></script>
          <script src="assets/js/misc.js"></script>
          <!-- endinject -->
          <!-- Custom js for this page -->
          <script src="assets/js/dashboard.js"></script>
          <!-- End custom js for this page -->
        </body>
        </html>