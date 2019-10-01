<?php

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ],
    'fields' => [
        'first-name' => [
            'type' => 'text',
            'placeholder' => 'Your Name',
            'label' => 'Name',
            'error' => 'error',
        ],
        'last-name' => [
            'type' => 'text',
            'placeholder' => 'Your Surname',
            'label' => 'Surname'
        ],
        
        'number' => [
            'type' =>  'number',
            'placeholder' => 'Enter your number',
            'label' => 'Phone Number',
        ]
    ],
    'buttons' => [
        'submit' => [
            'type' => 'button',
        ],
        'reset' => [
            'type' => 'button',
        ]
    ],
    
    'message' => [
        'Name field must be filled',
    ]
    
];

function html_attr($attr) {
    foreach ($attr as $key => $value) {
        $attr_array[] = strtr('@key="@value"', [
            '@key' => $key,
            '@value' => $value
        ]);
    }
    return implode(" ", $attr_array);
}
?>

<html>
    <style>
        .color-red {
            color: red;
        }
    </style>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>
