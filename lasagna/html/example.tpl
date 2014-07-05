<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title><?= $title ?></title>
  </head>
<body>
<ul>
<?php

foreach ($authors as $author) {
    echo "<li>" . $author["example_field"] . "</li>";
}

?>
</ul>
</body>
</html>



