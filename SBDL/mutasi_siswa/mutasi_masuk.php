<?php
include("koneksi.php");
?>
<h3 align="center">Data Mutasi Masuk</h3>
<a href="?halaman=mutasi_masuk_tambah" class="btn btn-primary btn-sm">Tambah Mutasi Masuk</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Mutmas</th>
			<th>Nama Siswa</th>
			<th>Alamat</th>
			<th>Tanggal_Lahir</th>
			<th>Orang Tua</th>
			<th>Sekolah Asal</th>
			<th>Alasan</th>
			<th>Tanggal Input</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM view_mutasi_masuk");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_mutmas]";?></td>
			<td><?php echo"$r[nama]";?></td>
			<td><?php echo"$r[alamat]";?></td>
			<td><?php echo"$r[tanggal_lahir]";?></td>
			<td><?php echo"$r[orang_tua]";?></td>
			<td><?php echo"$r[sekolah_asal]";?></td>
			<td><?php echo"$r[alasan]";?></td>
			<td><?php echo"$r[tanggal_input]";?></td>
			<td align="center">
				<a href="?halaman=mutasi_masuk_edit&id=<?php echo"$r[id_mutmas]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=mutasi_masuk_delete&id=<?php echo"$r[id_mutmas]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>