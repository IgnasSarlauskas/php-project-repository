<?php

$kates = rand(1, 3);
$sunys = rand(1, 3);
$pavyko = rand(0, 1);

$katasuniai = 0;
for ($i = 1; $i <= $kates; $i++) {
    for ($b = 1; $b <= $sunys; $b++) {
        if ($pavyko) {
            $katasuniai += 1;
            break;
        }
    }
}

?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Katasiniu iseiga</h1>
        <h2>Dalyvavo <?php print $kates; ?> kates ir <?php print $sunys; ?>sunys</h2>
        <h3>Katasuniu iseiga: <?php print $katasuniai; ?></h3>
    </body>
</html>