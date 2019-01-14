<?php
	include '../koneksi.php';
	
	$id_peminjaman = $_POST['id_peminjaman'];
	$id_barang = $_POST['id_barang'];
	$nim  = $_POST['nim'];
	$nik = $_POST['nik'];
	$jumlah = $_POST['jumlah'];
	$tgl_pinjam = $_POST['tgl_pinjam'];
	$tgl_kembali = $_POST['tgl_kembali'];

	$sql = mysqli_query($db, "UPDATE peminjaman SET id_barang = '$id_barang',nim  = '$nim ',nik = '$nik',jumlah = '$jumlah',tgl_pinjam = '$tgl_pinjam',tgl_kembali = '$tgl_kembali' WHERE id_peminjaman = '$id_peminjaman'");

	if ($sql) {
		echo "<script>alert('Selamat anda berhasil mengupdate data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
	
?>