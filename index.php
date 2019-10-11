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
                    'placeholder' => 'Enter number nickname',
                ]
            ],
            'label' => '',
            'filter' => '',
            'validate' => [
                'validate_not_empty',
            ]
        ],
        'password' => [
            'type' => 'password',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter password',
                ]
            ],
            'label' => '',
            'filter' => '',
            'validate' => [
                'validate_not_empty',
                'validate_password',
            ]
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
            'value' => 'Siųsti'
        ],
        'reset' => [
            'type' => 'reset',
            'value' => 'Išvalyti'
        ]
    ],
    'message' => 'Formos Message!',
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

var_dump($_COOKIE);

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
    <style>
        table {
            border: 1px solid black;
        }
    </style>
    <body>
        <?php if (empty($_COOKIE['user'])): ?>
            <?php require 'templates/form.tpl.php'; ?>
        <?php else: ?>
            <?php if (!empty($decoded_user_array)): ?>
                <table>
                    <?php foreach ($decoded_user_array as $user): ?>
                        <tr>
                            <?php foreach ($user as $index => $value): ?>
                                <td><?php print $index . ': ' . $value; ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        <?php endif; ?>
    </body>
</html>