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
$level = $_POST['pelanggan'];

$sql = "SELECT * FROM t_masuk WHERE username = '$username'";
$query = $koneksi->query($sql);
if($query->num_rows !=0){
	echo "<div align = 'center'>Username sudah terdaftar! <a href = 'daftar.php'>Back</a></div>";
} 
else{
	if(!$nama||!$no_ktp||!$jk||!$username || !$password ||!$password2 || !$level){
		echo "<div align = 'center'>Masih ada data yang kosong <a href = 'daftar.php'>Back</a></div>";
	} 
	else {
		if($password !== $password2){
			echo "<div align = 'center'>Password tidak sama<a href = 'daftar.php'>Back</a></div>";
		}
		else{
			$data = "INSERT INTO t_masuk VALUES (null,'$nama','$no_ktp','$jk','$username','$password','$level')";
			$simpan = $koneksi->query($data);

			if($simpan){
				echo "<script>window.alert('DATA BERHASIL')
			    window.location='login.php'</script>";
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