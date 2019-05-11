<?php
include'koneksi.php';
$query=("INSERT INTO data_pegawai (id_pegawai,nama,user,password)
	VALUES 
	('$_POST[id_pegawai]',
	'$_POST[nama]',
	'$_POST[user]',
	'$_POST[password]')");
$lihat = mysqli_query($koneksi,$query) or die ('Error,query failed.'.mysqli_error());
echo"<script>alert('Data Pegawai Berhasil Disimpan.');</script>";
echo"<meta http-equiv='refresh' content='1; url=?halaman=pegawai'>";
?>