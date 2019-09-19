<?php

$bank_report = [
    [
        'name' => 'Iki Darbo Uzmokestis',
        'amount' => 600,
    ],
    [
        'name' => 'Kalvariju Nacnykas',
        'amount' => -15,
    ],
    [
        'name' => 'Opium Night Club',
        'amount' => -230,
    ],
    [
        'name' => 'McDonalds Gedimino pr',
        'amount' => -20,
    ]   
];

foreach ($bank_report as $transaction_key => $transaction) {
    if ($bank_report[$transaction_key]['amount'] < 0) {
        $bank_report[$transaction_key]['css_class'] = 'expense';
    } else {
        $bank_report[$transaction_key]['css_class'] = 'income';
    }
}

var_dump($bank_report);


