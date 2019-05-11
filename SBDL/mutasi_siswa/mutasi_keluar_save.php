<?php
include'koneksi.php';
$query=("INSERT INTO data_mutasi_keluar (id_mutkel,id_siswa,id_sekolah,no_surat,tgl_surat,sekolah_tujuan,alamat,alasan,tgl_input)
	VALUES 
	('$_POST[id_mutkel]',
	'$_POST[id_siswa]',
	'$_POST[id_sekolah]',
	'$_POST[no_surat]',
	'$_POST[tgl_surat]',
	'$_POST[sekolah_tujuan]',
	'$_POST[alamat]',
	'$_POST[alasan]',
	'$_POST[tgl_input]')");
$lihat = mysqli_query($koneksi,$query) or die ('Error,query failed.'.mysqli_error());
echo"<script>alert('Data Mutasi Keluar Berhasil Disimpan.');</script>";
echo"<meta http-equiv='refresh' content='1; url=?halaman=mutasi_keluar'>";
?>