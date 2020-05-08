<?php
require 'function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM alat_musik WHERE
          nama LIKE '%$keyword%' OR
          merk LIKE '%$keyword%' OR
          harga LIKE '%$keyword%' 
          ";
  if ($alat_musik = query($query)) {
    echo '<div class="alert alert-success" role="alert">
          Data berhasil ditemukan!
        </div>';
  } else {
    echo '<div class="alert alert-warning" role="alert">
            Data tidak ditemukan!
          </div>';
  }
} else {
  $query = "SELECT * FROM alat_musik";
  $alat_musik = query($query);
}

$result = query("SELECT * FROM alat_musik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <style>
    table {
      margin: auto;
      background-color: seagreen;
      font-family: arial;
    }

    img {
      border-radius: 20px;
    }

    .ubah {
      background-color: black;
      color: white;
      border-radius: 10px;
    }

    .hapus {
      background-color: maroon;
      color: white;
      border-radius: 10px;
    }

    .kembali {
      background-color: blueviolet;
      color: white;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <h1>
    <center><b>ADMIN</b></center>
  </h1>
  <a class="btn btn-warning mb-3" href="tambah.php">Tambah Data</a>
  <a class="btn btn-danger mb-3 float-right" href="logout.php">Logout</a>
  <form action="" method="POST">
    <input type="text" name="keyword" size="50" placeholder="Masukkan Keyword Di Pencarian..." autocomplete="off" autofocus>
    <button type="submit" name="cari">
      Cari!
    </button>
  </form>
  <table border="1" cellpadding="12" cellspacing="0">
    <tr>
      <th>NO</th>
      <th>OPSI</th>
      <th>GAMBAR</th>
      <th>NAMA</th>
      <th>MERK</th>
      <th>CARA BERMAIN</th>
      <th>HARGA</th>
    </tr>

    <?php if (empty($result)) : ?>
      <tr>
        <td colspan="6">
          <p><i><b>Alat Musik Tidak Ditemukan!</b></i></p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1 ?>
    <?php foreach ($result as $i) : ?>
      <tr>
        <td><?= $i['id']; ?></td>
        <td>
          <a href="ubah.php?id=<?= $i['id']; ?>"><button class="ubah">Ubah</button></a>
          <a href="hapus.php?id=<?= $i['id']; ?>"><button class="hapus" onclick="return confirm('Hapus Data ?')">Hapus</button></a>
        </td>
        <td><img width="100px" src="../assets/img/<?= $i['gambar']; ?>"></td>
        <td><?= $i['nama_alat']; ?></td>
        <td><?= $i['merk']; ?></td>
        <td><?= $i['cara_permainan']; ?></td>
        <td><?= $i['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    <tr>
      <td>
        <button class="kembali">
          <center><a href="../index.php">Kembali</a></center>
        </button>
      </td>
    </tr>
  </table>

</body>

</html>