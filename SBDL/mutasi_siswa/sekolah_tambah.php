<h3 align="center">Tambah Sekolah</h3>
<form class="form-horizontal" method="post" action="?halaman=sekolah_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Sekolah : </label>
		<div class="col-sm-4">
			<input type="text" name="id_sekolah" class="form-control" placeholder="Masukan id_sekolah" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama sekolah : </label>
		<div class="col-sm-4">
			<input type="text" name="nama_sekolah" class="form-control" placeholder="Masukan nama_sekolah" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat : </label>
		<div class="col-sm-4">
			<input type="text" name="alamat" class="form-control" placeholder="Masukan alamat" required>
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
