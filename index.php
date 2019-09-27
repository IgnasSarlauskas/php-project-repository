<?php

$sheep = ['blee'];
for ($i = 0; $i < 4; $i++) {
    $sheep[] = &$sheep[0];
}

for ($i = 0; $i < 4; $i++) {
    $sheep[$i]='mikstmakaleskt';
}
var_dump($sheep);