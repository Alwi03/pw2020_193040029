<?php

require 'functions.php';
$keyword = $_GET['keyword'];
$alat_musik = query("SELECT * FROM alat_musik WHERE
			gambar like '%$keyword%'OR
			nama_alat like '%$keyword%'OR
			merk like '%$keyword%'OR
			cara_permainan like '%$keyword%'OR
			harga like '%$keyword%'");

?>

<table class="table table-bordered" style="color: white;">

  <tr>
    <th>No</th>
    <th>Gambar</th>
    <th>Nama Alat</th>
    <th>Merk</th>
    <th>Cara permainan</th>
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
      <td><img src="../image/<?= $s['gambar']; ?>" style="width: 50px; height: 50px;"></td>
      <td><?= $a['nama_alat']; ?></td>
      <td><?= $a['merk']; ?></td>
      <td><?= $a['cara_permainan']; ?></td>
      <td><?= $a['harga']; ?></td>
      <td>
        <a href="ubah.php?id=<?= $s['id']; ?>">Ubah</a> |
        <a href="Hapus.php?id=<?= $s['id']; ?>" onclick="return confirm('yakin!');">Hapus</a>
      </td>


    </tr>
  <?php endforeach; ?>
</table>