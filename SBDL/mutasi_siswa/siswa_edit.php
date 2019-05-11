<?php
include"koneksi.php";
$query=("SELECT * FROM data_siswa WHERE id_siswa='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Siswa</h3>
<form class="form-horizontal" method="post" action="?halaman=siswa_up" enctype="multipart/form-data">
	<input type="hidden" name="id_siswa" value="<?php echo"$m[id_siswa]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama :</label>
		<div class="col-sm-4">
			<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo"$m[nama]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tempat Lahir :</label>
		<div class="col-sm-4">
			<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" value="<?php echo"$m[tempat_lahir]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal lahir :</label>
		<div class="col-sm-4">
			<input type="text" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir" value="<?php echo"$m[tanggal_lahir]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jenis Kelamin :</label>
		<div class="col-sm-4">
			<input type="text" name="jeniskelamin" class="form-control" placeholder="Masukan Jenis Kelamin" value="<?php echo"$m[jenis_kelamin]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kelas :</label>
		<div class="col-sm-4">
			<input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas" value="<?php echo"$m[kelas]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id kompetensi :</label>
		<div class="col-sm-4">
			<input type="text" name="id_kompetensi" class="form-control" placeholder="Masukan id_kompetensi" value="<?php echo"$m[id_kompetensi]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Orang Tua:</label>
		<div class="col-sm-4">
			<input type="text" name="orang_tua" class="form-control" placeholder="Masukan orang_tua" value="<?php echo"$m[orang_tua]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_siswa" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=siswa" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
