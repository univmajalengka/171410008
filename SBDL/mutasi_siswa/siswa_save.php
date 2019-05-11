<?php
include'koneksi.php';
$query=("INSERT INTO data_siswa (id_siswa,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,kelas,id_kompetensi,orang_tua)
	VALUES 
	('$_POST[id_siswa]',
	'$_POST[nama]',
	'$_POST[tempat_lahir]',
	'$_POST[tanggal_lahir]',
	'$_POST[jenis_kelamin]',
	'$_POST[kelas]',
	'$_POST[id_kompetensi]',
	'$_POST[orang_tua]')");
$lihat = mysqli_query($koneksi,$query) or die ('Error,query failed.'.mysqli_error());
echo"<script>alert('Data Siswa Berhasil Disimpan.');</script>";
echo"<meta http-equiv='refresh' content='1; url=?halaman=siswa'>";
?>