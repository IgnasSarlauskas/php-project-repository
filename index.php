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

?>

<html>
    <style>
        .income {
            color: green;
        }
        .expense {
            color: red;
        }
        li {
            list-style-type: none;
        }
    </style>
    <body>
        <h1>Banko ataskaita</h1>
        <ul>
            <?php foreach ($bank_report as $transaction_key => $transaction): ?>
                <li class="<?php print $bank_report[$transaction_key]['css_class']; ?>">
                    <?php print $bank_report[$transaction_key]['name']; ?>: 
                    <?php print $bank_report[$transaction_key]['amount']; ?> eur
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>




