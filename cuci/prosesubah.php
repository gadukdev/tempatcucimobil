<?php 
	require_once("koneksi.php");
	$id = $_POST['id'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];
	
    $query = "UPDATE t_pelanggan SET tempat = '$tempat', tanggal ='$tanggal', waktu ='$waktu' WHERE id = '$id'";
    $hasil = mysqli_query($koneksi, $query) or die ('Kesalahan pada proses query!');

if($query){
	//echo "<script>alert('Data Telah dihapus !');history.go(-1);</script>";
    header("Location: tambahdata.php");
}else{
    echo "Hapus Data Gagal";
    echo "<p><input type=\"button\" name=\"submit\" value=\"Kembali\" onClick=\"history.go(-1)\"></p>";
}
?>








