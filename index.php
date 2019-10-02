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
            'attr' => [
                'type' => 'text',
                'name' => 'first-name',
            ],
            'extra_attr' => [
                'placeholder' => 'Your Name',
                'label' => 'Name',
                'error' => 'error',
            ],
        ],
        'last-name' => [
            'attr' => [
                'type' => 'text',
                'name' => 'last-name',
            ],
            'extra_attr' => [
                'placeholder' => 'Your Surname',
                'label' => 'Surname'
            ]
        ],
        'number' => [
            'attr' => [
                'type' => 'number',
                'name' => 'number',
            ],
            'extra_attr' => [
                'placeholder' => 'Enter your number',
                'label' => 'Phone Number',
            ]
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
