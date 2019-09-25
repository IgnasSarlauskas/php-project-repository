<?php

function slot_run($size) {
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
           $array[$i][$j] = rand(0, 1);
        }
    }
    return $array;
}

$result = slot_run(4);
var_dump($result);
