<!DOCTYPE html>
<html>
<head>
	<title>My web</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
		<nav class="navbar navbar-default navabar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Data Mutasi Siswa</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="?halaman=default">Home</a></li>
					<li><a href="?halaman=siswa">Siswa</a></li>
					<li><a href="?halaman=pegawai">Pegawai</a></li>
					<li><a href="?halaman=mutasi_masuk">Mutasi Masuk</a></li>
					<li><a href="?halaman=mutasi_keluar">Mutasi Keluar</a></li>
					<li><a href="?halaman=kompetensi">Kompetensi</a></li>
					<li><a href="?halaman=sekolah">Sekolah</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">

			<div>
				<div class="jumbotron">
					<?php
					include("halaman.php");
					?>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title" align="center">copyright &copy; Dinda S Wulansari</h3>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>