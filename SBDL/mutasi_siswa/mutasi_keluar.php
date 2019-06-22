<?php
include("koneksi.php");
?>
<h3 align="center">Data Mutasi Keluar</h3>
<a href="?halaman=mutasi_keluar_tambah" class="btn btn-primary btn-sm">Tambah Mutasi Keluar</a><br /><br />
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<tr>
			<th>Id Mutkel</th>
			<th>Id Sekolah</th>
			<th>Nama Siswa</th>
			<th>Alamat</th>
			<th>Orang Tua</th>
			<th>Sekolah Tujuan</th>
			<th>Alasan</th>
			<th>Tanggal Input</th>
			<th>Aksi</th>
		</tr>
<?php
	$no=1;
	$query=("SELECT * FROM view_mutasi_keluar");
	$lihat = mysqli_query($koneksi, $query) or die ('Error, query failed. ' .mysqli_error());
	$jml_data=mysqli_num_rows($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
		<tr>
			<td><?php echo"$r[id_mutkel]";?></td>
			<td><?php echo"$r[id_sekolah]";?></td>
			<td><?php echo"$r[nama]";?></td>
			<td><?php echo"$r[alamat]";?></td>
			<td><?php echo"$r[orang_tua]";?></td>
			<td><?php echo"$r[sekolah_tujuan]";?></td>
			<td><?php echo"$r[alasan]";?></td>
			<td><?php echo"$r[tgl_input]";?></td>
			<td align="center">
				<a href="?halaman=mutasi_keluar_edit&id=<?php echo"$r[id_mutkel]";?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<a href="?halaman=mutasi_keluar_delete&id=<?php echo"$r[id_mutkel]";?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		</tr>
<?php
$no++;
	} ?>
</table>
</div>