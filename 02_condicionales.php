<?php
$store = ["Computer", "Iphone", "Lenovo"]
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Precios de objetos</h1>
    <div>
        <div class="store-container">
            <h3 class="title-price"><?= $store[0] ?></h3>
            <p class="price"></p>
        </div>
        <div class="store-container">
            <h3 class="title-price"><?= $store[1] ?></h3>
            <p class="price"></p>
        </div>
        <div class="store-container">
            <h3 class="title-price"><?= $store[2]?> casa</h3>
            <p class="price"></p>
        </div>
    </div>
</body>

</html>