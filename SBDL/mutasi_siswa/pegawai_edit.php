<?php
include"koneksi.php";
$query=("SELECT * FROM data_pegawai WHERE id_pegawai='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Pegawai</h3>
<form class="form-horizontal" method="post" action="?halaman=pegawai_up" enctype="multipart/form-data">
	<input type="hidden" name="id_pegawai" value="<?php echo"$m[id_pegawai]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Pegawai :</label>
		<div class="col-sm-4">
			<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo"$m[nama]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">User :</label>
		<div class="col-sm-4">
			<input type="text" name="user" class="form-control" placeholder="Masukan user" value="<?php echo"$m[user]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Password :</label>
		<div class="col-sm-4">
			<input type="text" name="password" class="form-control" placeholder="Masukan password" value="<?php echo"$m[password]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_pegawai" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=pegawai" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
