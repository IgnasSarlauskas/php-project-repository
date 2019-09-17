<?php

$grikiai = 5000;
$per_day = rand(200, 500);


for ($x = 0; $x < $grikiai; $x++) {
    $days = floor($grikiai / $per_day);
}

$date = date('Y-m-d', strtotime(" + $days  days"));
$h2_text = "Rasta grikiu: $grikiai g.";
$h3_text = "Isgyvensiu dar $days dienas, iki $date";

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