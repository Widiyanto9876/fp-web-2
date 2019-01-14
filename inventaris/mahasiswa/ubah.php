<?php
	include '../koneksi.php';
	
	$nim = $_POST['nim'];
	$nama_mhs = $_POST['nama_mhs'];
	$jurusan = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];

	$sql = mysqli_query($db, "UPDATE mahasiswa SET nama_mhs = '$nama_mhs',jurusan = '$jurusan',kelas = '$kelas',alamat = '$alamat' WHERE nim = '$nim'");

	if ($sql) {
		echo "<script>alert('Selamat anda berhasil mengupdate data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
	
?>