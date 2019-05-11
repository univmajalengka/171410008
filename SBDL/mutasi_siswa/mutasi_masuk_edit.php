<?php
include"koneksi.php";
$query=("SELECT * FROM data_mutasi_masuk WHERE id_mutmas='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Mutasi Masuk</h3>
<form class="form-horizontal" method="post" action="?halaman=mutasi_masuk_up" enctype="multipart/form-data">
	<input type="hidden" name="id_mutmas" value="<?php echo"$m[id_mutmas]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Siswa :</label>
		<div class="col-sm-4">
			<input type="text" name="id_siswa" class="form-control" placeholder="Masukan id_siswa" value="<?php echo"$m[id_siswa]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Sekolah Asal :</label>
		<div class="col-sm-4">
			<input type="text" name="sekolah_asal" class="form-control" placeholder="Masukan sekolah_asal" value="<?php echo"$m[sekolah_asal]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat :</label>
		<div class="col-sm-4">
			<input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" value="<?php echo"$m[alamat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">No Surat :</label>
		<div class="col-sm-4">
			<input type="text" name="no_surat" class="form-control" placeholder="Masukan no_surat" value="<?php echo"$m[no_surat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tgl Surat :</label>
		<div class="col-sm-4">
			<input type="text" name="tgl_surat" class="form-control" placeholder="Masukan tgl_surat" value="<?php echo"$m[tgl_surat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Sekolah :</label>
		<div class="col-sm-4">
			<input type="text" name="id_sekolah" class="form-control" placeholder="Masukan id_sekolah" value="<?php echo"$m[id_sekolah]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alasan :</label>
		<div class="col-sm-4">
			<input type="text" name="alasan" class="form-control" placeholder="Masukan alasan" value="<?php echo"$m[alasan]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal input:</label>
		<div class="col-sm-4">
			<input type="text" name="tanggal_input" class="form-control" placeholder="Masukan tanggal_input" value="<?php echo"$m[tanggal_input]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_mutasi_masuk" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=mutasi_masuk" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
