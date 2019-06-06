<?php
	require_once 'koneksi.php';
		$tempat = $_POST['tempat'];
		$tanggal = $_POST['tanggal'];
		$waktu =$_POST['waktu'];
		$konfirmasi = $_POST['konfirmasi'];
		$user = $_POST['t_masuk_id'];

		$cari_ruang = mysqli_query($koneksi,"SELECT tempat from t_pelanggan where tempat ='$tempat' and tanggal = '$tanggal' and waktu ='$waktu' ");
		$cek = mysqli_num_rows($cari_ruang);
		if ($cek > 0){
			header("location:tambahdata.php?pesan=gagal");
		}else {
			//input
			$insert = mysqli_query($koneksi,"INSERT INTO t_pelanggan values ('','$tempat','$tanggal','$waktu','$konfirmasi','$user')");
			if($insert){
	      		echo '';
	      		header('location:tambahdata.php');
			}else{
				echo 'Gagal disimpan'.mysqli_error($koneksi);
			}
		}

	
?>
