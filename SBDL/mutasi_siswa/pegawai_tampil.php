<?php
include("koneksi.php");
?>
<h3 align="center">Data Pegawai</h3>
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Pegawai</th>
			<th>Nama Pegawai</th>
			<th>User</th>
			<th>Passsword</th>
		</tr>
<?php
$no=1;
	$query=("SELECT * FROM data_pegawai WHERE id_pegawai='$_GET[id]'");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
<tr>
			<td><?php echo"$r[id_pegawai]";?></td>
			<td><?php echo"$r[nama]";?></td>
			<td><?php echo"$r[user]";?></td>
			<td><?php echo"$r[password]";?></td>
			</tr>
<?php
$no++
} ?>
</table>
</div>
<a href="?halaman=pegawai" class="btn btn-sm btn-primary">Kembali</a>