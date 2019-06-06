<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data</title>
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
                     <h2>Tambah Data Pemesanan</h2>   
                        <h5>Welcome <?php echo $_SESSION['username']; ?> </h5>
                    </div>
                </div>      
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
               <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> PESAN TEMPAT CUCI MOBIL</h2>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                               <form action="prosestambah.php" method="POST" role="form">
                                <br/>  <div class="form-group">
                                        <input type="hidden" name="konfirmasi" value="belum konfirmasi">
                                        <select class="form-control" id="exampleFormControlSelect1" name="tempat" required="">
                                            <option value="" readonly="">pilih Tempat</option>
                                          <option value="MOBIL A">MOBIL A</option>
                                            <option value="MOBIL B">MOBIL B</option>
                                            <option value="MOBIL C">MOBIL C</option>
                                            <option value="MOBIL D">MOBIL D</option>
                                            <option value="MOBIL E">MOBIL E</option>
                                          
                                        </select>
                                         
                                         <div class= "form-group">
                                            <br>
                                            <input type="date" name="tanggal" id="tanggal" class="form-control" required="">
                                         </div>
                                        <div class="form-group">
                                        
                                        <select class="form-control" id="exampleFormControlSelect1" name="waktu" required="">
                                            <option value="">Pilih Jam</option>
                                            <option value="09.00-09.45">09.00-09.45</option>
                                            <option value="10.00-10.45">10.00-10.45</option>
                                            <option value="11.00-11.45">11.00-11.45</option>
                                            <option value="12.00-12.45">12.00-12.45</option>
                                            <option value="13.00-13.45">13.00-13.45</option>
                                            <option value="14.00-14.45">14.00-14.45</option>
                                            <option value="15.00-15.45">15.00-15.45</option>
                                            <option value="16.00-16.45">16.00-16.45</option>                        
                                        </select>
                                      </div>
                                    <div>
                                    <input type="hidden" name="t_masuk_id" value="<?php echo $_SESSION['pid']; ?>">
                                  </div>
                                     
                                     <input name="tambah" class="btn btn-success " type="submit" value="Tambah" >
                                    <hr />
                        </form>
                     </div>    
                </div>
             </div>  
        </div>
    </div>
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
