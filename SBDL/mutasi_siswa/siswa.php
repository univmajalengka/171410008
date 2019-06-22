<?php
include("koneksi.php");
?>
<h3 align="center">Data Siswa</h3>
<a href="?halaman=siswa_tambah" class="btn btn-primary btn-sm">Tambah Siswa</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Siswa</th>
			<th>Nama Siswa</th>
			<th>Nama Kompetensi</th>
			<th>Tanggal lahir</th>
			<th>Jenis Kelamin</th>
			<th>Orang Tua</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM view_siswa");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_siswa]";?></td>
			<td><?php echo"$r[nama]";?></td>
			<td><?php echo"$r[nama_kompetensi]";?></td>
			<td><?php echo"$r[tanggal_lahir]";?></td>
			<td><?php echo"$r[jenis_kelamin]";?></td>
			<td><?php echo"$r[orang_tua]";?></td>
			<td align="center">
				<a href="?halaman=siswa_edit&id=<?php echo"$r[id_siswa]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=siswa_delete&id=<?php echo"$r[id_siswa]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>