<?php

$drinks = [
    [
        'name' => 'Vilkmerges Alus',
        'price_stock' => 3.6,
        'discount' => 0, //%
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=7acd8bad-f09a-470c-9646-e134ddeee5d7',
    ],
    [
        'name' => 'Stumbro Degtine',
        'price_stock' => 3.6,
        'discount' => 5, //%
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=e11360a3-0864-4441-b8da-9cbb8d189742',
    ],
    [
        'name' => 'Svyturio Ekstra',
        'price_stock' => 1.6,
        'discount' => 0, //%
        'img' => 'https://alko-msk.ru/wp-content/uploads/2019/02/ca57b8f0d2fd63ff148960ca99364fb3-67-300x300.png',
    ],
    [
        'name' => 'Ajax Super Effect',
        'price_stock' => 2.4,
        'discount' => 25, //%
        'img' => 'https://www.biurogidas.lt/image/cache/data/catalog/products/oday/117060_1-300x300.png',
    ],
];

foreach ($drinks as $drink_key => $drink) {
    $drinks[$drink_key]['price_retail'] = $drink['price_stock'] - ($drink['price_stock'] * $drink['discount'] / 100);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Geralai</title>
        <style>
            .drinks-section {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            h1 {
                text-align: center;
            }

            .drink-card {
                display: inline-block;
                border: 1px solid black;
                position: relative;
            }

            img {
                height: 280px;
                width: 280px;
            } 

            .retail-price {
                
                background-color: #FF69B4;
                color: white;
                position: absolute;
                top: 0;
                right: 0;
            }
            
            .stock-price {
                background-color: grey;
                color: white;
                position: absolute;
                top: 0;
                left: 0;
            }

            .drink-name {
                text-align: center;
            }

        </style>
    </head>
    <body>
        <h1>Drink Catalogue</h1>
        <div class="drinks-section">
            <?php foreach ($drinks as $drink_key => $drink): ?>
                <div class ="drink-card">
                    <?php if ($drink['discount'] > 0) : ?>
                        <div class="stock-price">$ <?php print $drink['price_stock']; ?></div>
                    <?php endif; ?>
                    <div class="retail-price">$ <?php print $drink['price_retail']; ?></div>
                    <img src="<?php print $drink['img']; ?>" >
                    <p class="drink-name"><?php print $drink['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>
