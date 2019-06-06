<?php
require_once('koneksi.php');
if(isset($_GET['id'])){
	$delete = mysqli_query($koneksi,"DELETE FROM t_pelanggan WHERE id = '".$_GET['id']."' ");
	    header('location:tambahdata.php');
}

?>