<?php
	include '../koneksi.php';
	
	$nik = $_GET['nik'];
	$sql = mysqli_query($db, "DELETE FROM karyawan WHERE nik = '$nik'");

	if ($sql) {
		echo 'berhasil';
	} else {
		echo 'gagal';
	}
	
?>