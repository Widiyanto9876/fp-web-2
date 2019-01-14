<?php
	include'../koneksi.php';
	$sql = mysqli_query($db, "SELECT * FROM pengecekan WHERE id_cek = $_GET[id_cek]");
	$data = mysqli_fetch_array($sql);?>

<form method='POST' action='ubah.php'>
	<span>id_cek</span><br/>
	<input type='text' name='id_cek' placeholder='id_cek' value='<?php echo @$data['id_cek']; ?>' required><br/>
	<span>id_barang</span><br/>
	<input type='text' name='id_barang' placeholder='id_barang' value='<?php echo @$data['id_barang']; ?>' required><br/>
	<span>nik</span><br/>
	<input type='text' name='nik' placeholder='nik' value='<?php echo @$data['nik']; ?>' required><br/>
	<span>kondisi</span><br/>
	<input type='text' name='kondisi' placeholder='kondisi' value='<?php echo @$data['kondisi']; ?>' required><br/>
	<span>tgl_cek</span><br/>
	<input type='text' name='tgl_cek' placeholder='tgl_cek' value='<?php echo @$data['tgl_cek']; ?>' required><br/>
<input type='submit' value='Simpan'><br/>
</form>