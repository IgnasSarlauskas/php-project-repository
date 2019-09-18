<?php

$array = [];

for ($i = 0; $i < 7; $i++) {
    $date = date('l', strtotime("+ $i days"));
    $array[] = $date;
     if ($array[$i] === 'Saturday') {
        $array[$i] = 'weekend';
    } elseif ($array[$i] === 'Sunday' ) {
        $array[$i] = 'weekend';
    };
}
var_dump($array);


