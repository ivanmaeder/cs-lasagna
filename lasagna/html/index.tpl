<?php

include("header.tpl");

?>
<h1><?= $message; ?></h1>
<h2><?= $time; ?></h2>
<ol>
    <?php

    foreach ($arr as $element)
    {
        echo "<li>$element</li>\n";
    }

    ?>
</ol>
