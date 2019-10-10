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
    setcookie('mycookie', 'cookiedata', time() + 3600, '/');
    $_COOKIE['submitted'] = true; // tam,kad nebutu tuscias masyvas ir nereiktu papildomai viena karta refreshint)
}

function form_fail($filtered_input, $form) {
    var_dump('Retard Alert!');
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

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/styles.css">
    </head>
    <body>
        <?php if(empty($_COOKIE)):?>
            <?php require 'templates/form.tpl.php'; ?>
        <?php else: ?>
            <section>
                <?php if (!empty($decoded_user_array)): ?>
                    <?php foreach ($decoded_user_array as $user): ?>
                        <?php foreach ($user as $index => $value): ?>
                            <p><?php print "$index : $value"; ?></p>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </section>
        <?php endif; ?>
    </body>
</html>