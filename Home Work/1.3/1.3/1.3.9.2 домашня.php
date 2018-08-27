<?php
/**
 * Created by PhpStorm.
 * User: комп
 * Date: 14.08.2018
 * Time: 19:11
 */

/** recursive counter function */

function recursiveCounter($number = 0){
    echo $number . PHP_EOL;
    return $number < 50 ? recursiveCounter($number + 1): null;
}

recursiveCounter();
