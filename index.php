<?php

$x = 9;

function is_prime($x) {
    if ($x == 1) {
        return 0;
    } else {
        for ($i = 2; $i <= $x / 2; $i++) {
            if ($x % $i == 0) {
                return 0;
            }
        }
        return 1;
    }
}

if (is_prime($x) == 1) {
    $text = "Skaicius $x yra pirminis";
} else {
    $text = "Skaicius $x nera pirminis";
}

?>

<html>
    <body>
        <h1><?php print $text; ?></h1>
    </body>
</html>
