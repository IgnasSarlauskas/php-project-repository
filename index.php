<?php

$debt_not_acceptable = rand(101, 200);
$debt = rand(201, 300);
$debt_acceptable = rand(301, 400);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
            <h1>Skolos skaičiuoklė</h1>
            <h3>Jei paėmei <?php print $debt; ?>eurų</h3>
            <h3>Su dviem kabančiais grąžinsi <?php print $debt_acceptable; ?>eurų</h3>
            <h3>Su vienu kabančiu grąžinsi <?php print $debt_not_acceptable; ?>eurų</h3>
        </div>
    </body>
</html>