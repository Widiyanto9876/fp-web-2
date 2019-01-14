<?php
	include '../koneksi.php';
	
	$id_cek = $_GET['id_cek'];
	$sql = mysqli_query($db, "DELETE FROM pengecekan WHERE id_cek = '$id_cek'");

	if ($sql) {
		echo 'berhasil';
	} else {
		echo 'gagal';
	}
	
?>