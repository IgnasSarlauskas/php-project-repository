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
            ],
            'extra_attr' => [
                'placeholder' => 'Your Name', 
            ],
            'label' => 'Name',
//            'error' => 'error',
        ],
        'last-name' => [
            'attr' => [
                'type' => 'text',
            ],
            'extra_attr' => [
                'placeholder' => 'Your Surname',
            ],
            'label' => 'Surname',
        ],
        'status' => [
            'attr' => [
                'type' => 'select',
            ],
            'extra_attr' => [
                'placeholder' => 'Your Status',
            ],
            'options' => [
               'single' => 'Single',
               'married' => 'Married',
               'divorced' => 'Divorced',
            ],
            'label' => 'Your Status',
        ],
        'number' => [
            'attr' => [
                'type' => 'number',
            ],
            'extra_attr' => [
                'placeholder' => 'Enter your number',
            ],
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
