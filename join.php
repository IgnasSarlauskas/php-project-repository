<?php

require 'functions/form/core.php';
require 'functions/file.php';

$form = [
    'attr' => [
        'action' => 'join.php',
    ],
    'fields' => [
        'player' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Nickname',
                    'class' => 'nickname',
                ]
            ],
            'validate' => [
                'validate_not_empty',
                'validate_team',
                'validate_player',
            ]
        ],
        'team_name' => [
            'type' => 'select',
            'extra' => [
                'attr' => [
                    'class' => 'select-team',
                    'id' => 'team'
                ]
            ],
            'options' => select_teams(),
            'validate' => [
                'validate_not_empty',
            ]
        ]
    ],
    'buttons' => [
        'join' => [
            'type' => 'submit',
            'value' => 'Join',
            'class' => 'submit-button',
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

$teams = [
    [
        'team_name' => 'lochai',
        'players' => [
            [
                'nickname' => 'killer',
                'score' => 10
            ],
            [
                'nickname' => 'thriller',
                'score' => 10
            ]
        ]
    ],
    [
        'team_name' => 'nelochai',
        'players' => [
            [
                'nickname' => 'winner',
                'score' => 10
            ],
            [
                'nickname' => 'newinner',
                'score' => 10
            ]
        ]
    ],
];

//var_dump($filtered_input);
function form_success($filtered_input, $form) {
    var_dump('You are in!');
    add_players($filtered_input);
    $player = [
        'team_name' => $filtered_input['team_name'],
        'nickname' => $filtered_input['player'],
    ];
    setcookie('player', json_encode($player), time() + 3600, '/');
    $_COOKIE['submitted'] = true;
}

var_dump($_COOKIE);

function form_fail($filtered_input, $form) {
    var_dump('Retard Alert!');
//    $json_string = json_encode($filtered_input);
//    setcookie('fields', $json_string, time() + 3600, '/'); /// set cookie priima tik string values !!!
}

//var_dump($_POST);
$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

function add_players($filtered_input) {
    $array_teams = file_to_array('./data/teams.json');
    $array_teams[$filtered_input['team_name']]['players'][] = $filtered_input['player'];
    array_to_file($array_teams, './data/teams.json');
}

function update_users($filtered_input) {
    $array_teams = file_to_array('./data/teams.json');
    $filtered_input['players'] = [];
    $array_teams[] = $filtered_input;
    array_to_file($array_teams, './data/teams.json');
}

function select_teams() {
    $array_teams = file_to_array('./data/teams.json');
    if (!empty($array_teams)) {
        foreach ($array_teams as $value) {
            $arr[] = $value['team_name'];
        }
        return $arr;
    }
}

if (!empty($_COOKIE['player'])) {
    $player = json_decode($_COOKIE['player'], true);
    $joined_text = "Sveeiks, pzdaball zaidejau \"{$player['nickname']}\" iš komandos \"{$player['team_name']}\".";
} else {
    $joined_text = 'Welcome player !';
}

$array_teams = file_to_array('./data/teams.json'); // This must by in the plain code for the html logic below to dont allow crete player if there are no teams created

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Join Team</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="stylesheet" href="includes/navigation-style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Glegoo|Roboto+Slab&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php include 'navigation.php'; ?>
        <?php if (empty($array_teams)): ?>
            <h2>There are no teams to join, create team first!</h2>
        <?php else: ?> 
            <?php require 'templates/form.tpl.php'; ?>
        <?php endif; ?>

        <?php if (!empty($_COOKIE)) : ?>  
            <p><?php print $joined_text; ?></p>  
            <?php else: ?> 
            <p><?php print $joined_text; ?></p> 
        <?php endif; ?>
    </body>
</html>



