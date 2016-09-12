<?php
/**
 * Created by PhpStorm.
 * User: IgorPC
 * Date: 09.09.2016
 * Time: 21:49
 */

$a = 10;
$b = 20;
$operator = "-";

    switch ($operator) {
        case "+" :
            $result = $a + $b;
            break;
        case "-" :
            $result = $a - $b;
            break;
        case "*" :
            $result = $a * $b;
            break;
        case "/" : if ($b != 0) {
            $result = $a / $b;
        }
        else {
            echo "делить на 0 нельля!";
        }
        break;
        case "%":
                $result = $a % $b;
            break;
        default: echo "Неизвестное число";
    }

echo $result;