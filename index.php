<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/lasagna/view.php");

//$id = $_GET["id"];

\view\set("title", "Header");
\view\set("message", "Hello!");
\view\set("time", time());
\view\set("arr", array(1, 2, 5, 8, 10));

\view\display();

?>
