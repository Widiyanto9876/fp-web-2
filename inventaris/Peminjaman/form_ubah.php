<?php
	include'../koneksi.php';
	$sql = mysqli_query($db, "SELECT * FROM peminjaman WHERE id_peminjaman = $_GET[id_peminjaman]");
	$data = mysqli_fetch_array($sql);?>

<form method='POST' action='ubah.php'>
	<span>id_peminjaman</span><br/>
	<input type='text' name='id_peminjaman' placeholder='id_peminjaman' value='<?php echo @$data['id_peminjaman']; ?>' required><br/>
	<span>id_barang</span><br/>
	<input type='text' name='id_barang' placeholder='id_barang' value='<?php echo @$data['id_barang']; ?>' required><br/>
	<span>nim</span><br/>
	<input type='text' name='nim' placeholder='nim' value='<?php echo @$data['nim']; ?>' required><br/>
	<span>nik</span><br/>
	<input type='text' name='nik' placeholder='nik' value='<?php echo @$data['nik']; ?>' required><br/>
	<span>jumlah</span><br/>
	<input type='text' name='jumlah' placeholder='jumlah' value='<?php echo @$data['jumlah']; ?>' required><br/>
	<span>tgl_pinjam</span><br/>
	<input type='text' name='tgl_pinjam' placeholder='tgl_pinjam' value='<?php echo @$data['tgl_pinjam']; ?>' required><br/>
	<span>tgl_kembali</span><br/>
	<input type='text' name='tgl_kembali' placeholder='tgl_kembali' value='<?php echo @$data['tgl_kembali']; ?>' required><br/>
<input type='submit' value='Simpan'><br/>
</form>