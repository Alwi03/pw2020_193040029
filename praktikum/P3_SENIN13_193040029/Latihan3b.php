<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3b</title>
    <style>
        .pembungkus {
            box-shadow : 1px 1px 1px rgba(0,0,0,1);
            border : 2px solid black;
            padding : 8px;
            line-height : 18px;

        }
    </style>
</head>
<body>
    <?php
        $jawabanIsset ="Isset adalah yang digunakan untuk menyatakan variabel yang sudah diset atau tidak. Jika variabel sudah diset maka variabel akan mengembalikan nilai true, sebaliknya akan bernilai false.<br><br>";
        $jawabanEmpty = "Empty adalah yang digunakan untuk memeriksa apakah variabel form tidak dikirim atau tidak berisi data.";

        $GLOBALS ['Isset'] = $jawabanIsset;
        $GLOBALS ['Empty'] = $jawabanEmpty;

         function soal($style) {
            echo "<div class='$style'><p>$GLOBALS[Isset]</p><p>$GLOBALS[Empty]</p></div>";
         }
    ?>
    <?php
        echo soal("pembungkus"); 
    ?>
</body>
</html>