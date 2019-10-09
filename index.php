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
//$filtered_input = get_filtered_input($form);
//var_dump($filtered_input);

function form_success($filtered_input, $form) {
    var_dump('You are in!');
}

function form_fail($filtered_input, $form) {
    var_dump('Retard Alert!');
}

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
}

function array_to_file($array, $file) {
    $file = json_encode($array);
    
    if (file_put_contents($file, $array) === FALSE) {
        return false;
    } elseif (file_put_contents($file, $array) == 0 ) {
        return true;
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