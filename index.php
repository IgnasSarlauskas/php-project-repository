<?php

$array = [];

for ($i = 0; $i < 7; $i++) {
    $date = date('l', strtotime("+ $i days"));
    $array[] = $date;
     
    if ($date == 'Saturday') {
        $array[$i] = 'sleep day';
    } elseif ($date == 'Sunday' ) {
        $array[$i] = 'church day';
    } else {
        $array[$i] = 'Workday';
    }
}

var_dump($array);


