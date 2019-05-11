<?php
include'koneksi.php';
$query=("UPDATE data_sekolah
	SET 
	nama_sekolah='$_POST[nama_sekolah]',
	alamat='$_POST[alamat]',
	WHERE id_sekolah='$_POST[id_sekolah]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Sekolah Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?halaman=sekolah'>";
?>