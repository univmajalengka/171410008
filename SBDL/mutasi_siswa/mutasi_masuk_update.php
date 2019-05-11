<?php
include'koneksi.php';
$query=("UPDATE data_mutasi_masuk
	SET 
	id_siswa='$_POST[id_siswa]',
	sekolah_asal='$_POST[sekolah_asal]',
	alamat='$_POST[alamat]',
	no_surat='$_POST[no_surat]',
	tgl_surat='$_POST[tgl_surat]',
	id_sekolah='$_POST[id_sekolah]',
	alasan='$_POST[alasan]',
	tanggal_input='$_POST[tanggal_input]',
	WHERE id_mutmas='$_POST[id_mutmas]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Mutasi Masuk Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?halaman=mutasi_masuk'>";
?>