
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Pelanggan</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:login.php?pesan=gagal");
    }

    ?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><?php echo $_SESSION['level']; ?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="logout.php" class="btn btn-danger square-btn-adjust"  onclick="return confirm('Apakah yakin ingin keluar?')">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center" >
                    <?php echo $_SESSION['username']; ?>
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a class="active-menu"  href="halaman_pelanggan.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li><br>
                    <li>
                        <a class="active-menu"  href="tambahdata.php"><i class="glyphicon glyphicon-plus fa-3x"></i> Tambah Data</a>
                    </li><br>
                    <li>
                        <a class="active-menu"  href="datapemesanan.php"><i class="glyphicon glyphicon-book fa-3x"></i> Data Boking tempat </a>
                    </li><br>
                    <li>
                        <a class="active-menu"  href="pegawai1.php"><i class="glyphicon glyphicon-eye-open fa-3x"></i> Lihat Pegawai</a>
                    </li><br>
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?php echo $_SESSION['level']; ?> Dashboard</h2>   
                        <h5>Welcome <?php echo $_SESSION['username']; ?> </h5>
                    </div>
                </div>      
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <legend>PERHATIAN!!! HARAP DI BACA</legend>
                      <justify>

                    <p>Tempat pencucian mobil buka setiap hari dari jam 09.00-16.45</li>
                    <p>bagi pelanggan bisa melakukan boking tempat terlebih dahulu sebelum datang bisa juga langsung bila ada yang kosong</p>
                    <p>Pelanggan melakukan pemilihan jenis mencuci mobil saat mobil sudah di ada di tempat</p>
                    <p>Total pembayaran di lakukan saat selesai melakukan pencucian mobil</p>
                    <p>Pelanggan bisa merubah waktu dan jam bokingan</p>
                    <p>Bagi pelanggan yang boking tempat cuci tapi gagal bisa di cancel bokingannya</p><br></justify>
                    <hr>
                  </fieldset>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>