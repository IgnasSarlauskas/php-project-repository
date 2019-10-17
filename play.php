<?php
require 'functions/form/core.php';
require 'functions/file.php';

$form = [
    'attr' => [
        'action' => 'play.php',
    ],
    'fields' => [],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Kick the ball',
            'class' => 'submit-button',
        ],
    ],
    'validators' => [
        'validate_kick'
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];


if (!empty($_COOKIE)) {
    $player_cookie = json_decode($_COOKIE['player'], true);
    $play_text = "Go for it, \"{$player_cookie['nickname']}\" ! ";
}

function form_fail () {}

//var_dump(filter_input(INPUT_POST, 'start', FILTER_DEFAULT , FILTER_REQUIRE_ARRAY));
function form_success() {
    $teams = file_to_array('./data/teams.json');
    $player_cookie = json_decode($_COOKIE['player'], true);
    var_dump($player_cookie);
    foreach ($teams as &$team) {
        foreach ($team['players'] as &$player) {
            if ($player['nickname'] === $player_cookie['nickname']) {
                $player['score']++;
            }
        }
        var_dump($team);
    }
    
    array_to_file($teams, './data/teams.json');
}

$filtered_input = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_SPECIAL_CHARS);

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
    var_dump($filtered_input);
} else {
    echo 'upsss error';
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
