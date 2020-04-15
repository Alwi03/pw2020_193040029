<?php
    function tumpukanBola($tumpukan) {
        for ($b = 0; $b <= $tumpukan; $b++) {
            for ($p = 1; $p <= $b; $p++) {
                echo "<div class='bulat'>$b</div>";
            }
            echo "<div class='clear'></div>";
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3c</title>
    <style>
        .bulat{
            margin: 5px;
            background-color : salmon;
            border-radius : 35px;
            height : 35px;
            width : 35px;
            padding : auto;
            line-height : 35px;
            border : 1px solid black;
            text-align : center;
            float : left;
            border: 1px solid black;
            font-size: 20px;

        }
        .clear{
            clear : both;
        }
    </style>
</head>
<body>
    <?php tumpukanBola(5)?>
</body>
</html>