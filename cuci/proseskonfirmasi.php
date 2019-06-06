<?php
require_once('koneksi.php');
$id = $_POST['id'];
$konfirmasi =$_POST['konfirmasi'];

$query = "UPDATE t_pelanggan set konfirmasi = '$konfirmasi' where id='$id'";
$hasil = mysqli_query($koneksi,$query);
if($hasil){
  //echo $validasi;
  //echo $id;
  header('location: halaman_admin.php');
}else{
  echo 'Data tidak berhasil update';
}
?>