<?php

$distance = rand(100, 500);
$consumption = 7.5;
$price_1 = 1.3;
$my_money = 20;

$fuel_total = $distance * $consumption / 100;
$price_trip = $fuel_total * $price_1;

$title = 'Kelionės skaičiuoklė';
$text_1 = "Nuvažiuota distancija: $distance";
$text_2 = "Sunaudota $fuel_total l. kuro";
$text_3 = "Kaina: $price_trip pinigų";
$text_4 = "Turimi pinigai: $my_money $";


if ($my_money >= $price_trip) {
    $text_p = 'Isvada: Kelione iperkama';
} else {
    $text_p = 'Isvada: Kelione neiperkama';
}

?>
<html>
    <head>
        
    </head>
     <body>
        <ul>
            <li><?php print $text_1; ?></li>
            <li><?php print $text_2; ?></li>
            <li><?php print $text_3; ?></li>
            <li><?php print $text_4; ?></li>
            <hr>
            <p><?php print $text_p; ?></p>
        </ul>
    </body>
</html>