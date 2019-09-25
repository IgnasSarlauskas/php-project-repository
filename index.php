<?php

function sum($x, $y) {
    return $x + $y;
}

$x = 3;
$y = 4;
$sum = sum($x, $y);
$text = "$x ir $y suma: $sum";

?>

<html>
    <body>
        <h1><?php print $text; ?></h1>
    </body>
</html>
