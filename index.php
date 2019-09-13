<?php

$distance = rand(50, 100);
$consumption = 7.5;
$price_l = 1.3;

$fuel_total = ($distance * $consumption) / 100 ;
$price_trip = $fuel_total * $price_l;

$title_text = 'Keliones skaiciuokle ';
$distance_text = 'Nuvaziuota distancija: ';
$consumption_text_start = 'Sunaudota: ';
$consumption_text_end = ' l. kuro.';
$price_text_start = 'Sunaudota: ';
$price_text_end = ' pinigu';

?>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1><?php print $title_text; ?></h1>
        <ul>
            <li><?php print $distance_text . $distance; ?></li>
            <li><?php print $consumption_text_start . $fuel_total . $consumption_text_end; ?></li>
            <li><?php print $price_text_start . $price_trip . $price_text_end; ?></li>
        </ul>
    </body>
</html>

