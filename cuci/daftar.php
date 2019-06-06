<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:index.php');}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman pendaftaran</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" type="text/css" href="localhost/cuci/assets/css/bootstrap.css">

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Daftar sebagai pelanggan</h2>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                               <form action="prosesdaftar.php" method="POST" role="form">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" name="nama" class="form-control" placeholder="NAMA">
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="no_ktp" class="form-control" placeholder="NO.KTP">
                                           
                                        </div>
                                         
                                        <div class="form-group">
                                        
                                        <select class="form-control" id="exampleFormControlSelect1" name="jk">
                                            <option value="" readonly="">pilih jenis kelamin</option>
                                          <option value="laki-laki">laki-laki</option>
                                          <option value="perempuan">perempuan</option>
                                          
                                        </select>
                                      </div>
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="username">
                                        </div>

                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" minlength="6" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" minlength="6" />
                                            <input  readonly="" type="hidden" name ="pelanggan" value="pelanggan">
                                        </div>
                                     <input name="Daftar" class="btn btn-success " type="submit" value="Daftar" >  &nbsp;  &nbsp;<a href="index.php" class="btn btn-danger">Batal</a>
                                    
                                    <hr />
                                   Sudah punya akun? ?  <a href="login.php" >Login </a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
