<?php

$array = [];

for ($i = 0; $i < 7; $i++) {
    $date = date('l', strtotime("+ $i days"));
//    $array[] = $date;
     
    if ($date == 'Saturday') {
        $array[$date] = 'sleep day' ;
        
    } elseif ($date == 'Sunday' ) {
        $array[$date] = 'church day';
        
    } else {
        $array[$date] = 'Workday';
        
    }
    var_dump($date);
}

var_dump($array);


