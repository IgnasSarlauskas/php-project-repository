<?php

$rasinys = [];
$zodziai = [
    'Petras',
    'Lauke',
    'Eilej',
    'Maximoj',
    'Nes',
    'Baiges',
    'Cizos',
    'Bet',
    'Nepardave',
    'Nes',
    'Petras',
    'Neturi',
    'Astuoniolikos'
];

foreach($zodziai as $zodis) {
    $rasinys[] = $zodziai[rand(0,sizeof($zodziai)-1)];
} 

?>
<html>
    <body>
        <h1>Lietuviu egzaminas</h1>
        <p>
        <?php foreach ($rasinys as $zodis): ?>
        <?php print $zodis?> 
        <?php endforeach; ?>
        </p>
    </body>
</html>



