<?php
	include '../koneksi.php';
	
	$id_peminjaman = $_GET['id_peminjaman'];
	$sql = mysqli_query($db, "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'");

	if ($sql) {
		echo 'berhasil';
	} else {
		echo 'gagal';
	}
	
?>