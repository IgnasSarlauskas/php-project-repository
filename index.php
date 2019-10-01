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
            'label' => 'Your Name',
            'error' => 'klaida',
        ],
        'last-name' => [
            'type' => 'text',
            'placeholder' => 'Your Surname',
        ],
        
        'email' => [
            'type' =>  'email',
            'placeholder' => 'Enter Email',
        ]
    ],
    'buttons' => [
        'submit' => [
            'name' => 'test',
            'class' => 'test-1',
        ]
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
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>
