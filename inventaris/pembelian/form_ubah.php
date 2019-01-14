<?php
	include'../koneksi.php';
	$sql = mysqli_query($db, "SELECT * FROM pembelian WHERE id_beli = $_GET[id_beli]");
	$data = mysqli_fetch_array($sql);?>

<form method='POST' action='ubah.php'>
	<span>id_beli</span><br/>
	<input type='text' name='id_beli' placeholder='id_beli' value='<?php echo @$data['id_beli']; ?>' required><br/>
	<span>id_barang</span><br/>
	<input type='text' name='id_barang' placeholder='id_barang' value='<?php echo @$data['id_barang']; ?>' required><br/>
	<span>nik</span><br/>
	<input type='text' name='nik' placeholder='nik' value='<?php echo @$data['nik']; ?>' required><br/>
	<span>jumlah</span><br/>
	<input type='text' name='jumlah' placeholder='jumlah' value='<?php echo @$data['jumlah']; ?>' required><br/>
	<span>tgl_beli</span><br/>
	<input type='text' name='tgl_beli' placeholder='tgl_beli' value='<?php echo @$data['tgl_beli']; ?>' required><br/>
<input type='submit' value='Simpan'><br/>
</form>