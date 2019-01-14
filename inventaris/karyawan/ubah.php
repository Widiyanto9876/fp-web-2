<?php
	include '../koneksi.php';
	
	$nik = $_POST['nik'];
	$nama_kyn = $_POST['nama_kyn'];
	$jabatan = $_POST['jabatan'];
	$alamat = $_POST['alamat'];

	$sql = mysqli_query($db, "UPDATE karyawan SET nama_kyn = '$nama_kyn',jabatan = '$jabatan',alamat = '$alamat' WHERE nik = '$nik'");

	if ($sql) {
		echo "<script>alert('Selamat anda berhasil mengupdate data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
	
?>