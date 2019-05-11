<h3 align="center">Tambah Pegawai</h3>
<form class="form-horizontal" method="post" action="?halaman=pegawai_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Pegawai : </label>
		<div class="col-sm-4">
			<input type="text" name="id_pegawai" class="form-control" placeholder="Masukan id_pegawai" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Pegawai : </label>
		<div class="col-sm-4">
			<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">User : </label>
		<div class="col-sm-4">
			<input type="text" name="user" class="form-control" placeholder="Masukan user" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Password : </label>
		<div class="col-sm-4">
			<input type="text" name="Password" class="form-control" placeholder="Password" required>
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
																																																	