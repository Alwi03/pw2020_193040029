

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3a</title>
    <style>
        .tulisan {
            font-size : 28px;
            color : #8c782d;
            font-family : arial;
            font-style : italic;
            font-weight : bolder;
            
        }
        .pembungkus {
            border : 1px solid black;
            box-shadow : 1px 1px 5px black;
            border-radius : 5px;
            width : 600px;
            padding-left : 10px;
            line-height : 0;
        }
    </style>
</head>
<body>
<?php
    function gantiStyle($tulisan, $style1, $style2) {
        echo "<div class='$style1'>
        <p class='$style2'>$tulisan</p></div>";
    }
?>
<?php
    echo gantiStyle("Selamat datang di praktikum PW 2020","pembungkus","tulisan");
?>

</body>
</html>