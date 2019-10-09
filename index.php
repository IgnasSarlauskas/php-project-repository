<?php


var_dump($_POST);

$form = [
    'attr' => [
        'action' => 'index.php',
        'class' => 'bg-black'
    ],
    'fields' => [
        'x' => [
            'type' => 'text', 
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter number x',
                ]
            ],
            'label' => '',
            'filter' => FILTER_SANITIZE_NUMBER_INT,
            'validate' => [
                'validate_not_empty',
                'validate_is_number'
            ]
        ],
        'y' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter number y',
                ]
            ],
            'label' => '',
            'filter' => FILTER_SANITIZE_NUMBER_INT,
            'validate' => [
                'validate_not_empty',
                'validate_is_number'
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

require 'functions/form/core.php';

function sum_field_inputs($filtered_input) {
    $sum = $filtered_input['x'] + $filtered_input['y'] ;
    var_dump($sum);
}

function form_success($filtered_input, $form) {
    sum_field_inputs($filtered_input);
}

function form_fail($filtered_input, $form) {
    var_dump('fail');
}

if (!empty($filtered_input)) {
    validate_form($filtered_input, $form);
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