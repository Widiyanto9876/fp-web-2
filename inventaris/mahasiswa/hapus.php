<?php
	include '../koneksi.php';
	
	$nim = $_GET['nim'];
	$sql = mysqli_query($db, "DELETE FROM mahasiswa WHERE nim = '$nim'");

	if ($sql) {
		echo 'berhasil';
	} else {
		echo 'gagal';
	}
	
?>