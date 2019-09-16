<?php

$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 0; $i < $months; $i++) {
    $month_expenses = rand(750, 800);
    $wallet += $month_income - $month_expenses;
    $h2_text = "Po $months menesiu, prognozuojamas likutis: $wallet";
    if ($wallet <= 0) {

        $h2_text = "Atsargiai $months menesi gali baigtis pinigai!";
        break;
    }
}

?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Wallet Forecast</h1>
        <h2><?php print $h2_text; ?></h2>
    </body>
</html>