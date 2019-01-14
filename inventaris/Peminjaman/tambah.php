<?php
	include '../koneksi.php';
	
	// $id_peminjaman = $_POST['id_peminjaman'];
	$id_barang = $_POST['id_barang'];
	$nim  = $_POST['nim'];
	$nik = $_POST['nik'];
	$jumlah = $_POST['jumlah'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];

	$tambah = mysqli_query($db, "SELECT jumlah FROM barang WHERE id_barang = '$id_barang'");
	$data_barang = mysqli_fetch_array($tambah);
	$jumlah_barang = $data_barang['jumlah'] - $jumlah; 
	$edit = mysqli_query($db, "UPDATE barang SET jumlah = $jumlah_barang WHERE id_barang = '$id_barang'");

	$sql = mysqli_query($db, "INSERT INTO peminjaman VALUES(NULL,'$id_barang','$nim','$nik','$jumlah','$tgl_pinjam','$tgl_kembali')");

	if ($sql) {
		echo "<script>alert('berhasil menambahkan data');
				window.location.href='tampil.php';
			</script>";
	} else {
		echo 'gagal';
	}
	
?>