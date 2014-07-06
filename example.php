<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/lasagna/view.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lasagna/sql/example_table.php');

$rows = \sql\example_table\fetchAll();

\view\set('title', 'Some of my favourite programmers');
\view\set('authors', $rows);

\view\display();

?>
