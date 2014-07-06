<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
  </head>
<body>
<ul>
<?php

foreach ($authors as $author) {
    echo '<li>' . $author['example_field'] . '</li>';
}

?>
</ul>
</body>
</html>
