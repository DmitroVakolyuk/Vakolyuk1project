<?php

/**
 * Recursive numbers counter
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 12.07.2016
 */

/**
 * @param int $number
 * @return int
 */
function recursiveCounter($number = 0)
{
    echo $number . PHP_EOL;
    return $number < 50 ? recursiveCounter($number + 1) : null;
}

recursiveCounter();
