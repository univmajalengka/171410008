<?php
include'koneksi.php';
$query=("UPDATE data_mutasi_keluar
	SET 
	id_siswa='$_POST[id_siswa]',
	id_sekolah='$_POST[id_sekolah]',
	no_surat='$_POST[no_surat]',
	tgl_surat='$_POST[tgl_surat]',
	sekolah_tujuan='$_POST[sekolah_tujuan]',
	alamat='$_POST[alamat]',
	alasan='$_POST[alasan]',
	tgl_input='$_POST[tgl_input]',
	WHERE id_mutkel='$_POST[id_mutkel]'");
$lihat=mysqli_query($koneksi,$query) or die('Error,query failed.'.mysqli_error());
echo "<script>alert('Data Mutasi Keluar Berhasil Diupdate.')</script>";
echo "<meta http-equiv='refresh' content='1; url=?halaman=mutasi_keluar'>";
?>