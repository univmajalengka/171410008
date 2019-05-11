<?php
include"koneksi.php";
$query=("DELETE FROM data_siswa 
		WHERE id_siswa='$_GET[id_siswa]'");
$lihat=mysqli_query($koneksi,$query)or die('Error,query failed. '.mysqli_error());
echo "<script>alert('Data Siswa Berhasil Dihapus.');</script>";
echo "<meta http-equive='refresh' content='1; url=?halaman=siswa'>";
?>