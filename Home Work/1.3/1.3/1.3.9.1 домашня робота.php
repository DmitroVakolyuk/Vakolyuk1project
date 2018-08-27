<?php
/**
 * Created by PhpStorm.
 * User: комп
 * Date: 14.08.2018
 * Time: 19:09
 */

function calculateFactorial($number){
    if($number < 0){
        die('Number cannot be less then 0');
    }
    elseif ($number == 0){
        return 1;
    }
    return $number * calculateFactorial($number -1);

}

echo calculateFactorial(5);

