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

$balance = 0;
$total_income = 0;
$total_expenses = 0;

foreach ($bank_report as $transaction_key => $transaction) {
    if ($bank_report[$transaction_key]['amount'] < 0) {
        $bank_report[$transaction_key]['css_class'] = 'expense';
        $total_expenses += $bank_report[$transaction_key]['amount'];
    } else {
        $bank_report[$transaction_key]['css_class'] = 'income';
        $total_income += $bank_report[$transaction_key]['amount'];
    }

    $balance += $bank_report[$transaction_key]['amount'];
}

$balance_text = "Balansas: $balance eur.";
$total_income_text = "Iplaukos: $total_income eur.";
$total_expenses_text = "Islaidos: $total_expenses eur.";
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
            <?php foreach ($bank_report as $transaction): ?>
                <li class="<?php print $transaction['css_class']; ?>">
                    <?php print $transaction['name']; ?>: 
                    <?php print $transaction['amount']; ?> eur
                </li>
             <?php endforeach; ?>
        </ul>
        <h2><?php print $balance_text; ?></h2>
        <h3><?php print $total_income_text; ?></h3>
        <h3><?php print $total_expenses_text; ?></h3>
        <h3></h3>
    </body>
</html>







