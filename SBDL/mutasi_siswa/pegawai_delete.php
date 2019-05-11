<?php
include"koneksi.php";
$query=("DELETE FROM data_pegawai
		WHERE id_pegawai='$_GET[id_pegawai]'");
$lihat=mysqli_query($koneksi,$query)or die('Error,query failed. '.mysqli_error());
echo "<script>alert('Data Pegawai Berhasil Dihapus.');</script>";
echo "<meta http-equive='refresh' content='1; url=?halaman=pegawai'>";
?>