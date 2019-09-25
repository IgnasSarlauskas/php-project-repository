<?php

$people = [
    [
        'name' => 'Jonas',
        'weight' => 100,
    ],
    [
        'name' => 'Petras',
        'weight' => 50,
    ],
    [
        'name' => 'Tomas',
        'weight' => 80,
    ],
    [
        'name' => 'Kestis',
        'weight' => 120,
    ],
    [
        'name' => 'Algis',
        'weight' => 90,
    ],
];

function find_storas($people) {

    foreach ($people as $person_key => $person) {
        if ($people[$person_key]['weight'] > 90) {
            $stori[] = $person['name'];
        }
    }
    return var_dump($stori);
}

find_storas($people);