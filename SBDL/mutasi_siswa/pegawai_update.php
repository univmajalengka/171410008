<?php
include'koneksi.php';
$query=("UPDATE data_pegawai
	SET 
	nama='$_POST[nama]',
	user='$_POST[user]',
	password='$_POST[password]',
	WHERE id_pegawai='$_POST[id_pegawai]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Pegawai Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?halaman=pegawai'>";
?>