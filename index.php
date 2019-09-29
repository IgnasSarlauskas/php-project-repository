<?php

$array = ['b', 'x', 'x', 'b', 's'];

function count_values($array, $val) {
    foreach ($array as $value) {
        if ($value == $val) {
           $same_values_array[] = $value;
        }
    }
    $count = count($same_values_array);
    return $count;
}
print count_values($array, 's');
