<?php
session_start();

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
	exit;
}


require 'functions.php';

$id = $_GET['id'];
$smartphone = query("SELECT * FROM alat_musik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php'
				</script>";
	} else {
		echo "<script>
				alert('data gagal di ubah!');
				document.location.href = 'index.php'
				</script>";
	}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Ubah Alat Musik</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-image: url(../image/yy.jpg); background-position: -100px;">
	<div class="con" style="margin-left: 500px;">

		<div class="row">
			<div class="col-lg-6 col-md-4">
				<div class="thumbnail">
					<img src="../image/cc.png" alt="...">
					<div class="caption">


						<form method="post" action="">
							<ul>
								<h3 style="color: black;">Ubah Data Alat Musik</h3>
								<li>
									<label for="gambar">Gambar :</label><br>
									<input type="text" name="gambar" id="gambar" required><br><br>
								</li>
								<li>
									<label for="nama_alat">Tipe :</label><br>
									<input type="text" name="nama_alat" id="nama_alat" required><br><br>
								</li>
								<li>
									<label for="merk">Merk :</label><br>
									<select name="merk" id="merk" required><br><br>
										<option value="">-Merk-</option>
										<option value="yamaha">Yamaha</option>
										<option value="speeds">Speeds</option>
										<option value="ostrava">Ostrava</option>
										<option value="marvel">Marvel</option>
										<option value="marchingband">Marchingband</option>
										<option value="maxtone">Maxtone</option>
										<option value="gaia_lever">Gaia Lever</option>
									</select>
								</li><br>
								<li>
									<label for="cara_permainan">Cara Permainan :</label><br>
									<select name="cara_permainan" id="cara_permainan" required><br><br>
										<option value="">-Cara Permainan-</option>
										<option value="Petik">Petik</option>
										<option value="Pukul">Pukul</option>
										<option value="Tiup">Tiup</option>
										<option value="Tekan">Tekan</option>
										<option value="gesek">Gesek</option>
									</select>
								</li><br>
								<li>
									<label for="harga">Harga :</label><br>
									<input type="harga" name="harga" id="harga" required><br><br>
								</li>
								<li>
									<button type="submit" name="tambah">Tambah Data!</button>
								</li>
							</ul>
							<td>
								<button class="kembali">
									<center><a href="admin.php">Kembali</a></center>
								</button>
							</td>

						</form>


					</div>
				</div>
			</div>
		</div>
	</div>



</body>

</html>