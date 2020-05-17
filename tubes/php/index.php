<?php

session_start();

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
	exit;
}



require 'functions.php';

if (isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$alat_musik = query("SELECT * FROM alat_musik WHERE
			gambar like '%$keyword%'OR
			nama_alat like '%$keyword%'OR
			merk like '%$keyword%'OR
			cara_permainan like '%$keyword%'OR
			harga like '%$keyword%'
			 ");
} else {
	$alat_musik = query("SELECT * FROM alat_musik");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Alat Musik</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-image: url(../image/bg.webp);">
	<!-- awal navbar -->
	<nav class="navbar navbar-default">
		<form class="navbar-form  navbar-left" action="" method="get">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search" name="keyword" autocomplete="off" id="keyword">
			</div>
			<button type="submit" class="btn btn-default" name="cari" id="cari">Submit</button>
		</form>
		<div class="container-fluid  btn-primary">
			<!-- Brand and toggle get grouped for better mobile display -->
			<form class="navbar-form  navbar-right">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<button type="submit" class="btn btn-default"><a href="tambah.php">Tambah Data Alat Musik</a></button>
					<button type="submit" class="btn btn-default"><a href="logout.php">Log Out</a></button>
				</div><!-- /.container-fluid -->
			</form>
	</nav>
	<!-- akhir navbar -->
	<div class="container" id="container">

		<div class="contener" align="center">


			<div class="atur">
				<h3 style="margin: 50px; color: white;">Daftar Alat Musik</h3>



				<table class="table table-bordered" style="color: white;">

					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Nama Alat</th>
						<th>Merk</th>
						<th>Cara Permainan</th>
						<th>Harga</th>
					</tr>

					<?php if (empty($alat_musik)) : ?>
						<tr>
							<td colspan="6">Data Tidak Ditemukan</td>
						</tr>
					<?php endif; ?>

					<?php $i = 1; ?>
					<?php foreach ($alat_musik as $a) : ?>
						<tr align="center">
							<td><?= $i++;  ?></td>
							<td><img src="../image/<?= $a['gambar']; ?>" style="width: 50px; height: 50px;"></td>
							<td><?= $a['nama_alat']; ?></td>
							<td><?= $a['merk']; ?></td>
							<td><?= $a['cara_permainan']; ?></td>
							<td><?= $a['harga']; ?></td>
							<td>
								<a href="ubah.php?id=<?= $a['id']; ?>">Ubah</a> |
								<a href="Hapus.php?id=<?= $a['id']; ?>" onclick="return confirm('yakin!');">Hapus</a>
							</td>


						</tr>
					<?php endforeach; ?>
				</table>

			</div>
		</div>

	</div>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="../js/script1.js"></script>
</body>

</html>