<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 12.09.2016
 * Time: 9:13
 */

$num = 0;
var_dump($num);
echo "<br>";

settype($num , 'boolean'); // работает медленее , чем (boolean) , просто как вариант
//$num = (boolean)$num;

var_dump($num); //boolean(false)

