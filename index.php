<?php

$x = 2;

function is_prime($x) {
    if ($x == 1) {
        return false;
    } else {
        for ($i = 2; $i <= $x / 2; $i++) {
            if ($x % $i == 0) {
                return false;
            }
            return true;
        }
    }
}

if (is_prime($x)) {
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
