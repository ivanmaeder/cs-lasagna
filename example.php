<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/lasagna/view.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lasagna/sql/example_table.php');

$rows = \sql\example_table\fetchAll();

$parameters = array('title' => 'Some of my favourite programmers',
    'authors' => $rows
);

\view\display('lasagna/html/example.tpl', $parameters);

?>
