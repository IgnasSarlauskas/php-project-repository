<?php

require 'functions/form/core.php';
require 'functions/file.php';

$form = [
    'attr' => [
        'action' => 'play.php',
    ],
    'fields' => [],
    'buttons' => [
        'start' => [
            'type' => 'submit',
            'value' => 'Kick the ball',
            'class' => 'submit-button',
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

if (!empty($_COOKIE)) {
    $player = json_decode($_COOKIE['player'], true);
    $play_text = "Go for it, \"{$player['nickname']}\" ! ";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Play</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="stylesheet" href="includes/navigation-style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Glegoo|Roboto+Slab&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include 'navigation.php'; ?>
        <?php require 'templates/form.tpl.php'; ?>
         <?php if (!empty($_COOKIE)) : ?> 
            <h2><?php print $play_text; ?> </h2>
        <?php endif; ?>
    </body>
</html>
