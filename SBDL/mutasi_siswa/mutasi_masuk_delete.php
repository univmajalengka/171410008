<?php
include"koneksi.php";
$query=("DELETE FROM data_mutasi_masuk 
		WHERE id_mutmas='$_GET[id_mutmas]'");
$lihat=mysqli_query($koneksi,$query)or die('Error,query failed. '.mysqli_error());
echo "<script>alert('Data Mutasi Masuk Berhasil Dihapus.');</script>";
echo "<meta http-equive='refresh' content='1; url=?halaman=mutasi_masuk'>";
?>