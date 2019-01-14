<?php

$koneksi = mysqli_connect("127.0.0.1","root","","inventaris");


// cek koneksi
if (mysqli_connect_errno())
{
	echo "koneksi database gagal : " .mysqli_connect_error();
}

?>