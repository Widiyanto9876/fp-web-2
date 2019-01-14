<?php
	include '../koneksi.php';
	
	if(isset($_POST['submit'])){

	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$merk = $_POST['merk'];
	$harga = $_POST['harga'];
	$kondisi = $_POST['kondisi'];
	$jumlah = $_POST['jumlah'];

	$allowed_ext    = array('jpg','png','gif','jpeg');
    $file_name      = $_FILES['file']['name'];
	// $file_ext       = strtolower(end(explode('.', $file_name)));
	$file_ext		= pathinfo($file_name, PATHINFO_EXTENSION);
    $file_size      = $_FILES['file']['size'];
    $file_tmp       = $_FILES['file']['tmp_name'];

	if(in_array($file_ext, $allowed_ext) === true){
    	if($file_size < 1044070){
    		$lokasi = 'berkas/'.$file_name;
    		move_uploaded_file($file_tmp, $lokasi);

	$sql = mysqli_query($db, "INSERT INTO barang VALUES('$id_barang','$nama_barang','$merk','$harga','$kondisi','$jumlah', '$lokasi')");

	if ($sql) {
		echo "<script>alert('berhasil menambahkan data');
		window.location.href='tampil.php';
	</script>";
	} else {
		echo 'gagal';
	}
}else{
		echo 'ERROR: Besar ukuran file (file size) maksimal 1 Mb!';
	}
}else{
		echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
	}
}
	
?>

<a href='../../index.php'>Kembali</a><br/>