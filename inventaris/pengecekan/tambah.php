<?php
	include '../koneksi.php';
	
	$id_cek = $_POST['id_cek'];
	$id_barang = $_POST['id_barang'];
	$nik = $_POST['nik'];
	$kondisi = $_POST['kondisi'];
	$tgl_cek = $_POST['tgl_cek'];

	$sql = mysqli_query($db, "INSERT INTO pengecekan VALUES('$id_cek','$id_barang','$nik','$kondisi','$tgl_cek')");

	if ($sql) {
		echo "<script>alert('berhasil menambahkan data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
	
?>