<?php
include("koneksi.php");
?>
<h3 align="center">Data Pegawai</h3>
<a href="?halaman=pegawai_tambah" class="btn btn-primary btn-sm">Tambah Pegawai</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Pegawai</th>
			<th>Nama Pegawai</th>
			<th>User</th>
			<th>Passsword</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_pegawai");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_pegawai]";?></td>
			<td><?php echo"$r[nama]";?></td>
			<td><?php echo"$r[user]";?></td>
			<td><?php echo"$r[password]";?></td>
			<td align="center">
				<a href="?halaman=pegawai_edit&id=<?php echo"$r[id_pegawai]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=pegawai_delete&id=<?php echo"$r[id_pegawai]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>