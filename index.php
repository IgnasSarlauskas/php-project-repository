<?php

$array = ['b', 'x', 'x', 'b', 's'];

function change_values(&$array, &$val_from, &$val_to) {
    foreach ($array as &$value) {
        if ($value == $val_from) {
           $value = $val_to;
        }
    }
}

$val_from = 'b';
$val_to = 'a';
print change_values($array, $val_from, $val_to);

var_dump ($array);
