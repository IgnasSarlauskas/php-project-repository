<?php

$months = 24;
$car_price_new = 30000;
$car_price_used = $car_price_new;
$depreciation = 2; //% per month

for ($i = 0; $i < $months; $i++) {
    $car_price_used -= ($car_price_used / 100 * $depreciation);
}

$depr_perc = round($car_price_used * 100 / $car_price_new);
$car_price_used = round($car_price_used);

$h1_text = 'Kiek nuvertes masina?';
$h2_text = "Naujos masinos kaina: $car_price_new";
$h3_text = "Po $months men, masinos verte bus: $car_price_used eur.";
$h4_text = "Masina nuvertes $depr_perc proc.";
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1><?php print $h1_text; ?></h1>
        <h2><?php print $h2_text; ?></h2>
        <h3><?php print $h3_text; ?></h3> 
        <h4><?php print $h4_text; ?></h4>
    </body>
</html>