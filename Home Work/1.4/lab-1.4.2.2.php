<?php

/**
 * Array functions with callbacks
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 15.07.2016
 */

$array = ['1','2','3','4','5'];

echo 'FILTERED ARRAY:' . PHP_EOL;
$filteredArray = array_filter($array, function ($value) {
    return $value < 10 ;
});
print_r($filteredArray);

echo PHP_EOL;

echo 'CHANGED VALUES:' . PHP_EOL;
array_walk($filteredArray, function (&$value) {
    $value *= 10;
});
print_r($filteredArray);
