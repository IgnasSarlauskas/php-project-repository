<?php

require 'functions/form/core.php';

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
}

function form_fail($filtered_input, $form) {
    var_dump('Retard Alert!');
}

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
    array_to_file($filtered_input, 'array_test.json');
    file_to_array('array_test.json');
}

function array_to_file($array, $file_name) {
    $file = json_encode($array);
    $success = file_put_contents($file_name, $file);
    if (!$success !== false) {
        return true;
    }
    return false;
}

function file_to_array($file_name) {
    if (file_exists($file_name)) {
        $file_got = file_get_contents($file_name);
        $converted_to_array = json_decode($file_got, true);
    } else {
        return false;
    } 
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