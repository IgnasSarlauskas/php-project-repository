<?php

$debt_one = (rand(1, 100));
$debt_two = (rand(101, 200));
$debt_three = (rand(201, 300));
$debt_four = (rand(301, 400));

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="debt-section">
            <h1>Skolos skaičiuoklė</h1>
            <h3>Jei paėmei <?php print $debt_three; ?> eurų</h3>
            <h3>Su dviem kabančiais grąžinsi <?php print $debt_four; ?> eurų</h3>
            <h3>Su vienu kabančiu grąžinsi <?php print $debt_two; ?> eurų</h3>
        </div>
    </body>
</html>