<?php
include'koneksi.php';
$query=("UPDATE data_siswa 
	SET 
	nama='$_POST[nama]',
	tempat_lahir='$_POST[tempat_lahir]',
	tanggal_lahir='$_POST[tanggal_lahir]',
	jnis_kelamin='$_POST[jenis_kelamin]',
	nis='$_POST[nis]',
	kelas='$_POST[kelas]',
	id_kompetensi='$_POST[id_kompetensi]',
	orang_tua='$_POST[orang_tua]'
	WHERE id_siswa='$_POST[id_siswa]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Siswa Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?halaman=siswa'>";
?>