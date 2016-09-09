<?php
/**
 * Created by PhpStorm.
 * User: IgorPC
 * Date: 09.09.2016
 * Time: 21:13
 */

$length = 180;
$time = 2;
$speed =  $length / $time ;

echo " Скорость автомобиля равна $speed км/час" . " или " . $speed * 1000 / 360 . " м/c";

echo "<br>";
echo "<br>";
echo "<br>";

// it's looks like good

function result ($length1 , $time1) {
    return $length1 / $time1 ;
}

echo result(120 , 2);