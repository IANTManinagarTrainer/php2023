<?php
    function sum($a, $b) 
    {
        return $a + $b;
    }

    $num1 = 5;
    $num2 = 10;
    $num3 = 0;

    $num3= sum($num1, $num2);
    print("sum($num1, $num2) = $num3 <br>");

   
    $num3= sum($num1, $num2);
    print("sum($num1, $num2) = $num3 <br>");

    $num3= sum(30, 20);
    print("sum(30, 20) = $num3 <br>");
?>