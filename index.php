<?php

$array = [];

for ($i = 0; $i < 7; $i++) {
    $array[] = date('l', strtotime("+ $i days"));
}
var_dump($array);


