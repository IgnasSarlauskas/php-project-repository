<?php

require 'functions/form/core.php';
require 'functions/file.php';

$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'fields' => [
        'nickname' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Team Name',
                ]
            ],
            'label' => '',
            'filter' => '',
            'validate' => [
                'validate_not_empty',
            ]
        ],
    ],
    'buttons' => [
        'create' => [
            'type' => 'submit',
            'value' => 'Create'
        ],
    ],
    'message' => '',
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
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
    setcookie('fields' ,$json_string, time() + 3600, '/'); /// set cookie priima tik string values !!!
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
    foreach($form['fields'] as $field_id => &$field) {
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
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>