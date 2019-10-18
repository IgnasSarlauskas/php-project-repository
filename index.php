<?php

require 'functions/form/core.php';
require 'functions/file.php';

$form = [
    'attr' => [
        'action' => 'index.php',
    ],
    'fields' => [
        'full_name' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Full Name',
                    'class' => 'full-name',
                ]
            ],
            'validate' => [
                'validate_not_empty',
            ]
        ],
        'email' => [
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'placeholder' => 'email',
                    'class'=> 'email',
                ],
            ],
            'validate' => [
                'validate_not_empty',
                'validate_email',
                'validate_email_unique',
            ]
        ],
        'password' => [
            'type' => 'password',
            'extra' => [
                'attr' => [
                    'placeholder' => 'password',
                    'class' => 'password',
                ]
            ],
            'validate' => [
                'validate_not_empty',
                'validate_password',
            ]
        ],
        'password_repeat' => [
            'type' => 'password',
            'extra' => [
                'attr' => [
                    'placeholder' => 'repeat password',
                    'class' => 'password',
                ],
            ],
            'validate' => [
                'validate_not_empty',
            ]
        ]
    ],
    'buttons' => [
        'create' => [
            'type' => 'submit',
            'value' => 'Register',
            'class' => 'submit-button',
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail'
    ]
];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/form-styles.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>



