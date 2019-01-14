<?php
	include '../koneksi.php';
	
	if(isset($_POST['submit'])) {

	$nim = $_POST['nim'];
	$nama_mhs = $_POST['nama_mhs'];
	$jurusan = $_POST['jurusan'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];

	$sql = mysqli_query($db, "INSERT INTO mahasiswa VALUES('$nim', '$nama_mhs', '$jurusan', '$kelas', '$alamat')");

	if ($sql) {
		echo "<script>alert('berhasil menambahkan data');
				window.location.href='tampil.php';
			</script>";
	} else {
		echo 'gagal';
	}
}

?>