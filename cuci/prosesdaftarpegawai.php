<title>Proses Daftar</title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<br>
	<div align="center">
	<fieldset id="main">


<?php 
require_once("koneksi.php");
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$password2 = md5($_POST['password2']);
$level = $_POST['pegawai'];

$sql = "SELECT * FROM t_masuk WHERE username = '$username'";
$query = $koneksi->query($sql);
if($query->num_rows !=0){
	header("location:daftarpegawai.php?pesan2=gagal");
} 
else{
	if(!$nama||!$no_ktp||!$jk||!$username || !$password ||!$password2 || !$level){
		header("location:daftarpegawai.php?pesan=gagal");
	} 
	else {
		if($password !== $password2){
			header("location:daftarpegawai.php?pesan1=gagal");
		}
		else{
			$data = "INSERT INTO t_masuk VALUES (null,'$nama','$no_ktp','$jk','$username','$password','$level')";
			$simpan = $koneksi->query($data);

			if($simpan){
				echo "<script>window.alert('DATA BERHASIL')
			    window.location='halaman_admin.php'</script>";
			}
			else{
				echo "<div align='center'> Proses Gagal! </div>";
			}
		}
	}
}
?>
</fieldset>
</div>
</body>