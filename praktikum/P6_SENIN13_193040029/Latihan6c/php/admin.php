<?php
require 'function.php';

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
  <div class="add">
    <button><a href="tambah.php">Tambah Data</a></button>
  </div>
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
    <?php $i = 1 ?>
    <?php foreach ($result as $i) : ?>
      <tr>
        <td><?= $i['id']; ?></td>
        <td>
          <a href=""><button class="ubah">Ubah</button></a>
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