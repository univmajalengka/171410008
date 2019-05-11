<?php
include("koneksi.php");
?>
<h3 align="center">Data Sekolah</h3>
<a href="?halaman=sekolah_tambah" class="btn btn-primary btn-sm">Tambah Sekolah</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Sekolah</th>
			<th>Nama Sekolah</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_sekolah");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_sekolah]";?></td>
			<td><?php echo"$r[nama_sekolah]";?></td>
			<td><?php echo"$r[alamat]";?></td>
			<td align="center">
				<a href="?halaman=sekolah_edit&id=<?php echo"$r[id_sekolah]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=sekolah_delete&id=<?php echo"$r[id_sekolah]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>