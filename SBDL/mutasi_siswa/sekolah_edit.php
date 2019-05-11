<?php
include"koneksi.php";
$query=("SELECT * FROM data_sekolah WHERE id_sekolah='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Sekolah</h3>
<form class="form-horizontal" method="post" action="?halaman=sekolah_up" enctype="multipart/form-data">
	<input type="hidden" name="id_sekolah" value="<?php echo"$m[id_sekolah]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Sekolah :</label>
		<div class="col-sm-4">
			<input type="text" name="nama_sekolah" class="form-control" placeholder="Masukan nama_sekolah" value="<?php echo"$m[nama_sekolah]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat :</label>
		<div class="col-sm-4">
			<input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" value="<?php echo"$m[alamat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_sekolah" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=sekolah" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
