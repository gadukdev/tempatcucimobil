<?php
require_once('koneksi.php');
if(isset($_GET['id'])){
	$delete = mysqli_query($koneksi,"DELETE FROM t_masuk WHERE id = '".$_GET['id']."' ");
	    header('location:pelanggan.php');
}

?>