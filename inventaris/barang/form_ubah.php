<?php
	include'../koneksi.php';
	$sql = mysqli_query($db, "SELECT * FROM barang WHERE id_barang = $_GET[id_barang]");
	$data = mysqli_fetch_array($sql);?>

<form method='POST' action='ubah.php'>
	<span>id_barang</span><br/>
	<input type='text' name='id_barang' placeholder='id_barang' value='<?php echo @$data['id_barang']; ?>' required><br/>
	<span>nama_barang</span><br/>
	<input type='text' name='nama_barang' placeholder='nama_barang' value='<?php echo @$data['nama_barang']; ?>' required><br/>
	<span>merk</span><br/>
	<input type='text' name='merk' placeholder='merk' value='<?php echo @$data['merk']; ?>' required><br/>
	<span>harga</span><br/>
	<input type='text' name='harga' placeholder='harga' value='<?php echo @$data['harga']; ?>' required><br/>
	<span>kondisi</span><br/>
	<input type='text' name='kondisi' placeholder='kondisi' value='<?php echo @$data['kondisi']; ?>' required><br/>
	<span>jumlah</span><br/>
	<input type='text' name='jumlah' placeholder='jumlah' value='<?php echo @$data['jumlah']; ?>' required><br/>
<input type='submit' value='Simpan'><br/>
</form>

