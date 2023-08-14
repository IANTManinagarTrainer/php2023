<?php
    $items = [
        [ "value1" => 10, "value2" => 20, "action" => "+"],
        [ "value1" => 10, "value2" => 8, "action" => "-"],
        [ "value1" => 11, "value2" => 7, "action" => "*"],
        [ "value1" => 372, "value2" => 3, "action" => "/"],
        [ "value1" => 7845, "value2" => 2, "action" => "%"],
    ];
    print("[ ");
    foreach($items as $item) {
        $action = $item["action"];
        $value1 = $item["value1"];
        $value2 = $item["value2"];
        eval("\$result = $value1 $action $value2;");
        print("$result, ");
    }
    print("]");
?>