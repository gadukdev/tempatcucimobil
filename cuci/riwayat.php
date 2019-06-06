<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
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
                        <a class="active-menu"  href="halaman_admin.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li><br>
                    <li>
                        <a class="active-menu"  href="riwayat.php"><i class="fa fa-history fa-3x"></i></i> RIWAYAT</a>
                    </li><br>
                    <li>
                        <a class="active-menu"  href="pelanggan.php"><i class="fa fa-users fa-3x"></i> PELANGGAN</a>
                    </li><br>
                    <li>
                        <a class="active-menu"  href="pegawai.php"><i class="fa fa-users fa-3x"></i></i> PEGAWAI</a>
                    </li>
                    
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>RIWAYAT</h2>   
                        <h5>Welcome <?php echo $_SESSION['username']; ?> </h5>
                    </div>
                </div>      
                 <!-- /. ROW  -->
                 <hr />
              
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel RIWAYAT
                        </div><br>
                        <div class="container"><a href="cetak.php" class="btn btn-danger fa fa-print fa-1x"> CETAK</a></div>
                        <div class="panel-body">
                           
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                     <td align="center">No</td>
                                    <td align="center">Nama</td>
                                    <td align="center">No.ktp</td>
                                    <td align="center">tempat</td>
                                    <td align="center">Tanggal</td>
                                    <td align="center">Waktu</td>
                                    <td align="center">Status</td>
                                   
                                        </tr>
                                    </thead>
                                    
                                   

    <!-- html -->
    <?php

          require("koneksi.php");
          
          $query = "SELECT t_masuk.id,t_masuk.nama,t_masuk.no_ktp,t_pelanggan.tempat,t_pelanggan.tanggal,t_pelanggan.waktu,t_pelanggan.konfirmasi FROM t_masuk INNER JOIN t_pelanggan ON t_masuk.id = t_pelanggan.t_masuk_id WHERE t_pelanggan.konfirmasi ='terkonfirmasi'"; 
          $hasil = mysqli_query ($koneksi,$query) or die ("Kesalahan pada perintah SQL!");
          $no=1;
          while (list($id,$nama,$no_ktp,$tempat,$tanggal,$waktu,$konfirmasi)=mysqli_fetch_row($hasil)){               
    ?>    
    <!-- HTML -->
        <tr style="height:50px; background-color:#" align="center">
        <td align="center"><?php echo $no++ ?></td> 
        <td align="center"><?php echo $nama ?></td>
        <td align="center"><?php echo $no_ktp ?></td>
        <td align="center"><?php echo $tempat ?></td>
        <td align="center"><?php echo $tanggal ?></td>
        <td align="center"><?php echo $waktu ?></td>
        <td align="center"><?php echo $konfirmasi ?></td>

        
    </tr>

<?php } ?>

</table>
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
