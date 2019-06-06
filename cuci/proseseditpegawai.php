<?php 
	require_once("koneksi.php");
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$no_ktp = $_POST['no_ktp'];
	$jk = $_POST['jk'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$level = $_POST['pegawai'];
	
    $query = "UPDATE t_masuk SET nama = '$nama', no_ktp ='$no_ktp', jk ='$jk',username ='$username',password ='$password',level ='$level'  WHERE id = '$id'";
    $hasil = mysqli_query($koneksi, $query) or die ('Kesalahan pada proses query!');

if($query){
	//echo "<script>alert('Data Telah dihapus !');history.go(-1);</script>";
    header("Location: pegawai.php");
}else{
    echo "Hapus Data Gagal";
    echo "<p><input type=\"button\" name=\"submit\" value=\"Kembali\" onClick=\"history.go(-1)\"></p>";
}
?>








