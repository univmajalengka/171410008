<?php
include"koneksi.php";
$query=("SELECT * FROM data_kompetensi WHERE id_kompetensi='$_GET[id]'");
$galeri=mysqli_query($koneksi,$query) or die('Error,query failed. ' .mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Kompetensi</h3>
<form class="form-horizontal" method="post" action="?halaman=kompetensi_up" enctype="multipart/form-data">
	<input type="hidden" name="id_kompetensi" value="<?php echo"$m[id_kompetensi]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Kompetensi :</label>
		<div class="col-sm-4">
			<input type="text" name="nama_kompetensi" class="form-control" placeholder="Masukan nama_kompetensi" value="<?php echo"$m[nama_kompetensi]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">&nbsp;</label>
		<div class="col-sm-6">
			<input type="submit" name="tambah_kompetensi" class="btn btn-sm btn-primary" value="simpan">
			<a href="?halaman=kompetensi" class="btn btn-sm btn-danger">Batal</a>
			</div>
			</div>
			</form> 
