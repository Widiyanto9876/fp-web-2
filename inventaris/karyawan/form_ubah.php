<?php
	include'../koneksi.php';
	$sql = mysqli_query($db, "SELECT * FROM karyawan WHERE nik = '$_GET[nik]'");
	$data = mysqli_fetch_array($sql);?>

<form method='POST' action='ubah.php'>
	<span>nik</span><br/>
	<input type='text' name='nik' placeholder='nik' value='<?php echo @$data['nik']; ?>' required><br/>
	<span>nama_kyn</span><br/>
	<input type='text' name='nama_kyn' placeholder='nama_kyn' value='<?php echo @$data['nama_kyn']; ?>' required><br/>
	<span>jabatan</span><br/>
	<input type='text' name='jabatan' placeholder='jabatan' value='<?php echo @$data['jabatan']; ?>' required><br/>
	<span>alamat</span><br/>
	<input type='text' name='alamat' placeholder='alamat' value='<?php echo @$data['alamat']; ?>' required><br/>
<input type='submit' value='Simpan'><br/>
</form>