<?php

$siukslines_turis = 40;
$siuksliu_turis_per_d = 15;
$max_kaupo_turis = rand(0, 15);

$bendras_turis = $siukslines_turis + $max_kaupo_turis;
$dienu_skaicius = floor($bendras_turis / $siuksliu_turis_per_d);


print 'Po ' . $dienu_skaicius . 'dienu ' . date('Y-m-d', strtotime('+' . $dienu_skaicius . 'day')) . ' pirk geliu ir sampano, jei nori isvengti knflikto '
        
?>

