<?php

$sheeps = ['blee'];

for ($i = 0; $i < 4; $i++) {
    $sheeps[] = &$sheeps[$i];
}
foreach ($sheeps as $i => $sheep) {
    unset($sheeps[$i]);
    $sheeps[$i] = $sheep; 
}

$sheeps[2] = 'fuk da system';
var_dump($sheeps);