<?php
include"koneksi.php";
$query=("SELECT * FROM data_mutasi_keluar WHERE id_mutkel='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Mutasi Keluar</h3>
<form class="form-horizontal" method="post" action="?halaman=mutasi_keluar_up" enctype="multipart/form-data">
	<input type="hidden" name="id_mutkel" value="<?php echo"$m[id_mutkel]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Siswa :</label>
		<div class="col-sm-4">
			<input type="text" name="id_siswa" class="form-control" placeholder="Masukan id_siswa" value="<?php echo"$m[id_siswa]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Sekolah :</label>
		<div class="col-sm-4">
			<input type="text" name="id_sekolah" class="form-control" placeholder="Masukan id_sekolah" value="<?php echo"$m[id_sekolah]";?>" required>
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
		<label class="col-sm-3 control-label">Sekolah Tujuan :</label>
		<div class="col-sm-4">
			<input type="text" name="sekolah_tujuan" class="form-control" placeholder="Masukan sekolah_tujuan" value="<?php echo"$m[sekolah_tujuan]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat :</label>
		<div class="col-sm-4">
			<input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" value="<?php echo"$m[alamat]";?>" required>
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
			<input type="text" name="tgl_input" class="form-control" placeholder="Masukan tanggal_input" value="<?php echo"$m[tgl_input]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_mutasi_keluar" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=mutasi_keluar" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
