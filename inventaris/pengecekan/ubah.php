<?php
	include '../koneksi.php';
	
	$id_cek = $_POST['id_cek'];
	$id_barang = $_POST['id_barang'];
	$nik = $_POST['nik'];
	$kondisi = $_POST['kondisi'];
	$tgl_cek = $_POST['tgl_cek'];

	$sql = mysqli_query($db, "UPDATE pengecekan SET id_barang = '$id_barang',nik = '$nik',kondisi = '$kondisi',tgl_cek = '$tgl_cek' WHERE id_cek = '$id_cek'");

	if ($sql) {
		echo "<script>alert('Selamat anda berhasil mengupdate data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
	
?>