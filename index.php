<?php
$natos = [
    'C',
    'D',
    'E',
    'F',
    'G',
    'A',
    'B'
];

var_dump($natos);
$natu_suma = count($natos);

//$root = rand(0, count($natos) - 1);
var_dump($root);

$akordas = [];
for ($i = 0; $i < 3; $i++) {
    $root = rand(0, $natu_suma - 1);
    for ($j = 0; $j < 3; $j++, $root += 2) {
        if ($root >= $natu_suma) {
            $nata = $root - $natu_suma;
            $akordas[$i][$nata] = $natos[$nata];
        } else {
            $nata = $root;
            $akordas[$i][$nata] = $natos[$nata];
        }
    }
}

var_dump($akordas);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Music</title>
        <style>
            div {
                width: 45px;
                height: 300px;
                border: 1px solid black;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="c">C</div>
        <div class="d">D</div>
        <div class="e">E</div>
        <div class="f">F</div>
        <div class="g">G</div>
        <div class="a">A</div>
        <div class="b">B</div>
    </body>
</html>