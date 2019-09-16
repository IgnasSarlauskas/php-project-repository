<?php

$kates = rand(1, 3);
$sunys = rand(1, 3);

$katasuniai = 0;
for ($i = 1; $i <= $kates; $i++) {
    for ($b = 1; $b <= $sunys; $b++) {
        $pavyko = rand(0, 1);
        if ($pavyko) {
            $katasuniai += 1;
            break;
        }
    }
}

$h2_text = "Dalyvavo $kates kates ir $sunys sunys";
$h3_text = "Katasuniu iseiga: $katasuniai";

?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Katasiniu iseiga</h1>
        <h2><?php print $h2_text; ?></h2>
        <h3><?php print $h3_text; ?></h3>
    </body>
</html>