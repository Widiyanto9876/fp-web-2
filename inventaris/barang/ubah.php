<?php
	include '../koneksi.php';
	
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$merk = $_POST['merk'];
	$harga = $_POST['harga'];
	$kondisi = $_POST['kondisi'];
	$jumlah = $_POST['jumlah'];

	$sql = mysqli_query($db, "UPDATE barang SET nama_barang = '$nama_barang',merk = '$merk',harga = '$harga',kondisi = '$kondisi',jumlah = '$jumlah' WHERE id_barang = '$id_barang'");

	if ($sql) {
		echo "<script>alert('berhasil menambahkan data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
	
?>