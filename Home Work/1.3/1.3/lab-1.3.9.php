<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 05.07.18
 * Time: 14:48
 */

/**
 * @param int $number
 * @return int
 */
function calculateFactorial($number)
{
    if ($number < 0) {
        die('Number cannot be less than zero');
    } elseif ($number == 0) {
        return 1;
    }

    return $number * calculateFactorial($number - 1);
}


/**
 * @param int $number
 * @return int
 */
function recursiveCounter($number = 0)
{
    echo $number . PHP_EOL;
    return $number < 50 ? recursiveCounter($number + 1) : null;
}

recursiveCounter(8);

echo calculateFactorial(3);