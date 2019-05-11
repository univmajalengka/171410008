<?php
include'koneksi.php';
$query=("INSERT INTO data_mutasi_masuk (id_mutmas,id_siswa,sekolah_asal,alamat,no_surat,tgl_surat,id_sekolah,alasan,tanggal_input)
	VALUES 
	('$_POST[id_mutmas]',
	'$_POST[id_siswa]',
	'$_POST[sekolah_asal]',
	'$_POST[alamat]',
	'$_POST[no_surat]',
	'$_POST[tgl_surat]',
	'$_POST[id_sekolah]',
	'$_POST[alasan]',
	'$_POST[tanggal_input]')");
$lihat = mysqli_query($koneksi,$query) or die ('Error,query failed.'.mysqli_error());
echo"<script>alert('Data Mutasi Masuk Berhasil Disimpan.');</script>";
echo"<meta http-equiv='refresh' content='1; url=?halaman=mutasi_masuk'>";
?>