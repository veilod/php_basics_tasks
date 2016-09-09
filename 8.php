<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 09.09.2016
 * Time: 13:54
 */

$age = 20;


if ($age >= 18 & $age <= 59) {
    echo " Вам еще работать и работать";
}

elseif ($age > 59 ) {
    echo " Вам пора на пенсию";
}

elseif ($age > 0 & $age <=17  ) {
    echo "Вам еще рано работать";
}

else {
    echo " Неизвестный возраст";
}

