<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">                
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <link rel="stylesheet" href="css/hero-slider-style.css">                              
    <link rel="stylesheet" href="css/magnific-popup.css">                                 
    <link rel="stylesheet" href="css/tooplate-style.css">
	<link rel="stylesheet" type="text/css" href="stylee.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/PROJEK/css.bootstrap.css">
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	
	<h2 align="center">Data laporan pencucian</h2>
	<!--tabel-->


	<style>
		td {height: 45px};
	</style>

		<form action="" method="POST"><br>
		<table border="1" align="center" width="100%">
	<thead>
	<tr style="height:50px; background-color:#FF9900" align="center">
        <td>No</td>
		<td>Nama</td>
		<td>No.ktp</td>
		<td>tempat</td>
		<td>Tanggal</td>
		<td>Waktu</td>
		<td>Status</td></thead>
		

	</tr>
	<!-- html -->
	<?php

		  require("koneksi.php");
		  
          // $query="SELECT * FROM t_pelanggan where konfirmasi !='belum konfirmasi'" ;  
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
	
<script type="text/javascript"> window.print()</script>
	 
	</div>
	
</body>
</html>