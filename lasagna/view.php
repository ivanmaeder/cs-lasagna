<?php

namespace view;

$_lasagna_display_vars = array();

function set($key, $value) {
    global $_lasagna_display_vars;

    $_lasagna_display_vars[$key] = $value;
}

function display() {
    $path = pathinfo($_SERVER['SCRIPT_NAME']);
    $tpl = dirname(__FILE__) . '/html' . $path['dirname'] . '/' . $path['filename'] . '.tpl';

    if (!file_exists($tpl)) {
        trigger_error("Unable to display $tpl; file not found");

        return;
    }

    global $_lasagna_display_vars;

    extract($_lasagna_display_vars, EXTR_OVERWRITE);

    include($tpl);
}

?>
