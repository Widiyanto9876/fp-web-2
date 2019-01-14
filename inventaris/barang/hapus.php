<?php
	include '../koneksi.php';
	
	$id_barang = $_GET['id_barang'];
	$sql = mysqli_query($db, "DELETE FROM barang WHERE id_barang = '$id_barang'");

	if ($sql) {
		echo 'berhasil';
	} else {
		echo 'gagal';
	}
	
?>