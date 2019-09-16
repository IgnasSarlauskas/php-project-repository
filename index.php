<?php
$days = 365;
$pack_price = 3.5;
$count_ttl = 0;

$count_mon_thu = 0;

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
   
    if ($present_day <= 4) {
        $cigs_mon_thu = rand(3, 4);
        $count_mon_thu += $cigs_mon_thu;
    } else {
        $count_mon_thu += 0;
    }
}


$price_ttl = $count_ttl / 20 * $pack_price;

$price_mon_thu_ttl = $count_mon_thu / 20 * $pack_price;
$price_mon_thu = $price_ttl - $price_mon_thu_ttl;

$h2_text = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";
$h2_text_2 = "Jei nerukyciau darbo dienomis, sutaupyciau $price_mon_thu euru";
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Dumu skaiciuokle</h1>
        <h2><?php print $h2_text_2; ?></h2>
    </body>
</html>