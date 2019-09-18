<?php

$array = [];

for ($i = 0; $i < 7; $i++) {
    $date = date('l', strtotime("+ $i days"));
    $array[] = $date;
     if ($date == 'Saturday') {
        $array[$i] = 'weekend';
    } elseif ($date == 'Sunday' ) {
        $array[$i] = 'weekend';
    };
}
var_dump($array);


