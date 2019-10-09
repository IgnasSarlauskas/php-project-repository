<?php

var_dump($_POST);

//$form = [
//    'attr' => [
//        'action' => 'index.php',
//        'class' => 'bg-black'
//    ],
//    'title' => 'Kalėdų norai',
//    'fields' => [
//        'first_name' => [
//            'type' => 'text',
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Enter Name',
//                    'class' => 'input-text',
//                    'id' => 'first-name'
//                ]
//            ],
//            'label' => 'Vardas:',
////            'error' => 'Vardas per trumpas!',
//            'filter' => FILTER_SANITIZE_NUMBER_INT,
//            'validate' => [
//                'validate_not_empty'
//            ]
//        ],
//        'last_name' => [
//            'type' => 'text',
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Enter Surname',
//                    'class' => 'input-text',
//                    'id' => 'last-name'
//                ]
//            ],
//            'label' => 'Pavardė:',
////            'error' => 'Paliktas tuščias laukas!'
//            'validate' => [
//                'validate_not_empty'
//            ]
//        ],
//        'email' => [
//            'type' => 'text',
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Enter Email',
//                    'class' => 'input-email',
//                    'id' => 'email'
//                ]
//            ],
//            'label' => 'Email:',
//            'filter' => FILTER_VALIDATE_EMAIL,
//            'validate' => [
//                'validate_not_empty',
//                'validate_email',
//            ]
//        ],
//        'age' => [
//            'type' => 'text',
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Select your age',
//                    'class' => 'input-number',
//                    'id' => 'age'
//                ]
//            ],
//            'label' => 'Age:',
////            'error' => 'Paliktas tuščias laukas!',
//            'validate' => [
//                'validate_not_empty',
//                'validate_is_number',
//                'validate_is_positive',
//                'validate_max_100',
//            ]
//        ],
//        'number' => [
//            'type' => 'number',
//            'extra' => [
//                'attr' => [
//                    'placeholder' => 'Enter Contact Number',
//                    'class' => 'input-number',
//                    'id' => 'contact-number'
//                ]
//            ],
//            'label' => 'Kontaktinis numeris:',
////            'error' => 'Paliktas tuščias laukas!',
//            'validate' => [
//                'validate_not_empty'
//            ]
//        ],
//        'wish' => [
//            'type' => 'select',
//            'value' => 'tv',
//            'extra' => [
//                'attr' => [
//                    'class' => 'input-select',
//                    'id' => 'wish'
//                ]
//            ],
//            'options' => [
//                'car' => 'BMW',
//                'tv' => 'Teliko',
//                'socks' => 'Kojinių'
//            ],
//            'label' => 'Kalėdom noriu:',
//            'validate' => [],
//        ]
//    ],
//    'buttons' => [
//        'submit' => [
//            'type' => 'submit',
//            'value' => 'Siųsti'
//        ],
//        'reset' => [
//            'type' => 'reset',
//            'value' => 'Išvalyti'
//        ]
//    ],
//    'message' => 'Formos Message!',
//    'callbacks' => [
//        'success' => 'form_success',
//        'fail' => 'form_fail'
//    ]
//];

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

/**
 * Generates HTML attributes
 * @param array $attr
 * @return string
 */
function html_attr($attr) {
    $html_attr_array = [];

    foreach ($attr as $attribute_key => $attribute_value) {
        $html_attr_array[] = strtr('@key="@value"', [
            '@key' => $attribute_key,
            '@value' => $attribute_value
        ]);
    }

    return implode(' ', $html_attr_array);
}

/**
 * Generates safe input array using FILTER_SANITIZE_SPECIAL_CHARS and FILTER_SANITIZE_NUMBER_INT
 * @param array $form array
 * @return array
 */
function get_filtered_input($form) {
    $filter_parameters = [];
    foreach ($form['fields'] as $id => $value) {
        if (isset($value['filter'])) {
            $filter_parameters[$id] = $value['filter'];
        } else {
            $filter_parameters[$id] = FILTER_SANITIZE_SPECIAL_CHARS;
        }
    }
    return filter_input_array(INPUT_POST, $filter_parameters);
}

$filtered_input = get_filtered_input($form);
var_dump($filtered_input);

/**
 * if input field is empty, error occures above the empty input field 
 * @param $field_input, &$field
 * @return null | boolean
 */
function validate_not_empty($field_input, &$field) {
    if ($field_input === '') {
        $field['error'] = 'Paliktas tuscias laukelis';
        return false;
    } else {
        return true;
    }
}

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input) && !empty($field_input)) {
        $field['error'] = 'Iveskite validu skaiciu';
        return false;
    } else {
        return true;
    }
}

function validate_is_positive($field_input, &$field) {
    if ($field_input <= 0) {
        $field['error'] = 'Iveskite teigiama skaiciu';
        return false;
    } else {
        return true;
    }
}

function validate_max_100($field_input, &$field) {
    if ($field_input >= 100) {
        $field['error'] = 'Ivestas per didelis skaicius';
        return false;
    } else {
        return true;
    }
}

function validate_email($field_input, &$field) {

    function valid_email($field_input) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $field_input)) ? FALSE : TRUE;
    }

    if (!valid_email($field_input)) {
        $field['error'] = 'Ivestas neteisingas el.pato adresas';
        return false;
    } else {
        return true;
    }
}


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

/**
 * function that validates form by checking if input field is empty then error occures above the empty input field 
 * @param $form
 * @return null 
 */


function validate_form($filtered_input, &$form) {
    $success = true;

    // All the iput info stays in the field after submitting
    foreach ($form['fields'] as $field_id => &$field) {
        $field_input = $filtered_input[$field_id];
        // makes input field to stay filled after refershing page
        $field['value'] = $field_input;
        // if validate array has functions then calling function to check if the field is empty
        foreach ($field['validate'] as $validator) {
            $is_valid = $validator($filtered_input[$field_id], $field); // same as => validate_not_empty($field_input, $field);
            // $is_valid will be false, if validator returns false
            if (!$is_valid) {
                $success = false;
                break;
            }
        }
    }
    if ($success) {
        if (isset($form['callbacks']['success'])) {
            $form['callbacks']['success']($filtered_input, $form);
        }
    } else {
        if (isset($form['callbacks']['fail'])) {
            $form['callbacks']['fail']($filtered_input, $form);
        }
    }
    return $success;
}

validate_form($filtered_input, $form);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Templates</title>
        <link rel="stylesheet" href="includes/styles.css">
    </head>
    <body>
        <!--        atprintina nora arba varda jeigu (if ??) _POST mastyve yra noras arba vardas-->
        <h1><?php print $_POST['first_name'] ?? ''; ?></h1>        
        <h2><?php print $_POST['wish'] ?? ''; ?></h2>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>