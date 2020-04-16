<?php 
$buku = [
    [
        "photo" => "gitar.jpg",
        "alat musik" => "Gitar",
        "merk" => "Yamaha",
        "cara" => "Dipetik",
        "harga" => "Rp.1.999.000"
    ],
    [
        "photo" => "bass.jpg",
        "alat musik" => "Bass",
        "merk" => "Yamaha",
        "cara" => "Dipetik",
        "harga" => "Rp.2.500.000"
    ],
    [
        "photo" => "drum.jpg",
        "alat musik" => "Drum",
        "merk" => "Yamaha",
        "cara" => "Dipukul Menggunakan Stick drum",
        "harga" => "Rp.10.000.000"
    ],
    [
        "photo" => "pianika.jpg",
        "alat musik" => "Pianika",
        "merk" => "Speeds",
        "cara" => "Ditiup dan Ditekan",
        "harga" => "Rp.80.000"
    ],
    [
        "photo" => "piano.jpg",
        "alat musik" => "Piano",
        "merk" => "Yamaha",
        "cara" => "Ditekan",
        "harga" => "Rp.9.000.000"
    
    ],
    [
        "photo" => "terompet.jpg",
        "alat musik" => "Terompet",
        "merk" => "Ostrava",
        "cara" => "Ditiup",
        "harga" => "Rp.9.500.000"
    ],
    [
        "photo" => "ukulele.jpg",
        "alat musik" => "Ukulele",
        "merk" => "Yamaha",
        "cara" => "Dipetik",
        "harga" => "Rp.850.000"
    ],
    [
        "photo" => "bass.jpg",
        "alat musik" => "Bass",
        "merk" => "Yamaha",
        "cara" => "Dipetik",
        "harga" => "Rp.4.500.000"
    ],
    [
        "photo" => "harva.jpg",
        "alat musik" => "Harva",
        "merk" => "Gaia lever",
        "cara" => "Dipetik",
        "harga" => "Rp.4.850.000"
    ],
    [
        "photo" => "klarinet.jpg",
        "alat musik" => "Klarinet",
        "merk" => "Yamaha",
        "cara" => "Ditiup",
        "harga" => "Rp.1.850.000"
    ],
];
?>

<html>
    <head>
        <title>Tugas2_193040029</title>
    </head>
    <style>
        body {
            background-color: lightblue;
        }
        table{
            background-color: salmon;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
            width : 10px;
        }
    
        td{
            padding : 20px;
            
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: white;
        }
        h5 a{
            text-decoration: none;
            color: white;
            font-size: 50px;
        }
        th{
            width : 20px;
        }
    </style>
    <body>
        <h3>Alat Musik</h3>
        <table border="1px">
            <tr>
                <th>Gambar</th>
                <th>Alat Musik</th>
                <th>Merk</th>
                <th>Cara Bermain</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($buku as $b) { ?>
            <tr>
                <td><img src="../img/<?= $b['photo']; ?>"></td>
                <td><?= $b["alat musik"]; ?></td>
                <td><?= $b["merk"]; ?></td>
                <td><?= $b["cara"]; ?></td>
                <td><?= $b["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
    </body>
</html>
