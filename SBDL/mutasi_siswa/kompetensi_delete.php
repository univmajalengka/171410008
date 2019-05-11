<?php
include"koneksi.php";
$query=("DELETE FROM data_kompetensi
		WHERE id_kompetensi='$_GET[id_kompetensi]'");
$lihat=mysqli_query($koneksi,$query)or die('Error,query failed. '.mysqli_error());
echo "<script>alert('Data Kompetensi Berhasil Dihapus.');</script>";
echo "<meta http-equive='refresh' content='1; url=?halaman=kompetensi'>";
?>