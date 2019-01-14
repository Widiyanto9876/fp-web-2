<?php
	include '../koneksi.php';
	
	$nik = $_POST['nik'];
	$nama_kyn = $_POST['nama_kyn'];
	$jabatan = $_POST['jabatan'];
	$alamat = $_POST['alamat'];

	$sql = mysqli_query($db, "INSERT INTO karyawan VALUES('$nik','$nama_kyn','$jabatan','$alamat')");

	if ($sql) {
		echo "<script>alert('berhasil menambahkan data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
	
?>