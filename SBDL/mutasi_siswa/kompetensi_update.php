<?php
include'koneksi.php';
$query=("UPDATE data_kompetensi
	SET 
	nama='$_POST[nama_kompetensi]',
	WHERE id_pegawai='$_POST[id_kompetensi]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Kompetensi Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?halaman=kompetensi'>";
?>