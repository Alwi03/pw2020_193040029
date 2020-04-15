<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .lingkaran{
        width: 40px;
        height: 40px;
        background-color: salmon;
        text-align: center;
        line-height: 40px;
        border-radius: 50px;
        border: 1px solid black;
        margin: 1px;
        float:left;
    }
    .clear{
        clear: both;
    }
    </style>
</head>
<body>
    <?php $a = "A"; $b = "B"; $c = "C"; ?>
    <div class="lingkaran"><?= $a;?></div>
    <div class="clear"></div>
    <div class="lingkaran"><?= $b;?></div>
    <div class="lingkaran"><?= $b;?></div>
    <div class="clear"></div>
    <div class="lingkaran"><?= $c;?></div>
    <div class="lingkaran"><?= $c;?></div>
    <div class="lingkaran"><?= $c;?></div>

</body>
</html>