<?php 
  require("koneksi.php");
  $id = $_GET['id'];
  $query="select * from t_masuk where id='$id'";
          $hasil = mysqli_query($koneksi, $query) or die ('Kesalahan pada proses query!');
          list($id,$nama,$no_ktp,$waktu,$jk,$username,$password) = mysqli_fetch_row($hasil);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UBAH DATA PEGAWAI</title>
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
                        <a class="active-menu"  href="riwayat.php"><i class="fa fa-dashboard fa-3x"></i> RIWAYAT</a>
                    </li><br>
                    <li>
                        <a class="active-menu"  href="pelanggan.php"><i class="fa fa-dashboard fa-3x"></i> PELANGGAN</a>
                    </li><br>
                    <li>
                        <a class="active-menu"  href="pegawai.php"><i class="fa fa-dashboard fa-3x"></i> PEGAWAI</a>
                    </li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>UBAH DATA PEGAWAI</h2>   
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
                <h2> UBAH DATA PEGAWAI</h2>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                               <form action="proseseditpegawai.php" method="POST" role="form"><br/>     
                                        <input readonly="" type="hidden" name="id" size="20" value="<?php echo $id ?>">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" name="nama" class="form-control" value="<?= $nama ?>"placeholder="NAMA">
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="no_ktp" class="form-control" placeholder="NO.KTP"  value="<?= $no_ktp ?>">
                                           
                                        </div>
                                         
                                        <div class="form-group">
                                       <!--  <input type="radio" name="jk" value="laki-laki" checked>laki-laki
          <input type="radio" name="jk" value="perempuan" >perempuan</td> -->
                                        <select class="form-control" id="exampleFormControlSelect1" name="jk" required="">
                                            <option value="" readonly="">piih jenis kelamin</option>
                                          <option value="laki-laki">laki-laki</option>
                                          <option value="perempuan">perempuan</option>
                                          
                                        </select>
                                      </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="username" required="" >
                                        </div>

                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="" minlength="6" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" minlength="6" />
                                             <!-- <input readonly="" type="hidden" name="id" size="20" value="<?php //echo $id ?>"/> -->
                                            <input  readonly="" type="hidden" name ="pegawai" value="pegawai">
                                        </div>
                                     <input name="Edit" class="btn btn-success " type="submit" value="Edit" >
                                    
                                  <hr/>
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
