<?php

$rankinukas = [];

$items = [
    [
        'name' => 'kremas',
        'size' => 5,
    ],
    [
        'name' => 'telefonas',
        'size' => 10,
    ],
    [
        'name' => 'akiniai',
        'size' => 9,
    ],
    [
        'name' => 'lupdazis',
        'size' => 3,
    ],
    [
        'name' => 'vaistai',
        'size' => 3,
    ],
];

foreach ($items as $item) {
        $rankinukas[] = $items[rand(0, sizeof($items) - 1)]; 
}

$h1_text = 'Ka moteris turi rankinuke?';
?>

<html>
    <body>
        <h1><?php print $h1_text; ?></h1>
        <ul>
            <?php foreach ($rankinukas as $item): ?>
                <li>
                    <?php print $item['name']; ?> uzima 
                    <?php print $item['size']; ?> cm3. 
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>






