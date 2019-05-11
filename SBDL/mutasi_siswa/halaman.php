<?php
$halaman=(isset($_GET['halaman'])) ?$_GET['halaman']:"default";
switch($halaman){
	case'siswa':include"siswa.php";break;
	case'siswa_edit':include"siswa_edit.php";break;
	case'siswa_hapus':include"siswa_hapus.php";break;
	case'siswa_tambah':include"siswa_tambah.php";break;
	case'siswa_ad':include"siswa_save.php";break;
	case'siswa_up':include"siswa_update.php";break;
	case'siswa_delete':include"siswa_delete.php";break;
	case'default':include"home.php";break;

	case'pegawai':include"pegawai.php";break;
	case'pegawai_edit':include"pegawai_edit.php";break;
	case'pegawai_hapus':include"pegawai_hapus.php";break;
	case'pegawai_tambah':include"pegawai_tambah.php";break;
	case'pegawai_ad':include"pegawai_save.php";break;
	case'pegawai_up':include"pegawai_update.php";break;
	case'pegawai_delete':include"pegawai_delete.php";break;
	case'default':include"home.php";break;

	case'mutasi_masuk':include"mutasi_masuk.php";break;
	case'mutasi_masuk_edit':include"mutasi_masuk_edit.php";break;
	case'mutasi_masuk_hapus':include"mutasi_masuk_hapus.php";break;
	case'mutasi_masuk_tambah':include"mutasi_masuk_tambah.php";break;
	case'mutasi_masuk_ad':include"mutasi_masuk_save.php";break;
	case'mutasi_masuk_up':include"mutasi_masuk_update.php";break;
	case'mutasi_masuk_delete':include"mutasi_masuk_delete.php";break;
	case'default':include"home.php";break;
	
	case'mutasi_keluar':include"mutasi_keluar.php";break;
	case'mutasi_keluar_edit':include"mutasi_keluar_edit.php";break;
	case'mutasi_keluar_hapus':include"mutasi_keluar_hapus.php";break;
	case'mutasi_keluar_tambah':include"mutasi_keluar_tambah.php";break;
	case'mutasi_keluar_ad':include"mutasi_keluar_save.php";break;
	case'mutasi_keluar_up':include"mutasi_keluar.php";break;
	case'mutasi_keluar_delete':include"mutasi_keluar_delete.php";break;
	case'default':include"home.php";break;

	case'kompetensi':include"kompetensi.php";break;
	case'kompetensi_edit':include"kompetensi_edit.php";break;
	case'kompetensi_hapus':include"kompetensi_hapus.php";break;
	case'kompetensi_tambah':include"kompetensi_tambah.php";break;
	case'kompetensi_ad':include"kompetensi_save.php";break;
	case'kompetensi_up':include"kompetensi_update.php";break;
	case'kompetensi_delete':include"kompetensi_delete.php";break;
	case'default':include"home.php";break;

	case'sekolah':include"sekolah.php";break;
	case'sekolah_edit':include"sekolah_edit.php";break;
	case'sekolah_hapus':include"sekolah_hapus.php";break;
	case'sekolah_tambah':include"sekolah_tambah.php";break;
	case'sekolah_ad':include"sekolah_save.php";break;
	case'sekolah_up':include"sekolah_update.php";break;
	case'sekolah_delete':include"sekolah_delete.php";break;
	case'default':include"home.php";break;
}
?>