<?php

require 'functions/form/core.php';
require 'functions/file.php';

$form = [
    'attr' => [
        'action' => 'create.php',
    ],
    'fields' => [
        'team_name' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Team Name',
                    'class' => 'nickname',
                ]
            ],
            'validate' => [
                'validate_not_empty',
                'validate_team',
            ]
        ],
    ],
    'buttons' => [
        'create' => [
            'type' => 'submit',
            'value' => 'Create',
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
    update_users($filtered_input);
}

function form_fail($filtered_input, $form) {
    var_dump('Retard Alert!');
    $json_string = json_encode($filtered_input);
    setcookie('fields', $json_string, time() + 3600, '/'); /// set cookie priima tik string values !!!
}

//var_dump($_POST);
$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

function update_users($filtered_input) {    
    $array_teams = file_to_array('./data/teams.json');
    $filtered_input['players'] = [];
    $array_teams[] = $filtered_input;
    array_to_file($array_teams, './data/teams.json');
}

$decoded_user_array = file_to_array('./data/teams.json');

if (isset($_COOKIE['fields'])) {
    $decoded_array = json_decode($_COOKIE['fields'], true);
    foreach ($form['fields'] as $field_id => &$field) {
        $field['value'] = $decoded_array[$field_id];
    }
    unset($field);
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/styles.css">
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>

