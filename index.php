<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

$h1_text = 'Buitine Skaiciuokle';

if ($grizai_velai && !$grizai_isgeres ) {
    $text_outcome = 'Situacija: Grizai velai';
    $text_outcome_2 = 'Isvada: Nemiegosi ant sofos';
} elseif ($grizai_velai && $grizai_isgeres) {
    $text_outcome = 'Situacija: Grizai velai ir isgeres';
    $text_outcome_2 = 'Isvada: Miegosi ant sofos';
} elseif ($grizai_isgeres && !$grizai_velai) {
    $text_outcome = 'Situacija: Grizai isgeres';
    $text_outcome_2 = 'Isvada: Nemiegosi ant sofos';
} else {
    $text_outcome = 'Situacija: Nieko nepadarei';
    $text_outcome_2 = 'Isvada: Nemiegosi ant sofos';
}

?>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h1><?php print $h1_text; ?></h1>
        <h2><?php print $text_outcome; ?></h2>
        <h3><?php print $text_outcome_2; ?></h3>
    </body>
</html>