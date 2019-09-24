<?php

$drinks = [
    [
        'name' => 'Vilkmerges Alus',
        'price_stock' => 3.6,
        'discount' => 0,
        'img' => 'url("https://www.barbora.lt/api/Images/GetInventoryImage?id=7acd8bad-f09a-470c-9646-e134ddeee5d7")',
    ],
    [
        'name' => 'Stumbro Degtine',
        'price_stock' => 3.6,
        'discount' => 5, //%
        'img' => 'url("https://www.barbora.lt/api/Images/GetInventoryImage?id=e11360a3-0864-4441-b8da-9cbb8d189742")',
    ],
    [
        'name' => 'Svyturio Ekstra',
        'price_stock' => 1.6,
        'discount' => 0, //%
        'img' => 'url("https://alko-msk.ru/wp-content/uploads/2019/02/ca57b8f0d2fd63ff148960ca99364fb3-67-300x300.png")',
    ],
    [
        'name' => 'Ajax Super Effect',
        'price_stock' => 2.4,
        'discount' => 25, //%
        'img' => 'url("https://www.biurogidas.lt/image/cache/data/catalog/products/oday/117060_1-300x300.png")',
    ],
];

foreach ($drinks as $drink_key => $drink) {

    if ($drink['discount'] == 0) {
        $drinks[$drink_key]['price_retail'] = $drink['price_stock'];
    } else {
        $drinks[$drink_key]['price_retail'] = $drink['price_stock'] - ($drink['price_stock'] * $drink['discount'] / 100);
    }
}

var_dump($drinks);

