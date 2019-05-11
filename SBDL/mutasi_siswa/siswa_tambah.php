<h3 align="center">Tambah Siswa</h3>
<form class="form-horizontal" method="post" action="?halaman=siswa_ad" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Siswa : </label>
		<div class="col-sm-4">
			<input type="text" name="id_siswa" class="form-control" placeholder="Masukan id_siswa" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Siswa : </label>
		<div class="col-sm-4">
			<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tempat Lahir : </label>
		<div class="col-sm-4">
			<input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan tempat_lahir" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal Lahir : </label>
		<div class="col-sm-4">
			<input type="text" name="tanggal_lahir" class="form-control" placeholder="Masukan tanggal_lahir" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jenis Kelamin : </label>
		<div class="col-sm-4">
			<input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukan Jenis Kelamin" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kelas : </label>
		<div class="col-sm-4">
			<input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Kompetensi : </label>
		<div class="col-sm-4">
			<input type="text" name="id_kompetensi" class="form-control" placeholder="Masukan Id Kompetensi" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Orang Tua : </label>
		<div class="col-sm-4">
			<input type="text" name="orang_tua" class="form-control" placeholder="Masukan Orang Tua" required>
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
