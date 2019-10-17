<?php
session_start();
unset($_SESSION['nickname']);
unset($_SESSION['team_name']);
unset($_SESSION['score']);

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
                    'id' => 'player',
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
                    'id' => 'team',
                    'onclick' => 'show()',
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

//var_dump($filtered_input);
function form_success($filtered_input, $form) {
    var_dump('You are in!');
    add_players($filtered_input);

    $_SESSION['nickname'] = $filtered_input['player'];
    $_SESSION['team_name'] = $filtered_input['team_name'];
    $_SESSION['score'] = 0;

    
}

function form_fail($filtered_input, $form) {
    var_dump('Retard Alert!');
}

//var_dump($_POST);
$filtered_input = get_filtered_input($form);


if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

function add_players($filtered_input) {
    $array_teams = file_to_array('./data/teams.json');
    foreach ($array_teams as &$team) {
        if ($team['team_name'] === $filtered_input['team_name']) {
            $team['players'][] = [
                'nickname' => $filtered_input['player'],
                'score' => 0,
            ];
        }
    }
    array_to_file($array_teams, 'data/teams.json');
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
            $arr[$value['team_name']] = $value['team_name'];
        }
        return $arr;
    }
}

if (!empty($_SESSION)) {
    $joined_text = "Hello, pzdaball player \"{$_SESSION['nickname']}\" from team \"{$_SESSION['team_name']}\", you can play now !";
} elseif (empty($_SESSION)) {
    $joined_text = 'Welcome aboard player! Enter your name!';
} else {
    $joined_text = 'Player name already exists, try again !';
}

$array_teams = file_to_array('./data/teams.json'); // This must by in the plain code for the html logic below to dont allow crete player if there are no teams created
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Join Team</title>
        <link rel="stylesheet" href="includes/styles.css">
        <link rel="stylesheet" href="includes/player-success-animation.css">
        <link rel="stylesheet" href="includes/player-fail-animation.css">
        <link rel="stylesheet" href="includes/navigation-style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Glegoo|Roboto+Slab&display=swap" rel="stylesheet">
    </head>

    <script>
        function show() {
            document.getElementById('player').style.display = 'inline-block';
        }
        
        setTimeout(function(){
            document.getElementById('join-fail').className = 'end';
        }, 5000);
    </script>

    <body> 
        <?php include 'navigation.php'; ?>
        
        <?php if (empty($array_teams)): ?>
            <h2>There are no teams to join, create team first!</h2>
        <?php else: ?> 
            <?php if (!empty($_SESSION)) : ?>  
                <p class="centered"><?php print $joined_text; ?></p>
                <div id="hide-me" class='spiralContainer'><div class='spiral'></div></div>
            <?php elseif (empty($_SESSION)): ?> 
                <p class="centered"><?php print $joined_text; ?></p>
                    <?php require 'templates/form.tpl.php'; ?> 
            <?php endif; ?> 
        <?php endif; ?>
          
        <?php if (isset($form['fields']['player']['error'])): ?>  
               <div id="join-fail" class="start"></div>  
        <?php endif; ?>
                
    </body>
</html>



