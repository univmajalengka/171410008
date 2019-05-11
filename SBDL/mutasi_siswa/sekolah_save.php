<?php
include'koneksi.php';
$query=("INSERT INTO data_sekolah (id_sekolah,nama_sekolah,alamat)
	VALUES 
	('$_POST[id_sekolah]',
	'$_POST[nama_sekolah]',
	'$_POST[alamat]')");
$lihat = mysqli_query($koneksi,$query) or die ('Error,query failed.'.mysqli_error());
echo"<script>alert('Data Sekolah Berhasil Disimpan.');</script>";
echo"<meta http-equiv='refresh' content='1; url=?halaman=sekolah'>";
?>