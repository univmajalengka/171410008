<?php
include"koneksi.php";
$query=("DELETE FROM data_mutasi_keluar 
		WHERE id_mutkel='$_GET[id_mutkel]'");
$lihat=mysqli_query($koneksi,$query)or die('Error,query failed. '.mysqli_error());
echo "<script>alert('Data Mutasi Keluar Berhasil Dihapus.');</script>";
echo "<meta http-equive='refresh' content='1; url=?halaman=mutasi_keluar'>";
?>