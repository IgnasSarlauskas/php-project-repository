<?php

session_start();
unset($_SESSION['nickname']);
unset($_SESSION['team_name']);
unset($_SESSION['score']);

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


//var_dump($filtered_input);
function form_success($filtered_input, $form) {
    var_dump('You are in!');
    update_users($filtered_input);
}

function form_fail($filtered_input, $form) {
    var_dump('Retard Alert!');
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

//if (isset($_SESSION)) {
//    foreach ($form['fields'] as $field_id => &$field) {
//        $field['value'] = $_SESSION[$field_id];
//        var_dump($field['value']);
//    }
//    unset($field);
//}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Team</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="stylesheet" href="includes/player-fail-animation.css">
        <link rel="stylesheet" href="includes/navigation-style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include 'navigation.php'; ?>
        <?php require 'templates/form.tpl.php'; ?>
        
        <?php if (isset($form['fields']['team_name']['error'])): ?>  
               <div id="join-fail" class="start"></div>  
        <?php endif; ?>
    </body>
</html>

