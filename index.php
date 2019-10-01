<?php

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ]
];

function html_attr($attr) {
    foreach ($attr as $key => $value) {
        $attr_array[] = "$key = \"$value\"";
    }
    return implode(' ',$attr_array);
}

var_dump(html_attr($form['attr']));

?>
<html>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>
