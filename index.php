<?php

$sheep = ['blee'];
for ($i = 0; $i < 4; $i++) {
    $sheep[] = &$sheep[$i];
}

$sheep[] = 'mikstmakaleskt';
var_dump($sheep);