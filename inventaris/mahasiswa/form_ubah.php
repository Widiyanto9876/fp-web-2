<?php
	include'../koneksi.php';
	$sql = mysqli_query($db, "SELECT * FROM mahasiswa WHERE nim = '$_GET[nim]'");
	$data = mysqli_fetch_array($sql);
	?>

<form method='POST' action='ubah.php'>
	<span>nim</span><br/>
	<input type='text' name='nim' placeholder='nim' value='<?php echo @$data['nim']; ?>' required><br/>
	<span>nama_mhs</span><br/>
	<input type='text' name='nama_mhs' placeholder='nama_mhs' value='<?php echo @$data['nama_mhs']; ?>' required><br/>
	<span>jurusan</span><br/>
	<input type='text' name='jurusan' placeholder='jurusan' value='<?php echo @$data['jurusan']; ?>' required><br/>
	<span>kelas</span><br/>
	<input type='text' name='kelas' placeholder='kelas' value='<?php echo @$data['kelas']; ?>' required><br/>
	<span>alamat</span><br/>
	<input type='text' name='alamat' placeholder='alamat' value='<?php echo @$data['alamat']; ?>' required><br/>
<input type='submit' value='Simpan'><br/>
</form>