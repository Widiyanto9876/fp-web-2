<?php
	include '../koneksi.php';
	
	$id_beli = $_POST['id_beli'];
	$id_barang = $_POST['id_barang'];
	$nik = $_POST['nik'];
	$jumlah = $_POST['jumlah'];
	$tgl_beli = date('Y-m-d');

	$tambah = mysqli_query($db, "SELECT jumlah FROM barang WHERE id_barang = '$id_barang'");
	$data_barang = mysqli_fetch_array($tambah);
	$jumlah_barang = $data_barang['jumlah'] + $jumlah; 
	$edit = mysqli_query($db, "UPDATE barang SET jumlah = $jumlah_barang WHERE id_barang = '$id_barang'");

	$sql = mysqli_query($db, "INSERT INTO pembelian VALUES('$id_beli','$id_barang','$nik','$jumlah','$tgl_beli')");

	if ($sql) {
		echo "<script>alert('berhasil menambahkan data');
				window.location.href='tampil.php';
			</script>";
	} else {
		echo 'gagal';
	}
	
?>