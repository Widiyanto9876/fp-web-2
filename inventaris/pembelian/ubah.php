<?php
	include '../koneksi.php';
	
	$id_beli = $_POST['id_beli'];
	$id_barang = $_POST['id_barang'];
	$nik = $_POST['nik'];
	$jumlah = $_POST['jumlah'];
	$tgl_beli = $_POST['tgl_beli'];

	$sql = mysqli_query($db, "UPDATE pembelian SET id_barang = '$id_barang',nik = '$nik',jumlah = '$jumlah',tgl_beli = '$tgl_beli' WHERE id_beli = '$id_beli'");

	if ($sql) {
		echo "<script>alert('Selamat anda berhasil mengupdate data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
	
?>