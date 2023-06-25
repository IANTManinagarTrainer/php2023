<?php
    $data = $_REQUEST['data'];
    $plus = strpos($data, '+');
    $num1 = substr($data, 0, $plus);
    $num2 = substr($data, $plus+1);
    $result = $num1 + $num2;
    echo "$num1 + $num2 = $result";
?>