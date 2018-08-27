<?php

/**
 * Recursive factorial
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 12.07.2016
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

echo calculateFactorial(10);
