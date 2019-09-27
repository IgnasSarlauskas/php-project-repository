<?php

$sheeps = ['blee'];

for ($i = 0; $i < 5; $i++) {
    $sheeps[] = &$sheeps[0];
}

var_dump($sheeps);