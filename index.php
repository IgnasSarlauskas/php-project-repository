<?php
require 'functions/form/core.php';
require 'functions/file.php';

$form = [
    'attr' => [
        'action' => 'index.php',
    ],
    'fields' => [
        'nickname' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Team Name',
                    'class' => 'nickname',
                ]
            ],
            'validate' => [
                'validate_not_empty',
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
      'team_name'  => 'lochai',
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
      'team_name'  => 'nelochai',
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
//var_dump($_POST);
$filtered_input = get_filtered_input($form);

//var_dump($filtered_input);
function form_success($filtered_input, $form) {
    var_dump('You are in!');
    update_users($filtered_input);
    setcookie('user', 'cookiedata', time() + 3600, '/');
    $_COOKIE['submitted'] = true; // tam,kad nebutu tuscias masyvas ir nereiktu papildomai viena karta refreshint)
}

function form_fail($filtered_input, $form) {
    var_dump('Retard Alert!');
    $json_string = json_encode($filtered_input);
    setcookie('fields', $json_string, time() + 3600, '/'); /// set cookie priima tik string values !!!
}

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

function update_users($filtered_input) {
    $array_users = file_to_array('./data/data_test.json');
    $array_users[] = $filtered_input;
    array_to_file($array_users, './data/data_test.json');
}

$decoded_user_array = file_to_array('./data/data_test.json');

if (isset($_COOKIE['fields'])) {
    $decoded_array = json_decode($_COOKIE['fields'], true);
    foreach ($form['fields'] as $field_id => &$field) {
        var_dump($field_id);
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
    <style>
        form {
            border: 1px solid black;
            display: inline-block;
            padding: 15px;
            -webkit-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 3px 4px 5px 0px rgba(0,0,0,0.75);       
        }

        .field-container {
            margin: 5px;
        }
        
        .nickname {
            font-size: 16px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .button-container {
            margin-left: 70px;
        }
        
        .submit-button {
            margin: 0 auto;
            background-color: #FF0000;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            padding: 12px 20px;
            margin: 8px 0;
        }
        
    </style>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>