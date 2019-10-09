<?php

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

