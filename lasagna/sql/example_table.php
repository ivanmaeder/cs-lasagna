<?php

namespace sql\example_table;

function fetchAll() {
    /*
    $q = "SELECT *
          FROM example_table";

    ...
    */

    //mock database result
    return array(array("example_id" => 1, "example_field" => "Rod Johnson"),
        array("example_id" => 2, "example_field" => "Kathy Sierra"),
        array("example_id" => 3, "example_field" => "Joel Spolsky"),
        array("example_id" => 4, "example_field" => "Robert C Martin")
    );
}

?>
