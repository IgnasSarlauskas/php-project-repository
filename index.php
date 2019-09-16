<?php
$days = 365;
$pack_price = 3.5;
$count_ttl = 0;

for ($i = 0; $i < $days; $i++) {

    $present_day = date('N', strtotime("+ $i days"));

    if ($present_day <= 5) {
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
    } elseif ($present_day == 6) {
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
    } else {
        $cigs_sun = rand(1, 5);
        $count_ttl += $cigs_sun;
    }
}

$price_ttl = $count_ttl / 20 * $pack_price;

$h2_text = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Dumu skaiciuokle</h1>
        <h2><?php print $h2_text; ?></h2>
    </body>
</html>