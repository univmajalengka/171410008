<?php
include'koneksi.php';
$query=("INSERT INTO data_kompetensi (id_kompetensi,nama_kompetensi)
	VALUES 
	('$_POST[id_kompetensi]',
	'$_POST[nama_kompetensi]')");
$lihat = mysqli_query($koneksi,$query) or die ('Error,query failed.'.mysqli_error());
echo"<script>alert('Data Kompetensi Keluar Berhasil Disimpan.');</script>";
echo"<meta http-equiv='refresh' content='1; url=?halaman=kompetensi'>";
?>