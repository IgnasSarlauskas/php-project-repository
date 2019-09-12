<?php

$debt_one = (rand(101, 200));
$debt_two = (rand(201, 300));
$debt_three = (rand(301, 400));

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <h1>Skolos skaičiuoklė</h1>
            <h3>Jei paėmei <?php print $debt_two; ?>eurų</h3>
            <h3>Su dviem kabančiais grąžinsi <?php print $debt_three; ?>eurų</h3>
            <h3>Su vienu kabančiu grąžinsi <?php print $debt_one; ?>eurų</h3>
        </div>
    </body>
</html>