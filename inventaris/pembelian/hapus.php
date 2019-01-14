<?php
	include '../koneksi.php';
	
	$id_beli = $_GET['id_beli'];
	$sql = mysqli_query($db, "DELETE FROM pembelian WHERE id_beli = '$id_beli'");

	if ($sql) {
		echo 'berhasil';
	} else {
		echo 'gagal';
	}
	
?>