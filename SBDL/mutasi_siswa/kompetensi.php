<?php
include("koneksi.php");
?>
<h3 align="center">Data Kompetensi</h3>
<a href="?halaman=kompetensi_tambah" class="btn btn-primary btn-sm">Tambah Kompetensi</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Kompetensi</th>
			<th>Nama Kompetensi</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_kompetensi");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_kompetensi]";?></td>
			<td><?php echo"$r[nama_kompetensi]";?></td>
			<td align="center">
				<a href="?halaman=kompetensi_edit&id=<?php echo"$r[id_kompetensi]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=kompetensi_delete&id=<?php echo"$r[id_kompetensi]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>