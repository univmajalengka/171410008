<?php
include"koneksi.php";
$query=("DELETE FROM data_sekolah
		WHERE id_sekolah='$_GET[id_sekolah]'");
$lihat=mysqli_query($koneksi,$query)or die('Error,query failed. '.mysqli_error());
echo "<script>alert('Data Sekolah Berhasil Dihapus.');</script>";
echo "<meta http-equive='refresh' content='1; url=?halaman=sekolah'>";
?>