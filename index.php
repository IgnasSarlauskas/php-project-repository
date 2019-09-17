<?php

$grikiai = 5000;
$days = 0;
$grikiai_start = $grikiai;

for ($per_day = rand(200, 500); $grikiai > 0; $days++) {
    if ($grikiai < $per_day) {
        break;
    } else {
        $grikiai -= $per_day;
    }
}

$end_date = date('Y-m-d', strtotime(" + $days  days"));
$h2_text = "Rasta grikiu: $grikiai_start g.";
$h3_text = "Isgyvensiu dar $days dienas, iki $end_date";

?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Kiek dienu galesi valgyti grikius</h1>
        <h2><?php print $h2_text; ?></h2>
        <h3><?php print $h3_text; ?></h3> 
    </body>
</html>