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
            'name' => 'test',
            'label' => 'Your Name',
            'error' => 'klaida',
        ],
        'last-name' => [
            'name' => 'test-1',
            'label' => 'Your Surname',
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
