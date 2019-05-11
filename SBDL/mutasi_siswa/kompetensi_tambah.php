<h3 align="center">Tambah Kompetensi</h3>
<form class="form-horizontal" method="post" action="?halaman=kompetensi_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Kompetensi : </label>
		<div class="col-sm-4">
			<input type="text" name="id_kompetensi" class="form-control" placeholder="Masukan id_kompetensi" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Kompetensi : </label>
		<div class="col-sm-4">
			<input type="text" name="nama_kompetensi" class="form-control" placeholder="Masukan nama_kompetensi" required>
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
